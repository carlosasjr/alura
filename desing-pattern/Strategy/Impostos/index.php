<?php

require "Interface/ImpostoInterface.php";
require "Classes/Orcamento.php";
require "Classes/CalculadoraDeImpostos.php";
require "Classes/ICMS.php";
require "Classes/ISS.php";
require "Classes/ICCC.php";

$orcamento = new Orcamento(5000);

$calculadora = new CalculadoraDeImpostos();

$icms = $calculadora->calcular($orcamento, new ICMS());
$iss = $calculadora->calcular($orcamento, new ISS());
$iccc = $calculadora->calcular($orcamento, new ICCC());

var_dump($icms, $iss, $iccc);

