<?php 
require_once "funzioni.php";

$nome = $_POST["nome"] ?? "";
$quantita = $_POST["quantita"] ?? "";
$id = $_POST["id"] ?? "";

if ($nome === "" && $quantita === "") {
    // Nessun campo modificato
    modifica($nome, $quantita, $id, 0);

} elseif ($nome === "") {
    // Nome vuoto, quantità presente
    modifica($nome, $quantita, $id, 2);

} elseif ($quantita === "") {
    // Quantità vuota, nome presente
    modifica($nome, $quantita, $id, 1);

} else {
    // Entrambi presenti
    modifica($nome, $quantita, $id, 3);
}

?>
