<?php

//O pardão abaixo é o template metho, neste padrão é usado quando temos um método que
//repetir muito mais de uma classe, então criamos uma classe abstrata
//Em sequencia ela vai receber este método e vai chamar o método da classe concreta
//que implementa o método

//Basimcamente seria construção de uma casa, onde cada um faz o que quer com a casa
//mas tem um padrão deve ser seguido da casa, como o tamnho de cada comodo e quantos
//comodos tem na casa

//A decoração ficar por conta de cada metodo da classe concreta. 
namespace App\DessignPattern\Impostos;

use App\DessignPattern\Orcamento;

abstract class ImpostoComDuasAliquotas implements Imposto
{
    
    public function imposto(Orcamento $orcamento): float
    {
        if($this->deveAplicarTaxaMaximo($orcamento)){
            return $this->calcularTaxarMinima($orcamento);
        }
        return $this->calcularTaxarMaximo($orcamento);
    }
    abstract protected function deveAplicarTaxaMaximo(Orcamento $orcamento): bool;
    abstract protected function calcularTaxarMinima(Orcamento $orcamento): float;
    abstract protected function calcularTaxarMaximo(Orcamento $orcamento): float;
}
