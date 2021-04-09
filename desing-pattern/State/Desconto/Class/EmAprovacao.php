<?php
namespace State\Desconto\Class;

class EmAprovacao implements EstadoOrcamento
{
    public function __construct(private $descontoAplicado = false)
    {
    }

    public function aplica(Orcamento $orcamento)
    {
        if (!$this->descontoAplicado) {
            $orcamento->setValor($orcamento->getValor() - $orcamento->getValor() * 0.02);

            return $this->descontoAplicado = true;
        }

        throw new \Exception('Desconto em aprovação já foi aplicado');
    }

    public function aprovar(Orcamento $orcamento)
    {
        $orcamento->setEstado(new Aprovado());
    }

    public function reprova(Orcamento $orcamento)
    {
        $orcamento->setEstado(new Reprovado());
    }

    public function finaliza(Orcamento $orcamento)
    {
        throw new \Exception("Apenas orçamentos aprovados podem ser finalizados");
    }
}
