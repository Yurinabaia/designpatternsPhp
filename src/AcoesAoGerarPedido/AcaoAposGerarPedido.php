<?php
namespace App\DessignPattern\AcoesAoGerarPedido;

use App\DessignPattern\Pedidos;

interface AcaoAposGerarPedido
{
    public function executarAcao(Pedidos $pedidos): void;
}
