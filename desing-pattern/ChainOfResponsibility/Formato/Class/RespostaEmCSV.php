<?php
namespace Formato\Class;

use Formato\Interface\RespostaInterface;

class RespostaEmCSV extends TemplateResposta
{
    protected function temFormato(Requisicao $req)
    {
        return $req->getFormato() === Formato::$CSV;
    }

    protected function retorno()
    {
        return 'RETORNO EM CSV';
    }

}
