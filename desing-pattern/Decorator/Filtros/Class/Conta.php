<?php

namespace Decorator\Filtros\Class;

use DateTime;

class Conta
{
    public function __construct(private float $saldo, private $dataAbertura)
    {
    }

    /**
     * @return float
     */
    public function getSaldo(): float
    {
        return $this->saldo;
    }

    /**
     * @return DateTime
     */
    public function getDataAbertura()
    {
        return $this->dataAbertura;
    }

}
