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

        if(isset($_SESSION['meseLavoro'])){
            $mese = $_SESSION['meseLavoro'];
            $anno = $_SESSION['annoLavoro'];
            $idC = $_SESSION['idCliente'];
            
            $sqlQuery = "
            DELETE FROM lavoro 
            WHERE month(data) = $mese and idSt = $idStudio and idU = $idUtente and idC = $idC ";
            
            $sqlQueryCli =mysqli_query($conn,$sqlQuery);
            //$resultCli = mysqli_fetch_array($sqlQueryCli);
        }
        header('Location: ../stampa.php');
    }
    else{
        header('Location: accedi.php');
    }
    
?>