<?php
var_dump(file_exists("connetti.php"));
require_once "connetti.php";

$pdo = connetti();

$pdo->exec("
    CREATE TABLE IF NOT EXISTS prodotti(
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        nome TEXT,
        quantita INTEGER,
        comprato INTEGER DEFAULT 0
    );
");
?>
