<?php
namespace Order\Contracts;

interface OrderInterface
{
    /**
     * Calculate total amount of the order.
     *
     * @return float
     */
    public function getTotal(): float;

    /**
     * Return all line items in order.
     *
     * @return array
     */
    public function getLineItems(): array;
}