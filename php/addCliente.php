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

        $nomeStudio = $_POST['nomeStudio'];
        $paese = $_POST['paeseStudio'];

        echo "Titolo: " . $nomeStudio . "<br>"; 
        echo "Descrizione: " . $paese . "<br>";


        $sqlInsert = "INSERT INTO clienti (idSt, idU, nomeStudio, paese)
        VALUES ($idStudio, $idUtente, '$nomeStudio','$paese');
        ";

        $sqlQueryCorso = mysqli_query($conn, $sqlInsert);
        header('Location: ../clienti.php');
    }
    else{
        header('Location: accedi.php');
    }
    
?>