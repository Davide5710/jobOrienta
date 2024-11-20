<?php
ob_start();
session_start();
require_once('php/database.php');
$queryClassifica = "SELECT *
FROM semaforo
ORDER BY tempo ASC
LIMIT 3;";

// Esecuzione della query
$result = $conn->query($queryClassifica);

// Controllo se ci sono risultati
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&family=Bebas+Neue&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container">
        <br>
        <center>
            <h1>F1 STARTER</h1>
        </center>
        <br><br><br>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <center>
                            <h2>INSERISCI IL TUO NOME</h2>
                        </center>
                        <center>
                            <p>Inserisci il tuo nome per inziare a giocare!!!</p>
                        </center>
                        <br><br>
                        <form action="semaforo.php" method="POST">
                            <center>
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text" id="inputGroup-sizing-lg">Username</span>
                                    <input type="text" name="username" placeholder="Username" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                </div>
                            </center>

                            <br>
                            <center>
                                <button type="submit" class="btn btn-primary btn-lg">Large button</button>
                            </center>

                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <center>
                            <h2>Classifica Piloti</h2>
                        </center>
                        <hr>
                        </hr>
                        <?php
                            if ($result->num_rows > 0) { ?>
                            <table class="table colorT">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Pilota</th>
                                    <th scope="col">Tempo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                // Output dei dati
                                while ($row = $result->fetch_assoc()) {
                                    //echo "idGiocatore: " . $row["idG"] . " // Username: " . $row["username"] .  " // Tempo - " . $row["tempo"] . "<br>";
                                    $i = $i + 1;
                                    ?>
                                <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td><?php echo $row["username"]; ?></td>
                                    <td><?php echo $row["tempo"]; ?></td>
                                </tr>
                        <?php
                                }?>
                                                            </tbody>
                                                            </table>
                                                            <?php
                            }
                        else {
                    echo "Nessun risultato trovato.";
                }
                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>

<style>
    body {
        font-family: 'Orbitron', sans-serif;
        background-image: url('img/f1bg5.jpg');
        /* Inserisci qui il percorso dell'immagine */
        background-size: cover;
        /* L'immagine copre tutta la pagina */
        background-repeat: no-repeat;
        /* Evita la ripetizione dell'immagine */
        background-position: center;
        /* Centra l'immagine */
        background-attachment: fixed;
    }

    h1 {
        font-weight: 800;
        font-size: 50px;
        color: #FF1801;
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

    .card {
        background-color: rgba(255, 255, 255, 0.8);
    }

    .colorT{
        background-color: "#000000";
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