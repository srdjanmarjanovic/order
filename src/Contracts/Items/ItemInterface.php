<?php
namespace Order\Contracts\Items;

interface ItemInterface
{
    /**
     * Return product/service name.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Return product/service price.
     *
     * @return float
     */
    public function getAmount(): float;
}