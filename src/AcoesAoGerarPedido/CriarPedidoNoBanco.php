<?php
namespace App\DessignPattern\AcoesAoGerarPedido;

use App\DessignPattern\Pedidos;

class CriarPedidoNoBanco implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        echo "Criando pedido no banco";
    }
}


