<?php require_once "funzioni.php" ?>
<link rel="stylesheet" href="assets/style.css">

<?php /* modale conferma elimina */ ?>
<div id="modaleConfermaElimina" class="modaleSfondo">
    <div class="mainBoxModale">
        <div>
            <label>sei sicuro di elimare il prodotto dalla lista</label>
        </div>
        <div class="divBtnModale">
            <button onclick="chiudiBollaElimina()" class="greenBtn">annulla</button>
            <form action="elimina.php" method="POST">
                <input type="hidden" id="id" name="id">
                <button class="redBtn">elimina</button>

            </form>  
        </div>
    </div>
</div>


<?php /* modale conferma pulisci */?>
<div id="modaleConfermaPulisci" class="modaleSfondo">
    <div class="mainBoxModale">
        <div>
            <label>sei sicuro di elimare la lista</label>
        </div>
        <div class="divBtnModale">
            <button onclick="chiudiBollaPulisci()" class="greenBtn">annulla</button>
            <form action="pulisci.php" method="POST">

                <button class="redBtn">pulisci</button>

            </form>  
        </div>
    </div>
</div>


<div class="boxHead">
    <div >
        <label class="mainLabel">LISTA DELLA SPESA</label>
    </div>

    <div class="boxHead2">
        <label class="secondLabel">
            <?= "numero prodotti: " . nprodotti(); ?>
        </label>

        <label class="secondLabel">
            <?= "prodotti nel carrello: " . prodotticarrello(); ?>
        </label>

        <label class="secondLabel">
            <?= "prodotti da prendere: " . prodottimancanti(); ?>
        </label>
    </div>
    <div class="boxHead2">
        <form action="aggiungi.php" method="POST">
            <button class="greenBtn">aggiungi</button>
        </form>
            <button class="redBtn"  onclick="apriBollaPulisci()">pulisci</button>
    </div>

</div>
<script src="assets/script.js">
</script>
