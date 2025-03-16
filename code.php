<?php
require_once './config/conn.php';
require_once './class/carros.class.php';
// Instanciar a classe Carros
$carro = new Carros($conn);
// Obter os carros do banco de dados
$carros = $carro->listarCarros();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alugue seu Carro</title>
</head>
<body>
    <h1>Alugue seu carro 🚗</h1>
    <form method="POST" action="aluguel.php">
        De: 
        <input type="date" name="data_ini" required>
        As: 
        <input type="time" name="hr_ini" required>
        <br><br>
        Até: 
        <input type="date" name="data_fim" required>
        As: 
        <input type="time" name="hr_fim" required>
        <br><br>

        <label for="carro">Escolha um carro:</label>
        <select name="carro" id="carro">
            <?php foreach ($carros as $carro): ?>
                <option value="<?= $carro['id_carro']; ?>">
                <?= htmlspecialchars($carro['marca']) ." ". htmlspecialchars($carro['modelo']) ; ?>
                </option>
            <?php endforeach; ?>
        </select>

        <br><br>
        <input type="submit" value="Alugar">
    </form>
</body>
</html>
