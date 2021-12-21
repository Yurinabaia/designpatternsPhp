<?php
namespace App\DessignPattern;

//Command handler é usado para executar o comando
//de forma não dependente do cliente
//Basta usar essa classe para executar o comando
//e não precisar ficar escrevendo o código
//de forma dependente do cliente
class GerarPedidoHandler implements Command
{
    public function __construct($property)
    {
        $this->property = $property;
    }

    public function execute(GerarPedido $gerarPedido): void
    {
       
        $orcamento = new Orcamento();
        $orcamento->valor = $gerarPedido->valor;
        $orcamento->quantidadeItens = $gerarPedido->quantidadeItens;


        $pedido = new Pedidos();
        $pedido->dataFinzalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->nomeCliente;
        $pedido->orcamento = $orcamento;

        echo "Criado pedido com sucesso!" .PHP_EOL;
    }


}
