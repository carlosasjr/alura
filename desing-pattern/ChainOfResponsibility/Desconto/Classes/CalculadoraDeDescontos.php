<?php


namespace ChainOfResponsibility\Desconto;


class CalculadoraDeDescontos
{
    public function desconto(Orcamento $orcamento)
    {
        $desconto3Itens = new Desconto5Itens();
        $desconto500Reais = new Desconto500Reais();
        $descontoVendaCasada = new DescontoPorVendaCasada();
        $semDesconto = new SemDesconto();


        $desconto3Itens->setProximo($descontoVendaCasada);
        $descontoVendaCasada->setProximo($desconto500Reais);
        $desconto500Reais->setProximo($semDesconto);

        return number_format($desconto3Itens->desconto($orcamento), 2);
    }
}
