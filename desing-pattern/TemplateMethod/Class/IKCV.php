<?php

namespace Template\Class;

use TemplateMethod\Class\Orcamento;

class IKCV extends ImpostoCondicionalTemplate
{

    protected function deveUserMaximo(Orcamento $orcamento)
    {
        return $orcamento->getValor() > 500 && $this->temItemMaiorQue100Reais($orcamento);
    }

    protected function taxacaoMaxima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.10;
    }

    protected function taxacaoMinima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.06;
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
