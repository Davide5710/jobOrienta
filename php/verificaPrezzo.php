<?php 
session_start();
ob_start();

require_once('database.php');

$usernameLogin = $_POST['username'];
$passwordLogin = $_POST['password'];

$querySql = "
            SELECT username, password
            FROM accesso
            WHERE username =  '$usernameLogin' AND password = '$passwordLogin'
        ";

$sqlQuery =mysqli_query($conn,$querySql);
$result = mysqli_fetch_array($sqlQuery);

$numeroRighe = mysqli_num_rows($sqlQuery);

if($numeroRighe == 0){
    header('Location: notLogin.php');
}

else{
    $userSql = $result['username'];

    if($usernameLogin == $result['username'] AND $passwordLogin == $result['password'] AND $usernameLogin == "admin"){
        session_regenerate_id();
        $_SESSION['session_id'] = session_id();
        $_SESSION['session_user'] = $user['username'];
        $_SESSION['nomeUtente'] = $usernameLogin;
        header('Location: ../Prezzo/prezzoCambio.php');

    }
    else {
        header('Location: notLogin.php');

    }
}
?>