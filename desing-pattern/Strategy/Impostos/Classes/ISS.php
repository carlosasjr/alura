<?php


class ISS implements ImpostoInterface
{

    public function calcular(Orcamento $orcamento): float
    {
        return $orcamento->getTotal() * 0.06;
    }
}
