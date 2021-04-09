<?php
require "autoloader.php";

use Decorator\Filtros\Class\Conta;
use Decorator\Filtros\Class\FiltroMaiorQue500Reais;
use Decorator\Filtros\Class\FiltroMenorQue100Reais;

$contas = [
    new Conta(520, date('d.m.Y')),
    new Conta(1200, date('d.m.Y')),
    new Conta(50, date('d.m.Y')),
    new Conta(20, date('d.m.Y')),
];

$filtro = new FiltroMenorQue100Reais(new FiltroMaiorQue500Reais());
$contasFiltrada = $filtro->filtrar($contas);

print_r($contasFiltrada);


