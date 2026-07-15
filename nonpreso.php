<?php 
    require_once "connetti.php";
    $pdo=connetti();

    $stm=$pdo->prepare("UPDATE prodotti SET comprato=0 where id = :id");
    $stm->bindParam(":id", $_POST["id"]);
    $stm->execute();

    header("Location: index.php");
    exit;


?>