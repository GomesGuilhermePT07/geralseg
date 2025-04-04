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
    <form action="./assets/php/captar_cliente" class="inputs-form">
        <input type="text" id="cliente" name="cliente" class="inputs" placeholder="Cliente" required>
        <input type="text" id="ref" name="ref" class="inputs" placeholder="Referência" required>
        <input type="text" id="nome" name="nome" class="inputs" placeholder="Nome" required>
        <input type="number" id="proposta" name="proposta" class="inputs" placeholder="Valor da proposta" required>
        <input type="text" id="sistema" name="sistema" class="inputs" placeholder="Sistema" required>
    </form>
</body>
</html>