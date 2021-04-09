<?php

namespace Formato\Class;

class VerificaResposta
{
    public function retorno(Requisicao $requisicao, Conta $conta)
    {
        $respostaXML = new RespostaEmXML(new RespostaEmCSV(new RespostaEmPORCENTO(null)));

        return $respostaXML->responde($requisicao, $conta);
    }
}
