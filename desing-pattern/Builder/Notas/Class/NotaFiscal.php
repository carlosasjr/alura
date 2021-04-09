<?php

namespace Builder\Notas\Class;

class NotaFiscal
{
    private $razaoSocial;
    private $cnpj;
    private $dataDeEmissao;
    private $valorBruto;
    private $impostos;
    private array $itens = [];
    private $observacoes;

    function __construct($razaoSocial, $cnpj, $dataDeEmissao,
        $valorBruto, $impostos, $itens,
        $observacoes) {
        $this->razaoSocial = $razaoSocial;
        $this->cnpj = $cnpj;
        $this->dataDeEmissao = $dataDeEmissao;
        $this->valorBruto = $valorBruto;
        $this->impostos = $impostos;
        $this->itens = $itens;
        $this->observacoes = $observacoes;
    }

    /**
     * @return mixed
     */
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @return mixed
     */
    public function getDataDeEmissao()
    {
        return $this->dataDeEmissao;
    }

    /**
     * @return mixed
     */
    public function getValorBruto()
    {
        return $this->valorBruto;
    }

    /**
     * @return mixed
     */
    public function getImpostos()
    {
        return $this->impostos;
    }

    /**
     * @return array
     */
    public function getItens(): array
    {
        return $this->itens;
    }

    /**
     * @return mixed
     */
    public function getObservacoes()
    {
        return $this->observacoes;
    }


}
