<?php

namespace Builder\Notas\Class;

use Builder\Notas\Class\AcaoDaNotaFiscalInterface;

class Imprimir implements AcaoDaNotaFiscalInterface
{

    public function executar(NotaFiscal $notaFiscal)
    {

        print_r("imprimir nota ");
    }
}
