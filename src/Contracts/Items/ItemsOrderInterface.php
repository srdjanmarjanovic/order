<?php
namespace Order\Contracts\Items;

interface ItemsOrderInterface
{
    /**
     * Add product/service into order.
     *
     * @param ItemInterface $item
     * @param float $amount
     * @return mixed
     */
    public function addItem(ItemInterface $item, float $amount);

    /**
     * Return a list of products/services in order.
     *
     * @return array
     */
    public function getItems(): array;

    /**
     *  Calculate subtotal of all products/services in order.
     *
     * @return mixed
     */
    public function getItemsSubtotal();
}