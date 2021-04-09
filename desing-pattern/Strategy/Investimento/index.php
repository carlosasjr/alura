<?php

require 'Interface/InvestimentoInterface.php';
require 'Classes/Arrojado.php';
require 'Classes/Conservador.php';
require 'Classes/Moderado.php';
require 'Classes/RealizadorDeInvestimentos.php';
require 'Classes/Conta.php';

$conta = new Conta();
$conta->deposita(100);

$investimento = new RealizadorDeInvestimentos();
$saldo = $investimento->realiza($conta, new Conservador());

var_dump($saldo);

