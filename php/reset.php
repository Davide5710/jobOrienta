<?php
session_start();

unset($_SESSION['nomeTela']);
unset($_SESSION['codiceTela']);
unset($_SESSION['nomeSponda']);
unset($_SESSION['codiceSponda']);
unset($_SESSION['nomelunghezza']);
unset($_SESSION['nomeLarghezza']);
unset($_SESSION['codiceLarghezza']);
unset($_SESSION['larghezza']);
unset($_SESSION['nomeMotoriduttore']);
unset($_SESSION['codiceMotore']);
unset($_SESSION['nomeQuadro']);
unset($_SESSION['codiceQuadro']);
unset($_SESSION['nomePosizioneMotore']);
unset($_SESSION['nomePosizioneMotore']);
unset($_SESSION['nomeSponda']);
unset($_SESSION['codiceSponda']);
unset($_SESSION['nomeFacchini']);
unset($_SESSION['nomeFacchiniALt']);
unset($_SESSION['nomeTipoGamba']);
unset($_SESSION['codiceSupporti']);
unset($_SESSION['nomeNumeroFacchini']);
unset($_SESSION['nomeTipoSupporti']);
unset($_SESSION['codiceGamba']);
unset($_SESSION['codicePosizioneMotore']);
//---Prezzo---
unset($_SESSION['prezzoTela']);
unset($_SESSION['prezzoMoto']);
unset($_SESSION['prezzoQuadro']);
unset($_SESSION['prezzoFacchini']);
unset($_SESSION['prezzoSupporti']);
unset($_SESSION['prezzoGamba']);

//unset($_SESSION["nomeQuadro"]);
//$_SESSION['nomeQuadro'] = 'Simone';
//unset($_SESSION['nomeQuadro']);
header('Location: ../SERIE50.php');
