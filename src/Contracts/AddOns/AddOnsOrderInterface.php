<?php
namespace Order\Contracts\AddOns;

interface AddOnsOrderInterface
{
    /**
     * Add Add-On into order.
     *
     * @param AddOnInterface $addOn
     * @param float $amount
     * @return mixed
     */
    public function addAddOn(AddOnInterface $addOn, float $amount);

    /**
     * Return Add-Ons in order.
     *
     * @return array
     */
    public function getAddOns(): array;

    /**
     * Calculate subtotal of all Add-Ons in order.
     *
     * @return float
     */
    public function getAddOnsSubtotal(): float;
}