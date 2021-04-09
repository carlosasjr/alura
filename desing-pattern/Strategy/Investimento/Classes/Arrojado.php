<?php


class Arrojado implements InvestimentoInterface
{
    private $random;

    public function calcula(Conta $conta): float
    {
        $this->random = mt_rand(1,100);


        if ($this->random >= 1 && $this->random <= 20) {
            return $conta->getSaldo() * 0.05;
        }

        if ($this->random > 20 && $this->random <= 50) {
            return $conta->getSaldo() * 0.03;
        }

        return $conta->getSaldo() * 0.006;



    }
}
