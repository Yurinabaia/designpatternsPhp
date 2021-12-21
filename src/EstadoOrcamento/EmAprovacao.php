<?php
namespace App\DessignPattern\EstadoOrcamento;

use App\DessignPattern\Orcamento;

class EmAprovacao extends EstadoOrcamento
{
    public function aplicaDescontoExtra(Orcamento $orcamento):float
    {
        return $orcamento->valor * 0.05;
    }
    public function aprova(Orcamento $orcamento):void
    {
        $orcamento->estadoAtual = new Aprovado();
    }
    public function reprova(Orcamento $orcamento):void
    {
        $orcamento->estadoAtual = new Reprovado();
    }

}
