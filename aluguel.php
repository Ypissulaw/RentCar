<?php
require_once './config/conn.php';
require_once './class/alugar.class.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $carro = htmlspecialchars($_POST['carro']);
    $data_ini = htmlspecialchars($_POST['data_ini']);
    $hr_ini = htmlspecialchars($_POST['hr_ini']);
    $data_fim = htmlspecialchars($_POST['data_fim']);
    $hr_fim = htmlspecialchars($_POST['hr_fim']);
    $novoAluguel->Alugar($carro,$data_ini, $hr_ini, $data_fim, $hr_fim);
}