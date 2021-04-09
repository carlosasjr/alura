<?php

namespace Builder\Notas\Class;

class NotaFiscalBuilder
{
    private $razaoSocial;
    private $cnpj;
    private $dataDeEmissao;
    private $valorBruto;
    private $impostos;
    private $itens;
    private $observacoes;
    private $acoes;

    public function __construct(Array $acoes)
    {
        $this->acoes = $acoes;
        $this->dataDeEmissao = date('Y-m-d h:i:s');
        $this->itens = array();
        $this->valorBruto = 0;
        $this->impostos = 0;
        $this->acoes = array();
    }

    /**
     * @param mixed $razaoSocial
     */
    public function setRazaoSocial($razaoSocial): NotaFiscalBuilder
    {
        $this->razaoSocial = $razaoSocial;
        return $this;
    }

    /**
     * @param mixed $cnpj
     */
    public function setCnpj($cnpj): NotaFiscalBuilder
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    /**
     * @param  $dataDeEmissao
     * @return NotaFiscalBuilder
     */
    public function setDataDeEmissao($dataDeEmissao): NotaFiscalBuilder
    {
        $this->dataDeEmissao = $dataDeEmissao;

        return $this;
    }


    /**
     * @param Item $item
     */
    public function add(Item $item): NotaFiscalBuilder
    {
        $this->itens[] = $item;
        $this->valorBruto += $item->getValor();
        $this->impostos += $item->getValor() * 0.05;
        return $this;
    }

    /**
     * @param mixed $observacoes
     */
    public function setObservacoes($observacoes): NotaFiscalBuilder
    {
        $this->observacoes = $observacoes;
        return $this;
    }


    /**
     * @return NotaFiscal
     */
    public function builder()  : NotaFiscal
    {
        $notaFiscal = new NotaFiscal($this->razaoSocial, $this->cnpj, $this->dataDeEmissao, $this->valorBruto, $this->impostos, $this->itens, $this->observacoes);


        $this->executeAcoes($notaFiscal);

        return $notaFiscal;
    }

    private function executeAcoes(NotaFiscal $notaFiscal)
    {

        /** @var AcaoDaNotaFiscalInterface $acao */
        foreach ($this->acoes as $acao) {

            $acao->executar($notaFiscal);
        }
    }


}
