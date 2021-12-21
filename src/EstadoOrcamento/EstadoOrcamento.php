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
        throw new \DomainException('Um orçamento não pode ser aprovado diretamente');
    }
    public function reprovar(Orcamento $orcamento):void
    {
        throw new \DomainException('Um orçamento não pode ser reprovado diretamente');
    }
    public function finalizar(Orcamento $orcamento):void
    {
        throw new \DomainException('Um orçamento não pode ser finalizado diretamente');
    }

}
