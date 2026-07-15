<?php
    require_once "connetti.php";

    $pdo=connetti();

    $pdo->exec("DELETE FROM prodotti");
    $pdo->exec("DELETE FROM sqlite_sequence WHERE name='prodotti'");

    header("Location: index.php");
    exit;

?>

?>