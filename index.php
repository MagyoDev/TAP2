<?php
require 'vendor/autoload.php';
use App\Carro;
use App\Hibrido;

$carroHibrido = new Hibrido("Veloz");
$carroHibrido->setCor("Verde");
$carroHibrido->setTipo("Rápido");
$carroHibrido->setAno("2000");
echo $carroHibrido->exibirDados();

// $meuCarro = new Carro();
// $meuCarro->setCor("Verde");
// $meuCarro->setTipo("Rápido");
// $meuCarro->setAno("2000");
// echo $meuCarro->exibirDados();
?>