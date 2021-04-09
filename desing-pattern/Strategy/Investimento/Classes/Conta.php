<?php

class Conta {
    private float $saldo = 0;

    public function deposita($valor) {
        $this->saldo += $valor;
    }

    public function getSaldo() {
        return $this->saldo;
    }
}
