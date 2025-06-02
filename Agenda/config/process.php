<?php

session_start();
include_once("connection.php");
include_once("url.php");

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
