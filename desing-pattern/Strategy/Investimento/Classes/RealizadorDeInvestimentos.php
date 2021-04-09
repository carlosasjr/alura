<?php


class RealizadorDeInvestimentos
{
    public function realiza(Conta $conta, InvestimentoInterface $investimento)
    {
        $resultado = $investimento->calcula($conta);

        $conta->deposita($resultado * 0.75);

        return $conta->getSaldo();
    }
}
