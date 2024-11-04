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
        $descrizione = $_POST['descrizione'];
        $nomePaziente = $_POST['nome'];
        $cognomePaziente= $_POST['cognome'];
        $prezzo = $_POST['prezzo'];
        $idC = $_POST['cliente'];
        $gg = $_POST['gg'];
        $mm = $_POST['mm'];
        $aa = $_POST['aa'];
        $dataEmissione = $aa . "-" . $mm . "-" . $gg;

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

        $sqlInsert = "INSERT INTO lavoro (idU, idSt, idC, titolo, descrizione,nomePaziente,cognomePaziente, prezzo, data)
        VALUES ($idUtente, $idStudio, $idC,'$titolo','$descrizione','$nomePaziente','$cognomePaziente', $prezzo, '$dataEmissione');
        ";

        $sqlQueryCorso = mysqli_query($conn, $sqlInsert);
        $_SESSION['idCliente'] = $idC;
        header('Location: ../stampa.php');
    }
    else{
        header('Location: accedi.php');
    }
    
?>