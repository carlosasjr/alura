<?php


class ICMS implements ImpostoInterface
{
    public function calcular(Orcamento $orcamento): float
    {
        return ($orcamento->getTotal() * 0.05) + 50;
    }
}
