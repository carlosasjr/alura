<?php

namespace State\Desconto\Class;

class Orcamento
{
    private EstadoOrcamento $estado;

    public function __construct(
        private float $valor,
        private array $itens = [],
    )
    {
        $this->estado = new EmAprovacao();
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * @param float $valor
     */
    public function setValor(float $valor): void
    {
        $this->valor = $valor;
    }

    public function addItem(Item $item)
    {
        $this->itens[] = $item;
    }

    /**
     * @return array
     */
    public function getItens(): array
    {
        return $this->itens;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado(EstadoOrcamento $estado): void
    {
        $this->estado = $estado;
    }

    public function aprova()
    {
        $this->estado->aprovar($this);
    }

    public function reprova()
    {
        $this->estado->reprova($this);
    }

    public function finaliza()
    {
        $this->estado->finaliza($this);
    }


    public function aplicarDesconto()
    {
       $this->estado->aplica($this);
    }
}
