<?php

use State\Desconto\Class\Aprovado;
use State\Desconto\Class\Item;
use State\Desconto\Class\Orcamento;

require "autoloader.php";


$orcamento = new Orcamento(600);
$orcamento->addItem(new Item('Lapis', 200));
$orcamento->addItem(new Item('Caneta', 50));

$orcamento->aplicarDesconto();

$orcamento->aprova();
$orcamento->aplicarDesconto();
$orcamento->finaliza();


var_dump($orcamento->getValor());

