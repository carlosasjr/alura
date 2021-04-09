<?php


namespace Template\Class;


use TemplateMethod\Class\Orcamento;
use TemplateMethod\Interface\ImpostoInterface;

class CalculadoraDeImpostos
{
    public function calcular(Orcamento $orcamento, ImpostoInterface $imposto)
    {
        return $imposto->calcular($orcamento);
    }
}
