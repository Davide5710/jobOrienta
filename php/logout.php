<?php
session_start();

unset($_SESSION['session_id']);
unset($_SESSION['nomeUtente']);
unset($_SESSION['passUtente']);
unset($_SESSION['idUtente']);
unset($_SESSION['idStudio']);
unset($_SESSION['idCliente']);
unset($_SESSION['query']);
unset($_SESSION['meseLavoro']);
unset($_SESSION['annoLavoro']);
unset($_SESSION['isEnter']);
unset($_SESSION['totalePrezzo']);



header('Location: ../index.php');
?>