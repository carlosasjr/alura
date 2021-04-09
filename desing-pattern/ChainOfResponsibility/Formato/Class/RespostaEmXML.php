<?php
namespace Formato\Class;

use Formato\Interface\RespostaInterface;

class RespostaEmXML extends TemplateResposta
{
    protected function temFormato(Requisicao $req)
    {
        return $req->getFormato() === Formato::$XML;
    }

    protected function retorno()
    {
        return 'RETORNO EM XML';
    }
}
