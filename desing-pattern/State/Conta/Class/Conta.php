<?php
namespace State\Conta;

class Conta
{
    private EstadoInterface $estado;

    public function __construct(private $saldo = 0)
    {
    }

    /**
     * @return int
     */
    public function getSaldo(): int
    {
        return $this->saldo;
    }

    /**
     * @param int $saldo
     */
    public function setSaldo(int $saldo): void
    {
        $this->saldo = $saldo;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado(EstadoInterface $estado): void
    {
        $this->estado = $estado;
    }

    public function saque()
    {
        $this->estado->saque($this);
    }

    public function deposito()
    {
        $this->estado->deposito($this);
    }
}
