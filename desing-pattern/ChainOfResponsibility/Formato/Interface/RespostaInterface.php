<?php

namespace Formato\Interface;


use Formato\Class\Requisicao;

interface RespostaInterface {
    public function responde(Requisicao $req,  $conta);
}
