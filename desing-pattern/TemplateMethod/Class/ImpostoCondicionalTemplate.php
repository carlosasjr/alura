<?php

namespace Template\Class;

use TemplateMethod\Class\Orcamento;
use TemplateMethod\Interface\ImpostoInterface;

abstract class ImpostoCondicionalTemplate implements ImpostoInterface
{
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
