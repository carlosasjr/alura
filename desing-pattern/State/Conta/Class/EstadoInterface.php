<?php


namespace State\Conta;

interface EstadoInterface
{
    public function saque(Conta $conta, $valor);
    public function deposito(Conta $conta, $valor);
}
