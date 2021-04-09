<?php


use Decorator\Impostos\Class\ImpostoCondicionalTemplate;
use Decorator\Impostos\Interface\Imposto;

class ImpostoMuitoAlto extends ImpostoCondicionalTemplate
{
    public function __construct(?Imposto $outroImposto = null)
    {
        parent::__construct($outroImposto);
    }

    protected function deveUserMaximo(\Decorator\Impostos\Class\Orcamento $orcamento)
    {
        return $orcamento->getValor() > 500;
    }

    protected function taxacaoMaxima(\Decorator\Impostos\Class\Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.20 + $this->calcularOutroImposto($orcamento);
    }

    protected function taxacaoMinima(\Decorator\Impostos\Class\Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.01  + $this->calcularOutroImposto($orcamento);
    }
}
