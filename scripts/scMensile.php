<?php
ob_start();
session_start();
require_once('php/database.php');
if (isset($_SESSION['session_id'])) {
    //$session_user = htmlspecialchars($_SESSION['session_user'], ENT_QUOTES, 'UTF-8');
    $session_id = htmlspecialchars($_SESSION['session_id']);
    $nomeUtente = htmlspecialchars($_SESSION['nomeUtente']);
    $passUtente = htmlspecialchars($_SESSION['passUtente']);

    //if(isset($_POST['mese'])){
        //$mese = $_POST['mese'];
        $mese = $_SESSION['meseLavoro'];
    //}
    //if(isset($_POST['anno'])){
        //$anno = $_POST['anno'];
        $anno = $_SESSION['annoLavoro'];
    //}
    if($_SESSION['idCliente'] != 0 && $_SESSION['annoLavoro'] != 0){
        $idS =  $_SESSION['idStudio'];
        $idC = $_SESSION['idCliente'];
        $querySql = "
        SELECT *
        FROM lavoro
        WHERE year(data) = $anno AND month(data) = $mese AND idSt = $idS AND idC = $idC";

        //$_SESSION['query'] = $querySql;
        $_SESSION['annoLavoro'] = $anno;
        $_SESSION['meseLavoro'] = $mese;
        //echo "anno: " . $_SESSION['annoLavoro'] . " Mese " . $_SESSION['meseLavoro'];
        //echo $_SESSION['idCliente'] . " " . $idC;
        $_SESSION['isEnter']=1;
        $_SESSION['totalePrezzo']=0;
        $resultMese = $conn->query($querySql);
        //echo "<br>funziona";
        $idCliente = $_SESSION['idCliente'];

        $querySqlCliente = "
        SELECT *
        FROM clienti
        WHERE idC = $idCliente
        ";
        $sqlQueryCli =mysqli_query($conn,$querySqlCliente);
        $resultCli = mysqli_fetch_array($sqlQueryCli);

    }
if (isset($_SESSION['query'])){
    
}
    
}else{
    header('Location: accedi.php');
}

    
?>
