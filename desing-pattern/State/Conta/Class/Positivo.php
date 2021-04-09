<?php


namespace State\Conta;


class Positivo implements EstadoInterface
{

    public function saque(Conta $conta, $valor)
    {
        $conta->setSaldo($conta->getSaldo() - $valor);

        $this->setEstado($conta);
    }

    public function deposito(Conta $conta, $valor)
    {
        $conta->setSaldo($conta->getSaldo() + ($valor * 0.98));

        $this->setEstado($conta);
    }

    /**
     * @param Conta $conta
     */
    private function setEstado(Conta $conta)
    {
        if ($conta->getSaldo() < 0) {
            return $conta->setEstado(new Negativo());
        }
    }
}
