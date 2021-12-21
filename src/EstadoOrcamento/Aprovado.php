<?php
namespace App\DessignPattern\EstadoOrcamento;

use App\DessignPattern\Orcamento;

class Aprovado extends EstadoOrcamento
{
    public function aplicaDescontoExtra(Orcamento $orcamento):float
    {
        throw new \DomainException('Um orçamento reprovado não pode recebe desconto extra');
    }
}
