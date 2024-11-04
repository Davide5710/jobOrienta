<?php 
    ob_start();
    session_start();
    require_once('../database.php');
    if (isset($_SESSION['session_id'])) {
        $session_user = htmlspecialchars($_SESSION['session_user'], ENT_QUOTES, 'UTF-8');
        $session_id = htmlspecialchars($_SESSION['session_id']);
        $nomeUtente = htmlspecialchars($_SESSION['nomeUtente']);
        $passUtente = htmlspecialchars($_SESSION['passUtente']);    
        $idUtente = htmlspecialchars($_SESSION['idUtente']);
        $idStudio = htmlspecialchars($_SESSION['idStudio']);   

        $idClienti = $_POST['idClienti'];
        $_SESSION['idCliente'] = $idClienti; 
        
        header('Location: ../../stampa.php');
    }
    else{
        header('Location: accedi.php');
    }
    
?>