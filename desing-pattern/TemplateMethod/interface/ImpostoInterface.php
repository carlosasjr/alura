<?php

namespace TemplateMethod\Interface;

use TemplateMethod\Class\Orcamento;

interface ImpostoInterface {
    public function calcular(Orcamento $orcamento);
}

