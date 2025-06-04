<?php

session_start();
include_once("connection.php");
include_once("url.php");

$data = $_POST;

// MODIFICAÇÔES NO BANCO
if (!empty($data)) {

    // CRIAR CONTATO
    if ($data["type"] === "create") {
        $name = $data["name"];
        $phone = $data["phone"];
        $observations = $data["observations"];
    }



    $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":phone", $phone);
    $stmt->bindParam(":observations", $observations);

    try {
        $stmt->execute();
        $_SESSION["msg"] = "CONTATO CRIADO COM SUCESSO!";
    } catch (PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
    }
    // REDIRECT HOME
    header("Location:" . $BASE_URL . "../index.php");

    // SELEÇÂO DE DADOS    
} else {
    $id = null;;

    if (!empty($_GET["id"])) {
        $id = $_GET["id"];
    }

    // Retorna dado de um contato
    if (!empty($id)) {
        $query = "SELECT * FROM contacts WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
        $contacts = [];
        $query = "SELECT * FROM contacts";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

// FECHAR CONEXÃO
$conn = null;
