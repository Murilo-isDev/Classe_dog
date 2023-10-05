<?php
Class Cachorro
{

    // Atributos = Caracaterísticas
    public $nome;
    public $raca;
    public $cor;
    public $peso;
    public $pelagem;

    // Métodos
    public function dados(){
      echo "Nome:" .$this->nome . "<br> ";
      echo "Raça" .$this->raca . "<br>";
      echo "Cor:" .$this->cor . "<br>";
      echo "Peso:" .$this->peso . "<br>";
      echo "Pelagem:" .$this->pelagem . "<br>";
    }

    public function latir (){
      echo " $this->nome está latindo: Au auuu au <br> ";
    }

    public function dormir(){
       echo "$this->nome está dormindo: ZZZZZZzzzzz <br> ";
    }

    public function pesar(){
        echo "O peso do chachorro(a) $this->nome é: $this->peso <br>";
    }

    public function engordar($peso){
      $this->peso += $peso;
    }

    public function retornarPeso(){
      return $this->peso;
    }
  
}

?>