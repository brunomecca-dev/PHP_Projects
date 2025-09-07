<?php

include_once("conn.php");

$method = $_SERVER["REQUEST_METHOD"];

// Regaste dos dados e montagem do Pedido
if ($method === "GET") {
    $bordasQuery = $conn->query("SELECT * FROM bordas");
    $bordas = $bordasQuery->fetchAll();

    $tamanhosQuery = $conn->query("SELECT * FROM tamanhos");
    $tamanhos = $tamanhosQuery->fetchAll();

    $saboresQuery = $conn->query("SELECT * FROM sabores");
    $sabores = $saboresQuery->fetchAll();

    // Criação do Pedido
} else if ($method === "POST") {
    $data = $_POST;

    $borda = $data["borda"];
    $tamanho = $data["tamanhos"];
    $sabores = $data["sabores"];

    // Validação de sabores (4 máximo)
    if (count($sabores) > 4) {
        $_SESSION["msg"] = "Selecione no máximo 4 sabores!";
        $_SESSION["msg_type"] = "warning";
    } else {
        // Salvando dados do pedido
        $stmt = $conn->prepare("INSERT INTO pizzas (borda_id, massa_id) VALUES (:borda, :tamanhos)");

        // Filtrando inputs
        $stmt->bindValue(":borda", $borda, PDO::PARAM_INT);
        $stmt->bindValue(":tamanhos", $tamanho, PDO::PARAM_INT);
        $stmt->execute();

        // Resgatando ID da ultima pizza
        $pizza_id = $conn->lastInsertId();

        $stmt = $conn->prepare("INSERT INTO pizza_sabor (pizza_id, sabor_id) VALUES (:pizza_id, :sabor_id)");
        // Loop para salvar os sabores
        foreach ($sabores as $sabor) {
            // Filtrando inputs
            $stmt->bindValue(":pizza_id", $pizza_id, PDO::PARAM_INT);
            $stmt->bindValue(":sabor_id", $sabor, PDO::PARAM_INT);
            $stmt->execute();
        }
        // Criar o pedido da Pizza
        $stmt = $conn->prepare("INSERT INTO pedidos (pizza_id), status_id) VALUES (:pizza, :status)");

        // Status -> sempre inicia com 1, que é em produção
        $statusId = 1;

        // Filtrar inputs
        $stmt->bindParam(":pizza", $pizzaId);
        $stmt->bindParam(":status", $statusId);

        $stmt->execute();

        // Exibir mensagem de sucesso
        $_SESSION["msg"] = "Pedido realizado com sucesso!";
        $_SESSION["status"] = "success";
    }
    // Redirecionamento para página inicial
    header("Location: ..");
}
