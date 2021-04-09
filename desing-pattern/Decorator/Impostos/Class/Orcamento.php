<?php

namespace Decorator\Impostos\Class;

class Orcamento
{
    public function __construct(
        private float $valor,
        private array $itens = []
    )
    {
    }

    public function getValor(): float
    {
        return $this->valor;
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
