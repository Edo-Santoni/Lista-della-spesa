<body class="bodyIns">
    <link href="assets/style.css?=v2" rel="stylesheet">

    <div class="divMainIns">

        <form action="salvamodifiche.php" method="POST">
            <div>
                <label>inserisci il nome</label>
                <br>
                <input class="form-input" type="text" placeholder="<?=$_POST["nome"]  ?>" name="nome">

                <br>

                <label>inserisci la quantità</label>
                <br>
                <input type="number" placeholder="<?=$_POST["quantita"]  ?>" name="quantita">
                
                <br>
            </div>
            <button class="greenBtn" type="submit">salva</button>
            <input type="hidden" name="id" value="<?=$_POST["id"]  ?>">
        </form>
        <form action="index.php" method="POST">
            <button class="redBtn" type="submit" name="id" >annulla</button>
            
        </form>
    </div>

</body>
