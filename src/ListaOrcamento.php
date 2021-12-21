<?php
namespace App\DessignPattern;

use ArrayIterator;

class ListaOrcamento implements \IteratorAggregate
{
    private array $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }



    public function addOrcamento(Orcamento $orcamento): void
    {
        $this->orcamentos[] = $orcamento;
    }

    public function getIterator(): \ArrayIterator {
        return new ArrayIterator($this->orcamentos);
    }
    // public function getOrcamento()
    // {
    //     return $this->orcamentos;
    // }


    //Classe Iterator

    // function rewind() :void{//Ler o primeiro elemento
    //     var_dump(__METHOD__);
    //     $this->position = 0;
    // }

    // function current() {//Metodo que estamos implementando
    //     var_dump(__METHOD__);
    //     return $this->array[$this->position];
    // }

    // function key() {//O id do array
    //     var_dump(__METHOD__);
    //     return $this->position;
    // }

    // function next():void {//Proximo array
    //     var_dump(__METHOD__);
    //     ++$this->position;
    // }

    // function valid():bool {//validando se o array existe
    //     var_dump(__METHOD__);
    //     return isset($this->array[$this->position]);
    // }
}
