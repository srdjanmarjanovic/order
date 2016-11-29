<?php
namespace Order\Contracts\Discounts;

interface DiscountsInterface
{
    /**
     * Add discount into order.
     *
     * @param DiscountInterface $discount
     * @return mixed
     */
    public function addDiscount(DiscountInterface $discount);

    /**
     * Return all discounts in order.
     *
     * @return array
     */
    public function getDiscounts(): array;

    /**
     * Calculate total discount for the order.
     *
     * @return float
     */
    public function getTotalDiscount(): float;
}