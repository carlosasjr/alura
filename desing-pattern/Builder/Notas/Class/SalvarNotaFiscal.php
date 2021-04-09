<?php
namespace Builder\Notas\Class;

class SalvarNotaFiscal implements AcaoDaNotaFiscalInterface
{

    public function executar(NotaFiscal $notaFiscal)
    {
        echo 'Salvar nota ';
    }
}
