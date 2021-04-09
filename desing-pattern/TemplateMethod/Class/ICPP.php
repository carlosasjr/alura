<?php
namespace Template\Class;

use TemplateMethod\Class\Orcamento;

class ICPP extends ImpostoCondicionalTemplate
{

    protected function deveUserMaximo(Orcamento $orcamento)
    {
        return $orcamento->getValor() > 500;
    }

    protected function taxacaoMaxima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.07;
    }

    protected function taxacaoMinima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.05;
    }
}
