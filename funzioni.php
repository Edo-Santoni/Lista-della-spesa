<?php
    require_once "connetti.php";
    function nprodotti(){

        $pdo=connetti();
        $stm=$pdo->query("SELECT COUNT(*) FROM prodotti");
        $cnt= $stm->fetchColumn(); //fetchColumn restutuisce il valore risultato della query
        return $cnt;

    }

    function prodotticarrello(){
        $pdo=connetti();
        $stm=$pdo->query("SELECT COUNT(*)
         FROM prodotti
        WHERE comprato!=0");
        $cnt=$stm->fetchColumn();
        return $cnt;
    }

        function prodottimancanti(){
        $pdo=connetti();
        $stm=$pdo->query("SELECT COUNT(*)
         FROM prodotti
        WHERE comprato=0");
        $cnt=$stm->fetchColumn();
        return $cnt;
    }

  function getdb(){
    $pdo = connetti();
    $stm = $pdo->query("SELECT id, nome, quantita, comprato FROM prodotti ORDER BY comprato ASC");
    return $stm->fetchAll(PDO::FETCH_ASSOC);

    }

    function modifica($nome, $quantita, $id, $tipo)
    {
        switch ($tipo){

            case 0:
                break;
            case 1:
                $pdo=connetti();
                $stm=$pdo->prepare("UPDATE prodotti SET nome=:nome WHERE id=:id");
                $stm->bindParam(":nome", $nome);
                $stm->bindParam(":id", $id);
                $stm->execute();
                
                break;
            case 2:
                $pdo=connetti();
                $stm=$pdo->prepare("UPDATE prodotti SET quantita=:quantita WHERE id=:id");
                $stm->bindParam(":quantita", $quantita);
                $stm->bindParam(":id", $id);
                $stm->execute();
                
                break;
            case 3:
                $pdo=connetti();
                $stm=$pdo->prepare("UPDATE prodotti SET nome=:nome, quantita=:quantita WHERE id=:id");
                $stm->bindParam(":nome", $nome);
                $stm->bindParam(":quantita", $quantita);
                $stm->bindParam(":id", $id);
                $stm->execute();

                break;
            default:
                break;
               
               

        }
            header("Location: index.php");
            exit;

    }



?>