<?php
require "Interface/DescontoInterface.php";
require "Classes/Item.php";
require "Classes/Orcamento.php";
require "Classes/CalculadoraDeDescontos.php";
require "Classes/DescontoPorVendaCasada.php";

require "Classes/Desconto500Reais.php";
require "Classes/Desconto5Itens.php";
require "Classes/SemDesconto.php";

use ChainOfResponsibility\Desconto\CalculadoraDeDescontos;
use ChainOfResponsibility\Desconto\Item;
use ChainOfResponsibility\Desconto\Orcamento;

$orcamento = new Orcamento(100);
$orcamento->addItem(new Item('Lapis', 100));
$orcamento->addItem(new Item('Caneta', 100));

$desconto = new CalculadoraDeDescontos();
$valor =  $desconto->desconto($orcamento);

var_dump($valor);


