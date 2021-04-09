<?php

namespace Formato\Class;

class Requisicao {

    public function __construct(private $formato)
    {

    }

    /**
     * @return mixed
     */
    public function getFormato()
    {
        return $this->formato;
    }
}


