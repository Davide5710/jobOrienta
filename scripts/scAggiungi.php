<?php 
    ob_start();
    session_start();
    require_once('php/database.php');
    if (isset($_SESSION['session_id'])) {
        //$session_user = htmlspecialchars($_SESSION['session_user'], ENT_QUOTES, 'UTF-8');
        $session_id = htmlspecialchars($_SESSION['session_id']);
        $nomeUtente = htmlspecialchars($_SESSION['nomeUtente']);
        $passUtente = htmlspecialchars($_SESSION['passUtente']);    
        $querySql = "
        SELECT *
        FROM utente
        WHERE user =  '$nomeUtente' AND password = '$passUtente'
    ";
    
        $sqlQuery = mysqli_query($conn, $querySql);
        $result = mysqli_fetch_array($sqlQuery);
    
        $idStudio = $result['idSt'];
    
        $querySqlRiepilogo = "
        SELECT *
        FROM clienti
        WHERE idSt =  '$idStudio' 
        ORDER BY idC";
    
        $sqlQueryRiepilogo = mysqli_query($conn, $querySqlRiepilogo);
        $resultC = $conn->query($querySqlRiepilogo);
        $numeroRighe = mysqli_num_rows($sqlQueryRiepilogo); 
        
        $giorno = date("d");
        $mese = date("m");
        $anno = date("Y");
    }
    else{
        header('Location: accedi.php');
    }
    
?>