<?php
namespace App\DessignPattern;

interface Command
{
    public function execute(GerarPedido $gerarPedido ):void; 
}
