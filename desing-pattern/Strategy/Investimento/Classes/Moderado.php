<?php


class Moderado implements InvestimentoInterface
{
    private $random;

    public function calcula(Conta $conta): float
    {
        $this->random = mt_rand(1,100);

        if ($this->random >= 50) {
            return $conta->getSaldo() * 0.025;
        }

        return $conta->getSaldo() * 0.007;
    }
}
