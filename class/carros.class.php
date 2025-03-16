<?php

require_once './config/conn.php';
class Carros
{

    public function __construct(private PDO $conn)
    {
    }

    public function listarCarros(): array
    {
        $stmt = $this->conn->prepare("SELECT id_carro, marca,modelo FROM carros");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Retorna os carros como um array associativo
    }
}

