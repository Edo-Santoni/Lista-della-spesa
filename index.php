<?php require_once "header.php"; ?>
<body>
    <input id="ricerca" placeholder="ricerca">
<?php if(nprodotti() == 0): ?>
    <label class="warnLabel">NESSUN PRODOTTO NELLA LISTA</label>
    <label class="warnLabelSecond">Premere <b>aggiungi</b> per aggiungere un prodotto</label>
<?php else: ?>



    <table border=1>
        <tr class="trDefault">
            <td>id</td>
            <td>nome</td>
            <td>quantità</td>
            <td>azioni</td>
        </tr>

        <?php   
        $prodotti = getdb();

        foreach($prodotti as $prodotto): 

            // Assegna la classe della riga
            if ($prodotto["comprato"] == 1) {
                $classeRiga = "riga-presente";
            } else {
                $classeRiga = "riga-assente";
            }
        ?>

        <tr class="<?= $classeRiga ?>">
            <td><?= $prodotto["id"] ?></td>
            <td><?= $prodotto["nome"] ?></td>
            <td><?= $prodotto["quantita"] ?></td>

            <td>

                <button onclick="apriBollaElimina(<?= $prodotto["id"] ?>)"  class="redBtn">
                    elimina
                </button>

                <!-- FORM PRESO / NON PRESO -->
                <?php if($prodotto["comprato"] == 0): ?>
                    <form action="preso.php" method="POST" style="display:inline;">
                        <button type="submit" class="greenBtn" 
                                name="id" value="<?= $prodotto["id"] ?>">
                            preso
                        </button>
                    </form>
                <?php else: ?>
                    <form action="nonpreso.php" method="POST" style="display:inline;">
                        <button type="submit" class="redBtn"
                                name="id" value="<?= $prodotto["id"] ?>">
                            non preso
                        </button>
                    </form>
                <?php endif; ?>
                    <form action="modifica.php" method="POST" style="display:inline;">
                        <input type="hidden" name="nome" value="<?= $prodotto["nome"] ?>">
                        <input type="hidden" name ="quantita" value="<?= $prodotto["quantita"] ?>">
                        <button type="submit" class="blueBtn" 
                                name="id" value="<?= $prodotto["id"] ?>">
                                modifica
                        </button>

                    </form>

            </td>
        </tr>

        <?php endforeach; ?>

    </table>

<?php endif; ?>

</body>
<script src="assets/ricerca.js">
</script>
