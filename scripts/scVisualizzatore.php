<?php
ob_start();
session_start();
require_once('../../php/database.php');
if (isset($_SESSION['session_id'])) {
    //$session_user = htmlspecialchars($_SESSION['session_user'], ENT_QUOTES, 'UTF-8');
    $session_id = htmlspecialchars($_SESSION['session_id']);
    $nomeUtente = htmlspecialchars($_SESSION['nomeUtente']);
    $passUtente = htmlspecialchars($_SESSION['passUtente']);

    $querySql = "
        SELECT *
        FROM lavoro
        WHERE idL =  '$idLav'
    ";

    $sqlQuery = mysqli_query($conn, $querySql);
    $result = mysqli_fetch_array($sqlQuery);

    $idLavoro = $result['idL'];
    $titolo = $result['titolo'];
    $descrizione = $result['descrizione'];
    $prezzo = $result['prezzo'];
    $data = $result['data'];
    $nomePaziente = $result['nomePaziente'];
    $cognomePaziente = $result['cognomePaziente'];


    $delimiter = '-';
    $dataSplit = explode($delimiter, $data);

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
    //echo $dataSplit[0];
    //echo "Titolo " . $descrizione;

    //$numeroRighe = mysqli_num_rows($sqlQueryRiepilogo);
} else {
    header('Location: accedi.php');
}
