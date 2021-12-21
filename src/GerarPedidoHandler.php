<?php

namespace App\DessignPattern;

use SplSubject;
use SplObjectStorage;
use SplObserver;

//Command handler é usado para executar o comando
//de forma não dependente do cliente
//Basta usar essa classe para executar o comando
//e não precisar ficar escrevendo o código
//de forma dependente do cliente
class GerarPedidoHandler implements \SplSubject
{
    private array $acoesAposGerarPedido = [];
    private $storage;
    public Pedidos $pedidos;

    public function __construct()
    {
        $this->storage = new SplObjectStorage();
    }


    public function execute(GerarPedido $gerarPedido): void
    {

        $orcamento = new Orcamento();
        $orcamento->valor = $gerarPedido->getValorOrcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroIntens();


        $pedido = new Pedidos();
        $pedido->dataFinzalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;
        
        $this->pedidos = $pedido;
        $this->notify();
    }

    public function attach(SplObserver $observer): void
    {
        $this->acoesAposGerarPedido[] = $observer;
    }
    function detach(SplObserver $observer):void
    {
        $this->storage->detach($observer);
    }

    function notify():void
    {
        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->update($this);
        }
    }
}
