<?php
namespace Order\Implementation;

use Order\Contracts\AddOns\AddOnInterface;
use Order\Contracts\AddOns\AddOnsOrderInterface;
use Order\Contracts\Discounts\DiscountInterface;
use Order\Contracts\Discounts\DiscountsInterface;
use Order\Contracts\Items\ItemInterface;
use Order\Contracts\Items\ItemsOrderInterface;
use Order\Contracts\OrderInterface;

class SubscriptionOrder implements OrderInterface, ItemsOrderInterface , AddOnsOrderInterface,DiscountsInterface
{

    /**
     * @var LineItem[] array
     */
    private $items = [];

    /**
     * @var LineItem[] array
     */
    private $addOns = [];

    /**
     * @var LineItem[] array
     */
    private $discounts = [];

    /**
     * Add Add-On into order.
     *
     * @param AddOnInterface $addOn
     * @param float $amount
     * @return mixed
     */
    public function addAddOn(AddOnInterface $addOn, float $amount)
    {
        array_push($this->addOns,
            (new LineItem())->setName($addOn->getName())
                            ->setAmount($addOn->getDefaultPrice())
        );
    }

    /**
     * Return Add-Ons in order.
     *
     * @return LineItem[]
     */
    public function getAddOns(): array
    {
        return $this->addOns;
    }

    /**
     * Calculate subtotal of all Add-Ons in order.
     *
     * @return float
     */
    public function getAddOnsSubtotal(): float
    {
        $amount = 0;

        foreach ($this->addOns as $addOn) {
            $amount += $addOn->getAmount() * $addOn->getQuantity();
        }

        return $amount;
    }

    /**
     * Add discount into order.
     *
     * @param DiscountInterface $discount
     * @return mixed
     */
    public function addDiscount(DiscountInterface $discount)
    {
        array_push($this->discounts,
            (new LineItem())->setName($discount->getName())
                ->setAmount($discount->getAmount())
        );    }

    /**
     * Return all discounts in order.
     *
     * @return array
     */
    public function getDiscounts(): array
    {
        return $this->discounts;
    }

    /**
     * Calculate total discount for the order.
     *
     * @return float
     */
    public function getTotalDiscount(): float
    {
        $discount = 0;

        foreach ($this->discounts as $discount) {
            $discount += $discount->getAmount();
        }

        return $discount;
    }

    /**
     * Add product/service into order.
     *
     * @param ItemInterface $item
     * @param float $amount
     * @return mixed
     */
    public function addItem(ItemInterface $item, float $amount)
    {
        array_push($this->items,
            (new LineItem())->setName($item->getName())
                            ->setAmount($item->getAmount())
        );
    }

    /**
     * Return a list of products/services in order.
     *
     * @return array
     */
    public function getItems(): array
    {
        return $this->getItems();
    }

    /**
     *  Calculate subtotal of all products/services in order.
     *
     * @return mixed
     */
    public function getItemsSubtotal()
    {
        $items = 0;

        foreach ($this->items as $items) {
            $items += $items->getAmount();
        }

        return $items;
    }

    /**
     * Calculate total amount of the order.
     *
     * @return float
     */
    public function getTotal(): float
    {
        return $this->getItemsSubtotal() + $this->getAddOnsSubtotal() - $this->getTotalDiscount();
    }

    /**
     * Return all line items in order.
     *
     * @return array
     */
    public function getLineItems(): array
    {
        return [
            'items' => $this->getItems(),
            'add_ons' => $this->getAddOns(),
            'discounts' => $this->getAddOns()
        ];
    }
}