<?php


class CalculadoraDeImpostos
{
    public function calcular(Orcamento $orcamento, ImpostoInterface $imposto)
    {
        return  number_format($imposto->calcular($orcamento), 2, ',', '.');
    }
}
