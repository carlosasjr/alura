<?php

namespace Formato\Class;

use Exception;
use Formato\Interface\RespostaInterface;

class RespostaEmPORCENTO extends TemplateResposta
{
    protected function temFormato(Requisicao $req)
    {
        return $req->getFormato() === Formato::$PORCENTO;
    }

    protected function retorno()
    {
        return 'RETORNO EM PORCENTO';
    }
}
