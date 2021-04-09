<?php
namespace Template\Class;

use TemplateMethod\Class\Orcamento;

class ISS extends ImpostoCondicionalTemplate
{
    public function deveUserMaximo(Orcamento $orcamento)
    {
        return $orcamento->getValor() > 300;
    }

    public function taxacaoMaxima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.10;
    }

    public function taxacaoMinima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.01;
    }
}
