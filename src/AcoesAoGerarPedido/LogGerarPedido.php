<?php
namespace App\DessignPattern\AcoesAoGerarPedido;

use App\DessignPattern\Pedidos;
use SplObserver;

class LogGerarPedido implements SplObserver     // implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        
        echo "Logando pedido";
    }
}

