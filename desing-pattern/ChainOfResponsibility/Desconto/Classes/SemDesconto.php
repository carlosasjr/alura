<?php


namespace ChainOfResponsibility\Desconto;


class SemDesconto implements DescontoInterface
{

    public function desconto(Orcamento $orcamento)
    {
        return 0;
    }

    public function setProximo(DescontoInterface $proximoDesconto)
    {

    }
}
