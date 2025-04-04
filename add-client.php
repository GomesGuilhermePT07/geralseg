<?php 

?>

<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>GG | Adicionar Cliente</title>
</head>
<body>
    <form action="./assets/php/captar_cliente">
        <label for="nome">Cliente:</label>
        <input type="text" id="cliente" name="cliente" class="inputs" required>
        <br>

        <label for="nome">Referência:</label>
        <input type="text" id="ref" name="ref" class="inputs" required>
        <br>

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" class="inputs" required>
        <br>

        <label for="nome">Valor da proposta:</label>
        <input type="number" id="proposta" name="proposta" class="inputs" required>
        <br>
        
        <label for="nome">Sistema:</label>
        <input type="text" id="sistema" name="sistema" class="inputs" required>
        <br>
    </form>
</body>
</html>