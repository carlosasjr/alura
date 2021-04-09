<?php

namespace Decorator\Filtros\Class;

class FiltroMaiorQue500Reais extends Filtro
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
            if ($conta->getSaldo() > 500) {
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
