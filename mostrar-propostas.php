<?php
require_once __DIR__ . '/assets/php/config.php';
?>

<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>GG | Propostas</title>
</head>
<body>
    <div class="container">
        <h1>Lista de Propostas</h1>
        
        <?php
        try {
            $stmt = $pdo->query("SELECT * FROM propostas ORDER BY referencias DESC");
            $propostas = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($propostas) > 0): ?>
                <div class="table-responsive">
                    <table class="propostas-table">
                        <thead>
                            <tr>
                                <th>Referência</th>
                                <th>Cliente</th>
                                <th>Nome</th>
                                <th>Localidade</th>
                                <th>Valor</th>
                                <th>Sistema</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($propostas as $proposta): ?>
                                <tr>
                                    <td><?= htmlspecialchars($proposta['referencias']) ?></td>
                                    <td><?= htmlspecialchars($proposta['cliente']) ?></td>
                                    <td><?= htmlspecialchars($proposta['nome']) ?></td>
                                    <td><?= htmlspecialchars($proposta['localidade']) ?></td>
                                    <td><?= number_format($proposta['valor_proposta'], 0, ',', ' ') ?> €</td>
                                    <td><?= htmlspecialchars($proposta['sistema']) ?></td>
                                    <td>
                                        <span class="status-badge <?= htmlspecialchars($proposta['estado']) ?>">
                                            <?= ucfirst($proposta['estado']) ?>
                                        </span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <p class="no-results">Nenhuma proposta encontrada.</p>
            <?php endif;

        } catch (PDOException $e) {
            echo "<p class='error-msg'>Erro ao carregar propostas: " . $e->getMessage() . "</p>";
        }
        ?>
    </div>
</body>
</html>