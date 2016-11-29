<?php
declare(strict_types=1);

namespace Order\Implementation;

class LineItem
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var float
     */
    private $quantity = 1;

    /**
     * @param string $name
     * @return LineItem
     */
    public function setName(string $name): LineItem
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param float $amount
     * @return LineItem
     */
    public function setAmount(float $amount): LineItem
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $quantity
     * @return LineItem
     */
    public function setQuantity(float $quantity): LineItem
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }
}