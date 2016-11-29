<?php
namespace Order\Contracts\Discounts;

interface DiscountInterface
{
    /**
     * Return discount name.
     *
     * @return mixed
     */
    public function getName();

    /**
     * Calculate discount amount.
     *
     * @return mixed
     */
    public function getAmount();
}