<?php

namespace Decorator\Impostos\Class;

use Decorator\Impostos\Interface\Imposto;

class CalculadoraDeImpostos
{
    public function calcular(Orcamento $orcamento, Imposto $imposto)
    {
        return $imposto->calcular($orcamento);
    }
}
