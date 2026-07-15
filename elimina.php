<?php
    require_once "connetti.php";
    $pdo = connetti();

    $id = $_POST["id"];

    $stm = $pdo->prepare("DELETE FROM prodotti WHERE id = :id");
    $stm->bindParam(":id", $id, PDO::PARAM_INT);
    $stm->execute();

    header("Location: index.php");
    exit;
?>