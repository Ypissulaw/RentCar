<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["name"]);
    $carro = htmlspecialchars($_POST["car"]);

    // Aqui você pode salvar os dados em um banco de dados, enviar por e-mail, etc.
    echo "Aluguel realizado com sucesso! Nome: " . $nome . ", Carro: " . $carro;
} else {
    echo "Método de requisição inválido.";
}
?>
