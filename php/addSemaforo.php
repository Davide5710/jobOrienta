<?php
    require_once('database.php');
    $username = htmlspecialchars($_POST['username']);
    $bestTime= htmlspecialchars($_POST['best_time']);
    $score = htmlspecialchars($_POST['score']);
    $score = 0;

    $sqlInsert = "INSERT INTO semaforo (username, tempo)
        VALUES ('$username',$bestTime );
        ";

    $sqlQueryCorso = mysqli_query($conn, $sqlInsert);

    header('Location: ../semaforoIndex.php');


    echo "<h2>Username:" . $username . "</h2> <br>";
    echo "<h2>bestTime:" . $bestTime . "</h2> <br>";
    echo "<h2>Score:" . $score . "</h2> <br>";



?>