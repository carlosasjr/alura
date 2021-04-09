<?php
namespace ChainOfResponsibility\Desconto;

interface DescontoInterface
{
    public function desconto(Orcamento $orcamento);
    public function setProximo(DescontoInterface $proximoDesconto);
}
