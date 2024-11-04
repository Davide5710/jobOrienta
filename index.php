<?php
ob_start();
session_start();
//require_once('php/database.php');

//$sqlQueryStudio = mysqli_query($conn, $querySqlStudio);
//$resultSql = mysqli_fetch_array($sqlQueryStudio);

?>


<!doctype html>
<html lang="it">

<head>
    <title>JobOrienta</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <center><h1>VISTA</h1></center>
        <div class="row">
            <div class="col-md-4 col-4">
                <a href="tempoReazione.php">
                    <div class="cartaBodyReazione shadow p-3"></div>
                </a>
                <center>
                    <a href="clienti.php">Tempo di Reazione</a>
                </center>
            </div>

            <div class="col-md-4 col-4">
                <a href="programmazione.php">
                    <div class="cartaBodyProg shadow p-3"></div>
                </a>
                <center>
                    <h3>Programmazione</h3>
                </center>
            </div>

            <div class="col-md-4 col-4">
                <a href="velocita.php">
                    <div class="cartaBodyVeloce shadow p-3"></div>
                </a>
                <center>
                    <h3>Velocità</h3>
                </center>
            </div>
        </div>
    </div>
</body>
<style>
    h1 {
        font-weight: 800;
        font-size: 50px;
        color: #b173d7;
    }

    h2 {
        font-weight: 200;
        font-size: 30px;
    }

    h3 {
        font-weight: 400;
        font-size: 30px;
        padding-bottom: 20px;
    }

    a {
        text-decoration: none;
        font-weight: 400;
        font-size: 30px;
        padding-bottom: 20px;
        color: #000000;


    }

    a:hover {
        color: #000000;
    }

    .cartaBodyReazione {
        height: 200px;
        background-image: url("img/studi.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-color: #b173d7;
        margin-left: 10px;
        border-radius: 30px;
        color: #ffffff;
        font-weight: 700;
        /*transition-duration: 0.3s;*/

    }

    .cartaBodyLogOut {
        height: 200px;
        background-image: url("img/logout.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-color: #b173d7;
        margin-left: 10px;
        border-radius: 30px;
        color: #ffffff;
        font-weight: 700;
    }

    .cartaMateriali {
        height: 200px;
        background-image: url("img/denteMateriali.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-color: #b173d7;
        margin-left: 10px;
        border-radius: 30px;
        color: #ffffff;
        font-weight: 700;
    }



    .cartaBodyLavori {
        height: 200px;
        background-image: url("img/lavori.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-color: #b173d7;
        margin-left: 10px;
        border-radius: 30px;
        color: #ffffff;
        font-weight: 700;
    }

    .cartaBodyProg {
        height: 200px;
        background-image: url("img/nuovo.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-color: #b173d7;
        margin-left: 10px;
        border-radius: 30px;
        color: #ffffff;
        font-weight: 700;
    }

    .cartaBodyVeloce {
        height: 200px;
        background-image: url("img/logout.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-color: #b173d7;
        margin-left: 10px;
        border-radius: 30px;
        color: #ffffff;
        font-weight: 700;
    }

    .cartaBodyImpostazioni {
        height: 200px;
        background-image: url("img/impostazioni.png");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-color: #b173d7;
        margin-left: 10px;
        border-radius: 30px;
        color: #ffffff;
        font-weight: 700;
    }
</style>

</html>