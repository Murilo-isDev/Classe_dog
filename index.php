<?php

require "Cachorro.php";

$c1 = new Cachorro();

$c1->nome = "Nina";
$c1->raca = "Vira Lata com Salsicha";
$c1->cor = "Branca pintadinha com marrom";
$c1->peso = "10";
$c1->pelagem = "Curta"; 


$c1-> dados();
$c1-> latir(); 
$c1-> dormir(); 
$c1-> pesar();

echo "---------------------------------<br>";

$c2 = new Cachorro();


$c2->nome = "Veludo";
$c2->raca = "Bodercollie";
$c2->cor = "Branca e preto";
$c2->peso = "30";
$c2->pelagem = "longo"; 

$c2-> dados();
$c2-> latir(); 
$c2-> dormir(); 
$c2-> pesar();


$c1->engordar(5);
$c1->pesar();


?>