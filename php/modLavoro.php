<?php
ob_start();
session_start();
require_once('database.php');
if (isset($_SESSION['session_id'])) {
    $session_id = htmlspecialchars($_SESSION['session_id']);
    $nomeUtente = htmlspecialchars($_SESSION['nomeUtente']);
    $passUtente = htmlspecialchars($_SESSION['passUtente']);
    $idUtente = htmlspecialchars($_SESSION['idUtente']);
    $idStudio = htmlspecialchars($_SESSION['idStudio']);

    $titolo = $_POST['titolo'];
    $descrizionePost = $_POST['descrizione'];
    $descrizionePre = $_POST['descrizionePre'];
    $nomePaziente = $_POST['nome'];
    $cognomePaziente = $_POST['cognome'];
    $prezzo = $_POST['prezzo'];
    $idC = $_POST['cliente'];
    $gg = $_POST['gg'];
    $mm = $_POST['mm'];
    $aa = $_POST['aa'];
    $idLavoro = $_POST['idL'];
    $dataEmissione = $aa . "-" . $mm . "-" . $gg;
    $pieces = explode(" ", $prezzo);
    if ($descrizionePost == "") {
        $descrizione = $descrizionePre;
    } else {
        $descrizione = $descrizionePost;
    }
    echo "Titolo: " . $titolo . "<br>";
    echo "Descrizione: " . $descrizione . "<br>";
    echo "Nome: " . $nomePaziente . "<br>";
    echo "Cognome: " . $cognomePaziente . "<br>";
    echo "Prezzo: " . $prezzo . "<br>";
    echo "Data: " . $gg . "/" . $mm . "/" . $aa . "<br>";
    echo "IdUtente: " . $idUtente . "<br>";
    echo "IdStudio: " . $idStudio . "<br>";
    echo "DataEmissione: " . $dataEmissione . "<br>";
    echo "Id Cliente: " . $idC . "<br>";
    echo "Split " . $pieces[0] . "<br>";
    if ($prezzo == null) {
        $prezzoquery = 0;
    } else {
        if ($pieces[0] == "€") {
            $prezzoquery = 0;
        } else {
            if (is_int($pieces[0]) == true) {
                $prezzoquery = $pieces[0];
                echo "queryPrezzo " . $prezzoquery;
            } else {
                $pieces = explode("€", $prezzo);
                $prezzoquery = $pieces[0];
            }
        }
    }

    $sqlUpdate = "UPDATE lavoro 
                      SET idU = $idUtente, idSt = $idStudio, idC = $idC, titolo = '$titolo', descrizione = '$descrizione', nomePaziente = '$nomePaziente', cognomePaziente = '$cognomePaziente', prezzo =  $prezzoquery, data = '$dataEmissione'
                      WHERE idL = $idLavoro;
        ";

    if ($conn->query($sqlUpdate) === TRUE) {
        echo "successo";
        header('Location: ../stampa.php');
    } else {
        echo "Error updating record: " . $conn->error;
        echo "Contatta Davide <br>";
        echo "<a href='../home.php'>Indietro</a>";
    }

    //$sqlQueryCorso = mysqli_query($conn, $sqlInsert);
    //header('Location: ../home.php');
} else {
    header('Location: accedi.php');
}
