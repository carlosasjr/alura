<?php
require "autoloader.php";

use Decorator\Impostos\Class\CalculadoraDeImpostos;
use Decorator\Impostos\Class\Item;
use  Decorator\Impostos\Class\Orcamento;
use  Decorator\Impostos\Class\ICMS;
use  Decorator\Impostos\Class\ISS;
use  Decorator\Impostos\Class\ICPP;
use  Decorator\Impostos\Class\IKCV;

$orcamento = new Orcamento(600);
$orcamento->addItem(new Item('Lapis', 200));
$orcamento->addItem(new Item('Caneta', 50));

$calculadora = new CalculadoraDeImpostos();
$icms = $calculadora->calcular($orcamento, new ICMS());
$iss = $calculadora->calcular($orcamento, new ISS());
$icpp = $calculadora->calcular($orcamento, new ICPP());
$ikcv = $calculadora->calcular($orcamento, new IKCV());
$impostoAuto = $calculadora->calcular($orcamento, new ImpostoMuitoAlto(new ICMS()));
$icmsWithIcpp = $calculadora->calcular($orcamento, new ICMS(new ISS(new ICPP(new IKCV()))));


var_dump("ICMS = {$icms}", "ISS = {$iss}", "ICPP = {$icpp}",  "IKCV = {$ikcv}", "soma = $icmsWithIcpp");
