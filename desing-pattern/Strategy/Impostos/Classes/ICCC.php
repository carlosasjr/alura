<?php


class ICCC implements ImpostoInterface
{

    public function calcular(Orcamento $orcamento): float
    {
        if ($orcamento->getTotal() < 1000)
           return $orcamento->getTotal() * 0.05;

        if ($orcamento->getTotal() >= 1000 && $orcamento->getTotal() <= 3000)
           return $orcamento->getTotal() * 0.07;

        return ($orcamento->getTotal() * 0.08) + 30;
    }
}
