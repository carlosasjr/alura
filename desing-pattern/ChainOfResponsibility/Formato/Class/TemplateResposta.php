<?php
namespace Formato\Class;

use Exception;
use Formato\Interface\RespostaInterface;

abstract class TemplateResposta implements RespostaInterface
{
    public function __construct(private ?RespostaInterface $resposta)
    {
    }

    final public function responde(Requisicao $req, $conta)
    {
        if ($this->temFormato($req)) {
            return $this->retorno();
        }

        if (!is_null($this->resposta)) {
            return $this->resposta->responde($req, $conta);
        }


        throw new Exception("Formato de resposta não encontrado");
    }

    protected abstract function temFormato(Requisicao $req);
    protected abstract function retorno();

}
