<?php
namespace State\Desconto\Class;

use State\Desconto\Class\Orcamento;

interface EstadoOrcamento
{

    public function aplica(Orcamento $orcamento);
    public function aprovar(Orcamento $orcamento);
    public function reprova(Orcamento $orcamento);
    public function finaliza(Orcamento $orcamento);
}
