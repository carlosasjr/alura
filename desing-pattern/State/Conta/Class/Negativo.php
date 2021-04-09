<?php


namespace State\Conta;


class Negativo implements EstadoInterface
{

    public function saque(Conta $conta, $valor)
    {
        throw new \Exception('Contas com saldo negativo não é permitido realizar saque');
    }

    public function deposito(Conta $conta, $valor)
    {
        $conta->setSaldo($conta->getSaldo() + ($valor * 0.95));

        $this->setEstado($conta);
    }

    /**
     * @param Conta $conta
     */
    private function setEstado(Conta $conta)
    {
        if ($conta->getSaldo() >= 0) {
            return $conta->setEstado(new Positivo());
        }
    }
}
