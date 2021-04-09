<?php

namespace Formato\Class;

class Conta
{
    public function __construct(private string $nome, private string $valor)
    {
    }

    /**
     * @return string
     */
    public function getValor(): string
    {
        return $this->valor;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }
}
