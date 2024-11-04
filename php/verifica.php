<?php 
//connessione al database
require_once('database.php');
session_start();
ob_start();

//prende i codici d'accesso
$usernameLogin = $_POST['societa'];
$passwordLogin = $_POST['pass'];

//query
$querySql = "
            SELECT *
            FROM utente
            WHERE user =  '$usernameLogin' AND password = '$passwordLogin' 
            ";

$sqlQuery =mysqli_query($conn,$querySql);
$result = mysqli_fetch_array($sqlQuery);
//controlla il numero delle righe            
$numeroRighe = mysqli_num_rows($sqlQuery);

if($numeroRighe == 0){
    header('Location: ../accedi.php');
}

elseif ($numeroRighe == 1){
    //prende il nome dalla tabella
    $userSql = $result['user'];
    
    if($usernameLogin == $result['user'] AND $passwordLogin == $result['password']){
        session_regenerate_id();
        $_SESSION['session_id'] = session_id();
        $_SESSION['nomeUtente'] = $usernameLogin;
        $_SESSION['passUtente'] = $result['password'];
        $_SESSION['idUtente'] = $result['idU'];
        $_SESSION['idStudio'] = $result['idSt'];
        $_SESSION['meseLavoro'] = 0;
        $_SESSION['annoLavoro'] = 0;
        $_SESSION['isEnter']=0;
        $_SESSION['totalePrezzo']=0;
        
        echo $result['idU'] . " " . $result['idSt'];

        header('Location: ../home.php');

    }
    else {
        header('Location: ../accedi.php');

    }
}
/*
echo "società: " . $societaLogin . "<br>";
echo "password: " . $passwordLogin;

session_start();
ob_start();

require_once('database.php');

$usernameLogin = $_POST['username'];
$passwordLogin = $_POST['password'];
$_SESSION['prova'] = "comeVa";

$querySql = "
            SELECT username, password
            FROM accesso
            WHERE username =  '$usernameLogin' AND password = '$passwordLogin' AND id = 1
        ";

$sqlQuery =mysqli_query($conn,$querySql);
$result = mysqli_fetch_array($sqlQuery);

$numeroRighe = mysqli_num_rows($sqlQuery);

if($numeroRighe == 0){
    header('Location: notLogin.php');
}

else{
    $userSql = $result['username'];

    if($usernameLogin == $result['username'] AND $passwordLogin == $result['password']){
        session_regenerate_id();
        $_SESSION['session_id'] = session_id();
        $_SESSION['session_user'] = $user['username'];
        $_SESSION['nomeUtente'] = $usernameLogin;
        header('Location: ../scelta.php');

    }
    else {
        header('Location: notLogin.php');

    }
*/
?>