<?php


namespace Decorator\Impostos\Class;

use Decorator\Impostos\Interface\Imposto;

class IHIT extends ImpostoCondicionalTemplate
{
    public function __construct(?Imposto $outroImposto = null)
    {
        parent::__construct($outroImposto);
    }

    protected function deveUserMaximo(\TemplateMethod\Class\Orcamento $orcamento)
    {
        return $this->ExisteDoisItemComMesmoNome($orcamento);
    }

    protected function taxacaoMaxima(\TemplateMethod\Class\Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.13 + 100 + $this->calcularOutroImposto($orcamento);
    }

    protected function taxacaoMinima(\TemplateMethod\Class\Orcamento $orcamento)
    {
        return $orcamento->getValor() * (0.01 * count($orcamento->getItens())) + $this->calcularOutroImposto($orcamento);
    }

    private function ExisteDoisItemComMesmoNome(\TemplateMethod\Class\Orcamento $orcamento)
    {
        $noOrcamento = [];

        foreach ($orcamento->getItens() as  $item) {
            if (in_array($item->getNome(), $noOrcamento)) {
                return true;
            }

            array_push($item, $item->getNome());
        }

        return false;
    }
}
