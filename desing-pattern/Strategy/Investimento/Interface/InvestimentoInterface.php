<?php

interface InvestimentoInterface
{
    public function calcula(Conta $conta) : float;
}
