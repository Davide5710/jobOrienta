<?php
ob_start();
session_start();
require_once('../database.php');
if (isset($_SESSION['session_id'])) {
    //$session_user = htmlspecialchars($_SESSION['session_user'], ENT_QUOTES, 'UTF-8');
    $session_id = htmlspecialchars($_SESSION['session_id']);
    $nomeUtente = htmlspecialchars($_SESSION['nomeUtente']);
    $passUtente = htmlspecialchars($_SESSION['passUtente']);

    if(isset($_POST['mese'])){
        $mese = $_POST['mese'];
        $_SESSION['meseLavoro'] = $mese;
    }
    if(isset($_POST['anno'])){
        $anno = $_POST['anno'];
        $_SESSION['annoLavoro'] = $anno;
    }
    /*
    if(isset($_POST['mese']) && isset($_POST['anno'])){
        $idS =  $_SESSION['idStudio'];
        $idC = $_SESSION['idCliente'];
        $querySql = "
        SELECT *
        FROM lavoro
        WHERE year(data) = $anno AND month(data) = $mese AND idSt = $idS AND idC = $idC";

        $_SESSION['query'] = $querySql;
        $_SESSION['annoLavoro'] = $anno;
        $_SESSION['meseLavoro'] = $mese;
        echo $_SESSION['annoLavoro'] . " " . $_SESSION['meseLavoro'];
        echo $_SESSION['idCliente'] . " " . $idC;
        $_SESSION['isEnter']=1;
        $_SESSION['totalePrezzo']=0;
        //$sqlQuery = mysqli_query($conn, $querySql);
        //$result = mysqli_fetch_array($sqlQuery);
        header('Location: ../../riepilogoMensile.php');
    }
    */
    header('Location: ../../riepilogoMensile.php');
}else{
    header('Location: accedi.php');
}


?>