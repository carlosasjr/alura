<?php


namespace TemplateMethod\Relatorios;


class RelatorioSimples extends TemplateRelatorio
{

    protected function cabecalho()
    {
        echo "Banco XYZ";
    }

    protected function corpo($contas)
    {
        foreach ($contas as $conta) {
            echo $conta->getNome() ." - " . $conta->getSaldo();
        }
    }

    protected function rodape()
    {
        echo "(11) 1234-5678";
    }
}
