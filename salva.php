<?php 
require_once "connetti.php";
if($_POST["bottone"]==0){
    $pdo = connetti();

    // PREPARA LA QUERY
    $stm = $pdo->prepare("
        INSERT INTO prodotti (nome, quantita) 
        VALUES (:nome, :quantita)
    ");

    // ASSOCIA I PARAMETRI (corretti!)
    $stm->bindParam(":nome", $_POST["nome"]);
    $stm->bindParam(":quantita", $_POST["quantita"]);

    // ESEGUI
    $stm->execute();
}
// REDIRECT ALLA HOME
header("Location: index.php");
exit;
?>
