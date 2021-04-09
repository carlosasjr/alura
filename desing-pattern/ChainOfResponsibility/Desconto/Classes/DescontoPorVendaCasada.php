<?php


namespace ChainOfResponsibility\Desconto;


class DescontoPorVendaCasada implements DescontoInterface
{
    private DescontoInterface $proximo;

    public function desconto(Orcamento $orcamento)
    {
        if ($this->aconteceuVendaCasadaEm($orcamento)) {
            return $orcamento->getTotal() * 0.05;
        }


        return $this->proximo->desconto($orcamento);
    }

    public function setProximo(DescontoInterface $proximoDesconto)
    {
       $this->proximo = $proximoDesconto;
    }

    private function aconteceuVendaCasadaEm(Orcamento $orcamento) {
        return $this->existe("Caneta", $orcamento) && $this->existe("Lapis", $orcamento);
    }

    private function existe($value, Orcamento $orcamento)
    {
        foreach ($orcamento->getItens() as $item) {
            if($item->getName() == $value) {
                return true;
            }
        }

        return false;
    }




}
