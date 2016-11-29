<?php
namespace Order\Contracts\AddOns;

interface AddOnInterface
{
    /**
     * Return Add-On name.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Return default price for Add-On.
     *
     * @return float
     */
    public function getDefaultPrice(): float;
}