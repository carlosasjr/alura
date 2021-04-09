<?php


namespace ChainOfResponsibility\Desconto;


class Desconto5Itens implements DescontoInterface
{
    private DescontoInterface $proximo;

    public function desconto(Orcamento $orcamento)
    {
        if (count($orcamento->getItens()) >= 5 ) {
            return $orcamento->getTotal() * 0.10;
        }

        return $this->proximo->desconto($orcamento);
    }

    public function setProximo(DescontoInterface $proximoDesconto)
    {
       $this->proximo = $proximoDesconto;
    }
}
