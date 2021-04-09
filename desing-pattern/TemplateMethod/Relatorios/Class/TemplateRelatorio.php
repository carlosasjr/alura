<?php

namespace TemplateMethod\Relatorios;

abstract class TemplateRelatorio
{
    protected abstract function cabecalho();
    protected abstract function corpo($contas);
    protected abstract function rodape();

    protected function imprimir($contas)
    {
        $this->cabecalho();
        $this->corpo($contas);
        $this->rodape();
    }


}
