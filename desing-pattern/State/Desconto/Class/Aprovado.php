<?php
namespace State\Desconto\Class;

class Aprovado implements EstadoOrcamento
{
    public function __construct(private $descontoAplicado = false)
    {
    }

    public function aplica(Orcamento $orcamento)
    {
        if (!$this->descontoAplicado) {
            $orcamento->setValor($orcamento->getValor() - $orcamento->getValor() * 0.05);

            return $this->descontoAplicado = true;
        }

        throw new \Exception('Desconto de aprovação já foi aplicado');
    }

    public function aprovar(Orcamento $orcamento)
    {
        throw new \Exception("Este orçamento já se encontra aprovado");
    }

    public function reprova(Orcamento $orcamento)
    {
        throw new \Exception("Um orçamento aprovado  não pode ser reprovado");
    }

    public function finaliza(Orcamento $orcamento)
    {
        $orcamento->setEstado(new Finalizado());
    }
}
