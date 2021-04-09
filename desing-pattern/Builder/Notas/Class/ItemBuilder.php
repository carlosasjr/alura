<?php


use Builder\Notas\Class\Item;

class ItemBuilder
{
    private $name;
    private $valor;


    /**
     * @param mixed $name
     */
    public function setName($name): ItemBuilder
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor): ItemBuilder
    {
        $this->valor = $valor;
        return $this;
    }

    public function builder() : Item
    {
        return new Item($this->name, $this->valor);
    }
}
