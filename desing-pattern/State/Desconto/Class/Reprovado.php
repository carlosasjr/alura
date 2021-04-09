<?php
namespace State\Desconto\Class;

class Reprovado implements EstadoOrcamento
{
    public function aplica(Orcamento $orcamento)
    {
        throw new \Exception('Um orçamento reprovado não pode receber descontos');
    }

    public function aprovar(Orcamento $orcamento)
    {
        throw new \Exception("Apenas orçamentos em aprovação podem ser aprovados");
    }

    public function reprova(Orcamento $orcamento)
    {
        throw new \Exception("Este orçamento já se encontra reprovado");
    }

    public function finaliza(Orcamento $orcamento)
    {
        throw new \Exception("Apenas orçamentos aprovados podem ser finalizados");
    }
}
