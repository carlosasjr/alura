<?php

use Decorator\Filtros\Class\Filtro;
use Decorator\Filtros\Class\Conta;

class FiltroMesmoMes extends Filtro
{
    public function __construct(?Filtro $outroFiltro = null)
    {
        parent::__construct($outroFiltro);
    }

    public function filtrar(array $contas)
    {
        $filtrada = [];

        /** @var Conta $conta */
        foreach ($contas as $conta) {
            if ($conta->getDataAbertura()->get("month") == date("m") &&
            $conta->getDataAbertura()->get("year") == date("Y")) {
                array_push($filtrada, $conta);
            }
        }

        /** @var Conta $conta */
        foreach ($this->proximo($contas) as $conta) {
                array_push($filtrada, $conta);
        }

        return $filtrada;
    }
}
