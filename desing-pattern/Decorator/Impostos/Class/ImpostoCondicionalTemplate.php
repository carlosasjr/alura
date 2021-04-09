<?php

namespace Decorator\Impostos\Class;

use Decorator\Impostos\Interface\Imposto;

abstract class ImpostoCondicionalTemplate extends Imposto
{
    public function __construct(?Imposto $outroImposto = null)
    {
        parent::__construct($outroImposto);
    }

    public function calcular(Orcamento $orcamento): float
    {
        if ($this->deveUserMaximo($orcamento)) {
            return $this->taxacaoMaxima($orcamento);
        }

        return $this->taxacaoMinima($orcamento);
    }

    protected abstract function deveUserMaximo(Orcamento $orcamento);
    protected abstract function taxacaoMaxima(Orcamento $orcamento);
    protected abstract function taxacaoMinima(Orcamento $orcamento);
}
