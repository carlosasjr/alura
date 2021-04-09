<?php

namespace Decorator\Impostos\Interface;

use Decorator\Impostos\Class\Orcamento;

abstract class Imposto {

    public function __construct(protected ?Imposto $outroImposto = null)
    {
    }

    public abstract function calcular(Orcamento $orcamento);

    protected function calcularOutroImposto(Orcamento $orcamento): float|int
    {
        if (is_null($this->outroImposto)) {
            return 0;
        }

        return $this->outroImposto->calcular($orcamento);
    }
}

