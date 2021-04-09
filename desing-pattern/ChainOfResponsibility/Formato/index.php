<?php
require "Interface/RespostaInterface.php";
require "Class/TemplateResposta.php";
require "Class/Conta.php";
require "Class/Requisicao.php";
require "Class/Formato.php";
require "Class/VerificaResposta.php";
require "Class/RespostaEmXML.php";
require "Class/RespostaEmCSV.php";
require "Class/RespostaEmPORCENTO.php";

use Formato\Class\Conta;
use Formato\Class\Formato;
use Formato\Class\Requisicao;
use Formato\Class\VerificaResposta;

$conta = new Conta('Carlos', '100');
$requisicao = new Requisicao(Formato::$PORCENTO);

$verificaResposta = new VerificaResposta();
$result = $verificaResposta->retorno($requisicao, $conta);

var_dump($result);





