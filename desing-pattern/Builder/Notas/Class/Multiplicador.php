<?php

namespace Builder\Notas\Class;

class Multiplicador implements AcaoDaNotaFiscalInterface
{
    public function __construct(private $fator)
    {
    }

    public function executar(NotaFiscal $notaFiscal)
    {
        echo $notaFiscal->getValorBruto() * $this->fator;
    }
}
