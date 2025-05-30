<?php

session_start();
include_once("connection.php");
include_once("url.php");

$id;

if (!empty($get)) {
    $id = $_GET["id"];
}
// Retorna dado de um contato
if (!empty($id)) {
    $query = "SELECT * FROM contacts WHERE id = :id";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    $contact = $stmt->fetch();
} else {
    // Retorna Todos os Contatos
    $contatcts = [];

    $query = "SELECT * FROM contacts";

    $stmt = $conn->prepare($query);

    $stmt->execute();

    $contacts = $stmt->fetchAll();
}
