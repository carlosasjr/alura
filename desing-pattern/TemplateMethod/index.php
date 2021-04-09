<?php
require "autoloader.php";

use TemplateMethod\Class\Orcamento;

$orcamento = new Orcamento(600);
$orcamento->addItem(new \Template\Class\Item('Lapis', 200));
$orcamento->addItem(new \Template\Class\Item('Caneta', 50));

$calculadora = new \Template\Class\CalculadoraDeImpostos();
$icms = $calculadora->calcular($orcamento, new \Template\Class\ICMS());
$iss = $calculadora->calcular($orcamento, new \Template\Class\ISS());
$icpp = $calculadora->calcular($orcamento, new \Template\Class\ICPP());
$ikcv = $calculadora->calcular($orcamento, new \Template\Class\IKCV());


var_dump($icms, $iss, $icpp, $ikcv);
