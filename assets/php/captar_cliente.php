<?php

require_once __DIR__ . '/config.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Capturar e validar os dados
    $dados = [
        'cliente' => filter_input(INPUT_POST, 'cliente', FILTER_SANITIZE_STRING),
        'ref' => filter_input(INPUT_POST, 'ref', FILTER_SANITIZE_STRING),
        'nome' => filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING),
        'localidade' => filter_input(INPUT_POST, 'localidade', FILTER_SANITIZE_STRING),
        'valor_proposta' => filter_input(INPUT_POST, 'proposta', FILTER_VALIDATE_INT),
        'sistema' => filter_input(INPUT_POST, 'sistema', FILTER_SANITIZE_STRING)
    ];

    // Verificar dados obrigatórios
    if (in_array(null, $dados, true)) {
        header("Location: ../../add-client.php?status=error");
        exit();
    }

    try{
        $sql = "INSERT INTO propostas (referencias, cliente, nome, localidade, valor_proposta, sistema)
                VALUES (:ref, :cliente, :nome, :localidade, :valor_proposta, :sistema)";

        $stmt = $pdo->prepare($sql);
        $stmt->execute($dados);

        header("Location: ../../add-client.php?status=success");
        exit();
    } catch(PDOException $e){
        if($e->errorInfo[1] == 1062) {
            header("Location: ../../add-client.php?status=duplicate");
        } else {
            error_log("Erro DB: " . $e->getMessage());
            header("Location: ../../add-client.php?status=error");
        }
        exit();
    }
} else {
    header("Location: ../../add-client.php");
    exit();
}

?>