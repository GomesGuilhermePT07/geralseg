<?php if(isset($_GET['status'])): ?>
    <div class="status-message <?= htmlspecialchars($_GET['status']) ?>">
        <?php
        
            switch($_GET['status']) {
                case 'success':
                    echo "✅ Cliente adicionado com sucesso!";
                    break;
                case 'duplicate':
                    echo "⛔ Referência já existe!";
                    break;
                case 'error':
                    echo "❌ Erro ao adicionar cliente";
                    break;
            }

        ?>
    </div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>GG | Adicionar Cliente</title>
</head>
<body>
    <p class="add-client-db">Adicionar cliente à base de dados</p>
    <form method="POST" action="./assets/php/captar_cliente.php" class="inputs-form">
        <input type="text" id="cliente" name="cliente" class="inputs" placeholder="Cliente" required>
        <input type="text" id="ref" name="ref" class="inputs" placeholder="Referência" required>
        <input type="text" id="nome" name="nome" class="inputs" placeholder="Nome" required>
        <input type="text" id="localidade" name="localidade" class="inputs" placeholder="Localidade" required>
        <input type="number" id="proposta" name="proposta" class="inputs" placeholder="Valor da proposta" required>
        <input type="text" id="sistema" name="sistema" class="inputs" placeholder="Sistema" required>

        <button type="submit" class="add-btn">Adicionar cliente</button>
    </form>
</body>
</html>