<?php
class Alugar
{
    public function __construct(private PDO $conn)
    {
    }

    public function Alugar($id_carro, $data_ini, $hr_ini, $data_fim, $hr_fim)
{
    // Combine data e hora
    $data_ini_completa = $data_ini . ' ' . $hr_ini; //data+hr
    $data_fim_completa = $data_fim . ' ' . $hr_fim;//data+hr

    // Verificar disponibilidade
    if (!$this->verificar($id_carro, $data_ini_completa, $data_fim_completa)) {
        return "O carro já está reservado para o período selecionado.";
    }

    // Inserir no banco de dados
    $stmt = $this->conn->prepare("
        INSERT INTO alugueis (id_carro, data_ini, hr_ini, data_fim, hr_fim) 
        VALUES (:id_carro, :data_ini, :hr_ini, :data_fim, :hr_fim)
    ");
    $stmt->bindValue(':id_carro', $id_carro);
    $stmt->bindValue(':data_ini', $data_ini);
    $stmt->bindValue(':hr_ini', $hr_ini);
    $stmt->bindValue(':data_fim', $data_fim);
    $stmt->bindValue(':hr_fim', $hr_fim);
    $stmt->execute();

    return true;
}


public function verificar($id_carro, $data_ini_completa, $data_fim_completa): bool
{
    $stmt = $this->conn->prepare("
        SELECT COUNT(*) AS total 
        FROM alugueis 
        WHERE id_carro = :id_carro 
        AND (
            (data_ini <= :data_fim AND data_fim >= :data_ini)
        )
    ");
    $stmt->bindValue(':id_carro', $id_carro);
    $stmt->bindValue(':data_ini', $data_ini_completa);
    $stmt->bindValue(':data_fim', $data_fim_completa);
    $stmt->execute();

    $disponibilidade = $stmt->fetch(PDO::FETCH_ASSOC);

    return $disponibilidade['total'] == 0; // Retorna true se não houver conflitos
}


}

$novoAluguel=new Alugar($conn);
