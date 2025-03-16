<?php
require_once './config/conn.php';

class Alugueis
{
    public function __construct(private PDO $conn){}

    public function alugar($nome, $carro){
        
        $stmt = "INSERT INTO alugueis (nome,carro) VALUES (:nome, :carro)";
        $stmt = $this->conn->prepare($stmt);
        $stmt->bindValue(':nome', $nome);
		$stmt->bindValue(':carro', $carro);
        $stmt->execute();
        //ao final da operação, responda TRUE

    }
}

$teste=new Alugueis($conn);
$teste->alugando($nome, $carro);









?>