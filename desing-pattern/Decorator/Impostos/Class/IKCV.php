<?php

namespace Decorator\Impostos\Class;

use Decorator\Impostos\Interface\Imposto;

class IKCV extends ImpostoCondicionalTemplate
{
    public function __construct(?Imposto $outroImposto = null)
    {
        parent::__construct($outroImposto);
    }

    protected function deveUserMaximo(Orcamento $orcamento)
    {
        return $orcamento->getValor() > 500 && $this->temItemMaiorQue100Reais($orcamento) ;
    }

    protected function taxacaoMaxima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.10 + $this->calcularOutroImposto($orcamento);
    }

    protected function taxacaoMinima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.06 + $this->calcularOutroImposto($orcamento);
    }

    private function temItemMaiorQue100Reais(Orcamento $orcamento)
    {
        foreach ($orcamento->getItens() as $item) {
            if ($item->getValor() > 100)
                return true;
        }

        return false;
    }
}
