<?php
namespace ChainOfResponsibility\Desconto;

class Orcamento
{
    public function __construct(
        private float $total,
        private array $itens = []
    )
    {
    }

    public function getTotal(): float
    {
        return $this->total;
    }

    public function addItem(Item $item)
    {
        $this->itens[] = $item;
    }

    /**
     * @return array
     */
    public function getItens(): array
    {
        return $this->itens;
    }
}
