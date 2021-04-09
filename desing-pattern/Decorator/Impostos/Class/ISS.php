<?php

namespace Decorator\Impostos\Class;

use Decorator\Impostos\Interface\Imposto;

class ISS extends ImpostoCondicionalTemplate
{
    public function __construct(?Imposto $outroImposto = null)
    {
        parent::__construct($outroImposto);
    }

    public function deveUserMaximo(Orcamento $orcamento)
    {
        return $orcamento->getValor() > 300;
    }

    public function taxacaoMaxima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.10 + $this->calcularOutroImposto($orcamento);
    }

    public function taxacaoMinima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.01 + $this->calcularOutroImposto($orcamento);
    }
}
