<?php
namespace Decorator\Filtros\Class;

abstract class Filtro
{
    public function __construct(private ?Filtro $outroFiltro = null)
    {
    }

    public abstract function filtrar(array $contas);

    protected function proximo(array $contas): array
    {
        if (!is_null($this->outroFiltro))
            return $this->outroFiltro->filtrar($contas);

        return [];
    }
}
