<?php
namespace App\DessignPattern\EstadoOrcamento;

use App\DessignPattern\Orcamento;

//O design pattherns state é um padrão de projeto que visa reduzir a complexidade de um sistema.
//Buscando criar estado para cada ação a ser realizado
//O problema de utilizar este meio que é possivel o estado ser resolvido com apenas um if
//sem necessidade desta complexidade toda. 

abstract class EstadoOrcamento
{
    abstract public function aplicaDescontoExtra(Orcamento $orcamento):float;
    public function aprovar(Orcamento $orcamento):void
    {
        $orcamento->estadoAtual = new Aprovado();
    }
    public function reprovar(Orcamento $orcamento):void
    {
        $orcamento->estadoAtual = new Reprovado();
    }
    public function finalizar(Orcamento $orcamento):void
    {
        $orcamento->estadoAtual = new Finalizado();
    }

}
