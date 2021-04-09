<?php


use Template\Class\ImpostoCondicionalTemplate;

class IHIT extends ImpostoCondicionalTemplate
{

    protected function deveUserMaximo(\TemplateMethod\Class\Orcamento $orcamento)
    {
        return $this->ExisteDoisItemComMesmoNome($orcamento);
    }

    protected function taxacaoMaxima(\TemplateMethod\Class\Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.13 + 100;
    }

    protected function taxacaoMinima(\TemplateMethod\Class\Orcamento $orcamento)
    {
        return $orcamento->getValor() * (0.01 * count($orcamento->getItens()));
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
