<?php


use ChainOfResponsibility\Item;

class Orcamento
{
    public function __construct(
        private float $total,
    )
    {
    }

    public function getTotal(): float
    {
        return $this->total;
    }


}
