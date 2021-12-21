<?php

require 'vendor/autoload.php';

use App\DessignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use App\DessignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use App\DessignPattern\AcoesAoGerarPedido\LogGerarPedido;
use App\DessignPattern\GerarPedido;
use App\DessignPattern\GerarPedidoHandler;
use App\DessignPattern\Orcamento;
use App\DessignPattern\Pedidos;

$valorOrcamento = $argv[1];
$numeroItens = $argv[2];
$nomeCliente = $argv[3];


$gerarPedido = new GerarPedido($valorOrcamento, $numeroItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler($gerarPedido);
$gerarPedidoHandler->attach(new CriarPedidoNoBanco());
$gerarPedidoHandler->attach(new EnviarPedidoPorEmail());
$gerarPedidoHandler->attach(new LogGerarPedido());
$gerarPedidoHandler->execute($gerarPedido );