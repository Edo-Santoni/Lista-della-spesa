<body>
    <link href="assets/style.css" rel="stylesheet">

    <div class="divIns">

        <form action="salva.php" method="POST">
            <div class="divMainIns">
                <label class="labelIns">Inserisci il nome</label>
                <br>
                <input class="form-input" type="text" placeholder="nome" name="nome">
                <br>

                <label class="labelIns">Inserisci la quantità</label>
                <br>
                <input class="form-input" type="number" placeholder="quantità" name="quantita">
                <br>
                <button class="greenBtn" type="submit" value="0" name="bottone">salva</button>
                <button class="redBtn" type="submit" value="1" name="bottone">anulla</button>
            </div>
        </form>
    </div>

</body>
