<?php
namespace Decorator\Impostos\Class;

use Decorator\Impostos\Interface\Imposto;

class ICPP extends ImpostoCondicionalTemplate
{
    public function __construct(?Imposto $outroImposto = null)
    {
        parent::__construct($outroImposto);
    }

    protected function deveUserMaximo(Orcamento $orcamento)
    {
        return $orcamento->getValor() > 500;
    }

    protected function taxacaoMaxima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.07 + $this->calcularOutroImposto($orcamento);
    }

    protected function taxacaoMinima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.05 + $this->calcularOutroImposto($orcamento);
    }
}
