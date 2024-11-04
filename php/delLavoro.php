<?php 
    ob_start();
    session_start();
    require_once('database.php');
    if (isset($_SESSION['session_id'])) {

        $idL = $_POST['idL'];

        echo "Titolo: " . $idL . "<br>"; 


        $sqlInsert = "DELETE FROM lavoro WHERE idL = $idL";

        $sqlQueryCorso = mysqli_query($conn, $sqlInsert);
        header('Location: ../stampa.php');
    }
    else{
        header('Location: accedi.php');
    }
    
?>