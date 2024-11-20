<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simulatore Semaforo F1</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&family=Bebas+Neue&display=swap" rel="stylesheet">
</head>

<body>
  <?php
  $username = htmlspecialchars($_POST['username']);
  ?>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <center>
          <h1 class="titolo">F1 RIDER <?php echo $username ?></h1>
        </center>
      </div>
    </div>
    <div class="row">
      <div class="traffic-light">
        <div id="light1" class="light off"></div>
        <div id="light2" class="light off"></div>
        <div id="light3" class="light off"></div>
        <div id="light4" class="light off"></div>
        <div id="light5" class="light off"></div>
      </div>
    </div>
    <center>
      <div class="spazio" id="message">Premi SPAZIO quando le luci si spengono!</div>
    </center>
    <div class="row">
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <div class="jsText mt-4" id="ultimoTempo">Ultimo tempo: -</div>
            <div class="jsText mt-4" id="best-time">Miglior tempo: -</div>

          </div>
        </div>
      </div>


      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <div class="center-text mt-4" id="erroreSpazio">FALSA PARTENZA</div>
            <div class="center-text mt-4" id="attempts-left">Tentativi rimasti: 3</div>
          </div>
        </div>
      </div>
    </div>


    <div class="row">


      <form id="resultForm" action="php/addSemaforo.php" method="POST" >
        <input type="hidden" name="username" value="<?php echo $username; ?>">
        <input type="hidden" name="best_time" id="best_time_input">
        <input type="hidden" name="score" id="score_input">
        <br>

        <center>
          <div class="col-12">
            <button type="submit" class="btn btn-outline-light" id="buttonQuery" style= "visibility: hidden;">RISULTATI</button>
            <h6 class = "reindirizzamento" id="reind"></h6>
          
          </div>
        </center>
      </form>
    </div>
  </div>


  <style>
    body {
      font-family: 'Orbitron', sans-serif;
      background-color: #111;
      /* Sfondo scuro per contrastare il semaforo */
      color: #fff;
      /* Colore del testo leggibile su sfondo scuro */
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      min-height: 100vh;
    }

    .titolo {
      font-size: 40px;
      margin-top: 15px;
      color: #FF1801;
    }

    .spazio {
      font-size: 40px;
      margin-top: 15px;
    }

    .traffic-light {
      display: flex;
      justify-content: center;
      margin: 10px auto;
      /* Centra il semaforo orizzontalmente e aggiunge spazio sopra */
      background-color: #222;
      /* Sfondo del contenitore */
      padding: 20px;
      border-radius: 20px;
      /* Angoli arrotondati */
      box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.7);
      /* Effetto 3D */
    }

    .light {
      width: 80px;
      height: 80px;
      margin: 15px;
      border-radius: 50%;
      background: #444;
      /* Colore base (spento) */
      box-shadow: inset 0px 0px 20px rgba(0, 0, 0, 0.8),
        /* Effetto interno scuro */
        0px 0px 10px rgba(0, 0, 0, 0.5);
      /* Ombra esterna */
      transition: background-color 0.3s, box-shadow 0.3s;
      /* Animazioni fluide */
    }

    .light.red {
      background: radial-gradient(circle, #ff4d4d, #b30000);
      box-shadow: 0px 0px 30px rgba(255, 0, 0, 0.8),
        inset 0px 0px 20px rgba(255, 50, 50, 0.8);
    }

    .light.yellow {
      background: radial-gradient(circle, #ffeb3b, #b38f00);
      box-shadow: 0px 0px 30px rgba(255, 255, 0, 0.8),
        inset 0px 0px 20px rgba(255, 255, 100, 0.8);
    }

    .light.green {
      background: radial-gradient(circle, #4caf50, #1b5e20);
      box-shadow: 0px 0px 30px rgba(0, 255, 0, 0.8),
        inset 0px 0px 20px rgba(50, 255, 50, 0.8);
    }

    .light.off {
      background: radial-gradient(circle, #333, #111);
      box-shadow: inset 0px 0px 20px rgba(0, 0, 0, 0.8),
        0px 0px 5px rgba(0, 0, 0, 0.3);
    }

    .reindirizzamneto{
      font-color:#111111;
    }

    #reaction-time,
    #best-time,
    #attempts-left,
    #ultimoTempo {
      margin: 10px 0;
      font-size: 1.2rem;
      color: #fff;
      /* Colore leggibile */
    }

    .card {
      background-color: rgba(255, 255, 255, 0.1);
    }
  </style>

  <script>
    console.log("CONSOLE LOG");
    let lights = [];
    let startTime;
    let reactionTimeShown = false;
    let bestTime = null;
    let attemptsLeft = 3;
    let score = 0;
    let timers = []; // Array per memorizzare i timer attivi
    let waitingForStart = true; // Stato per indicare se siamo in attesa di iniziare un nuovo tentativo

    function turnOnLights() {
      lights = [
        document.getElementById('light1'),
        document.getElementById('light2'),
        document.getElementById('light3'),
        document.getElementById('light4'),
        document.getElementById('light5')
      ];

      let delay = 1000;

      lights.forEach((light, index) => {
        const timer = setTimeout(() => {
          light.classList.remove('off');
          light.classList.add('red');
        }, delay * (index + 1));
        timers.push(timer); // Aggiungiamo il timer all'array
      });

      const finalTimer = setTimeout(() => {
        lights.forEach(light => light.classList.remove('red'));
        startTime = new Date().getTime();
        document.getElementById("message").innerText = "Premi SPAZIO ora!";
      }, Math.floor(Math.random() * 7000) + 5000);

      timers.push(finalTimer); // Aggiungiamo anche questo timer
    }

    function stopTimer(event) {
      if (event.code === "Space" && attemptsLeft > 0) {
        if (waitingForStart) {
          // Inizia un nuovo tentativo
          waitingForStart = false;
          document.getElementById("message").innerText = "Pronti per la partenza!";
          document.getElementById("erroreSpazio").style.color = "#505050";
          turnOnLights();
        } else if (reactionTimeShown) {
          // Se il tentativo è stato completato, resettiamo e aspettiamo di iniziare
          prepareForNextAttempt();
        } else if (!startTime) {
          // Premuto SPAZIO troppo presto


          document.getElementById("erroreSpazio").innerText = "FALSA PARTENZA";
          document.getElementById("erroreSpazio").style.color = "red";
          console.log("dentro");

          // Interrompiamo tutti i timer attivi
          clearAllTimers();

          // Resettiamo le luci
          lights.forEach(light => {
            light.classList.add('off');
            light.classList.remove('red');
          });


          // Impostare il tempo a 10 secondi
          let reactionTime = 10.0;
          if (bestTime === null || reactionTime < bestTime) {
            bestTime = reactionTime;
            document.getElementById("best-time").innerText = "Miglior tempo: " + bestTime + " secondi";
          }
          // Aggiorna tentativi e prepara il prossimo
          attemptsLeft--;
          document.getElementById("attempts-left").innerText = "Tentativi rimasti: " + attemptsLeft;
          document.getElementById("ultimoTempo").innerText = "Ultimo tempo: " + reactionTime + " secondi";

          reactionTimeShown = true;



          if (attemptsLeft > 0) {
            prepareForNextAttempt();
          } else {
            endSimulation();
          }
        } else {
          // Calcolo del tempo di reazione
          let reactionTime = (new Date().getTime() - startTime) / 1000;
          document.getElementById("ultimoTempo").innerText = "Ultimo tempo: " + reactionTime + " secondi";
          console.log("Reaction finale-->" + reactionTime);

          if (bestTime === null || reactionTime < bestTime) {
            bestTime = reactionTime;
            document.getElementById("best-time").innerText = "Miglior tempo: " + bestTime + " secondi";
          }

          score = calculateScore(reactionTime);
          reactionTimeShown = true;
          attemptsLeft--;

          document.getElementById("attempts-left").innerText = "Tentativi rimasti: " + attemptsLeft;

          if (attemptsLeft === 0) {
            endSimulation();
          } else {
            prepareForNextAttempt();
          }
        }
      }
    }

    function prepareForNextAttempt() {
      // Mostra il messaggio per iniziare il prossimo tentativo
      document.getElementById("message").innerText = "Premi SPAZIO per iniziare il prossimo tentativo!";

      reactionTimeShown = false;
      startTime = null;
      waitingForStart = true;
    }

    function clearAllTimers() {
      // Cancella tutti i timer attivi
      timers.forEach(timer => clearTimeout(timer));
      timers = []; // Svuota l'array
    }

    function calculateScore(reactionTime) {
      return Math.max(0, Math.floor(1000 - reactionTime * 100));
    }

    function resetSimulation() {
      lights.forEach(light => {
        light.classList.add('off');
        light.classList.remove('red');
      });

      document.getElementById("message").innerText = "Premi SPAZIO quando le luci si spengono!";

      reactionTimeShown = false;
      startTime = null;

      turnOnLights();
    }

    function endSimulation() {
      document.getElementById("best_time_input").value = bestTime;
      document.getElementById("score_input").value = score;
      document.getElementById("resultForm").style.display = "block";
      redirectWithCountdown();

    }

    document.addEventListener("keydown", stopTimer);
    window.onload = () => {
      document.getElementById("message").innerText = "Premi SPAZIO per iniziare!";
    };

    function redirectWithCountdown() {
  console.log("Dentro redirectWithCountdown");
  let timeLeft = 3;

  let interval = setInterval(() => {
    console.log(`Sarai reindirizzato in ${timeLeft} secondi...`);
    document.getElementById("reind").innerText = "Restart in " + timeLeft + " secondi...";

    timeLeft--;

    if (timeLeft < 0) {
      clearInterval(interval); // Ferma il timer
      document.getElementById("buttonQuery").click(); // Premere il bottone
    }
  }, 1000);
}
    console.log(document.getElementById(buttonQuery));
    // Esegui la funzione: redirect dopo 3 secondi a "https://esempio.com"

  </script>

</body>

</html>