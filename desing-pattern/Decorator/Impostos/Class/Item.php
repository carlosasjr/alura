<?php

namespace Decorator\Impostos\Class;

class Item
{
    public function __construct(
        private $name,
        private $valor
    )
    {
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }
}
