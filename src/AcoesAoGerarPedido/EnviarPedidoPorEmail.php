<?php
namespace App\DessignPattern\AcoesAoGerarPedido;

use App\DessignPattern\Pedidos;

class EnviarPedidoPorEmail implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        echo $subject->pedidos->nomeCliente .PHP_EOL; 
        echo "Enviando pedido por email";
    }
}

