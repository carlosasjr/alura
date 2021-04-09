<?php
namespace State\Desconto\Class;

class Finalizado implements EstadoOrcamento
{
    public function aplica(Orcamento $orcamento)
    {
        throw new \Exception('Um orçamento finalizado não pode receber descontos');
    }

    public function aprovar(Orcamento $orcamento)
    {
        throw new \Exception("Apenas orçamentos em aprovação podem ser aprovados");
    }

    public function reprova(Orcamento $orcamento)
    {
        throw new \Exception("Este orçamento não pode ser reprovado");
    }

    public function finaliza(Orcamento $orcamento)
    {
        throw new \Exception("Este orçamento já se encontra finalizado");
    }
}
