<?php

namespace Template\Class;

use TemplateMethod\Class\Orcamento;
use TemplateMethod\Interface\ImpostoInterface;

class ICMS extends ImpostoCondicionalTemplate
{

    protected function deveUserMaximo(Orcamento $orcamento)
    {
        return $orcamento->getValor() > 500;
    }

    protected function taxacaoMaxima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.15;
    }

    protected function taxacaoMinima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.05;
    }
}
