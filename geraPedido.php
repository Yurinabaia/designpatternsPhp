<?php

require 'vendor/autoload.php';
use App\DessignPattern\GerarPedido;
use App\DessignPattern\GerarPedidoHandler;
use App\DessignPattern\Orcamento;
use App\DessignPattern\Pedidos;

$valorOrcamento = $argv[1];
$numeroItens = $argv[2];
$nomeCliente = $argv[3];


$gerarPedido = new GerarPedido($valorOrcamento, $numeroItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler($gerarPedido);
$gerarPedidoHandler0->execute($gerarPedidoHandler );