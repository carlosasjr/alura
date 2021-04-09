<?php


namespace ChainOfResponsibility\Desconto;


class Desconto500Reais implements DescontoInterface
{
    private DescontoInterface $proximo;

    public function desconto(Orcamento $orcamento)
    {
        if ($orcamento->getTotal() > 500) {
            return $orcamento->getTotal() * 0.07;
        }

        return $this->proximo->desconto($orcamento);
    }

    public function setProximo(DescontoInterface $proximoDesconto)
    {
        $this->proximo = $proximoDesconto;
    }
}
