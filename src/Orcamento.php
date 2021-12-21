<?php
namespace App\DessignPattern;

use App\DessignPattern\EstadoOrcamento\EmAprovacao;
use App\DessignPattern\EstadoOrcamento\EstadoOrcamento;
use Exception;

class Orcamento
{


    public int $quantidadeItens;
    public float $valor;
    public EstadoOrcamento $estadoAtual;


    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
    }

    public function aplicarDesconto()
    {
        $this->valor -= $this->estadoAtual->aplicaDescontoExtra($this);
    }
    public function aprovar()
    {
       $this->estadoAtual->aprovar($this);
    }
    public function reprovar()
    {
       $this->estadoAtual->reprovar($this);
    }
    public function finalizar()
    {
       $this->estadoAtual->finalizar($this);
    }
}
