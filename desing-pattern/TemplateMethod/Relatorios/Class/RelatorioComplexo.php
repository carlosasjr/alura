<?php


namespace TemplateMethod\Relatorios;


class RelatorioComplexo extends TemplateRelatorio
{

    protected function cabecalho()
    {
        echo "Banco XYZ";
        echo "Avenida Paulista, 1234";
        echo "(11) 1234-5678";
    }

    protected function corpo($contas)
    {
        foreach($contas as $conta) {
            echo $conta->getNome() . " - " . $conta->getNumero() . " - " . $conta->getAgencia() . " - "                         .$conta->getSaldo();
        }
    }

    protected function rodape()
    {
        echo "banco@xyz.com.br";
        echo date("d/m/Y");
    }
}
