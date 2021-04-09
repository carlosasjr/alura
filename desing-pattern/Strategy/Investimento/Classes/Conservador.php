<?php


class Conservador implements InvestimentoInterface
{

    public function calcula(Conta $conta) : float
    {
        return $conta->getSaldo() * 0.08;
    }
}
