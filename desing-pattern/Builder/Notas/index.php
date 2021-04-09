<?php

use Builder\Notas\Class\Imprimir;
use Builder\Notas\Class\Item;
use Builder\Notas\Class\Multiplicador;
use Builder\Notas\Class\NotaFiscalBuilder;
use Builder\Notas\Class\SalvarNotaFiscal;

require "autoloader.php";

$acoes = [
    new Imprimir(),
    new Multiplicador(12),
    new SalvarNotaFiscal()
];

$notaFiscalBuilder = new NotaFiscalBuilder($acoes);
$notaFiscalBuilder->setCnpj('12345678979')
    ->setRazaoSocial('Carlos Antonio')
    ->setObservacoes('Teste de Observacao');

$itemBuilder = new ItemBuilder();
$itemBuilder->setValor(100)
    ->setName('Produto 1');
$item = $itemBuilder->builder();

$notaFiscalBuilder->add($item);


$notaFiscal = $notaFiscalBuilder->builder();

print_r($notaFiscal);
