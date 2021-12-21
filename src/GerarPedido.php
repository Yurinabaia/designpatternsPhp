<?php

namespace App\DessignPattern;

class GerarPedido
{

    private float $valorOrcamento;
    private int $numeroIntens;
    private string $nomeCliente;

    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }
    public function getValorOrcamento()
    {
        return $this->valorOrcamento;
    }
    public function getNumeroIntens()
    {
        return $this->numeroIntens;
    }


    public function __construct(
        float $valorOrcamento,
        int $numeroIntens,
        string $nomeCliente
    ) {
        $this->valorOrcamento = $valorOrcamento;
        $this->numeroIntens = $numeroIntens;
        $this->nomeCliente = $nomeCliente;
    }
}
