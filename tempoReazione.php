<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulatore Semaforo F1</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .traffic-light { display: flex; justify-content: center; margin-top: 50px; }
        .light { width: 50px; height: 50px; margin: 5px; border-radius: 50%; background-color: #333; }
        .light.red { background-color: red; }
        .light.off { background-color: #333; }
        .center-text { text-align: center; margin-top: 20px; font-size: 1.5rem; }
    </style>
</head>
<body>

<div class="container">
    <div class="traffic-light">
        <div id="light1" class="light off"></div>
        <div id="light2" class="light off"></div>
        <div id="light3" class="light off"></div>
        <div id="light4" class="light off"></div>
        <div id="light5" class="light off"></div>
    </div>
    <div class="center-text" id="message">Premi SPAZIO quando le luci si spengono!</div>
    <div class="center-text" id="reaction-time"></div>
    <div class="center-text mt-4">
        <button class="btn btn-primary" onclick="resetSimulation()">Reset</button>
    </div>
</div>

<script>
    let lights = [];
    let startTime;
    let reactionTimeShown = false;

    function turnOnLights() {
        lights = [document.getElementById('light1'), document.getElementById('light2'), 
                  document.getElementById('light3'), document.getElementById('light4'), 
                  document.getElementById('light5')];

        let delay = 1000; // Ritardo iniziale per accendere ogni luce

        // Accende le luci una alla volta
        lights.forEach((light, index) => {
            setTimeout(() => {
                light.classList.remove('off');
                light.classList.add('red');
            }, delay * (index + 1));
        });

        // Spegne tutte le luci dopo un tempo casuale tra 4 e 7 secondi
        setTimeout(() => {
            lights.forEach(light => light.classList.remove('red'));
            startTime = new Date().getTime();
            document.getElementById("message").innerText = "Premi SPAZIO ora!";
        }, Math.floor(Math.random() * 3000) + 4000);
    }

    function stopTimer(event) {
        if (event.code === "Space" && startTime && !reactionTimeShown) {
            let reactionTime = (new Date().getTime() - startTime) / 1000;
            document.getElementById("reaction-time").innerText = "Tempo di reazione: " + reactionTime + " secondi";
            reactionTimeShown = true;
        }
    }

    function resetSimulation() {
        // Resetta le luci
        lights.forEach(light => {
            light.classList.add('off');
            light.classList.remove('red');
        });
        
        // Reimposta i messaggi
        document.getElementById("message").innerText = "Premi SPAZIO quando le luci si spengono!";
        document.getElementById("reaction-time").innerText = "";
        
        // Reset delle variabili
        reactionTimeShown = false;
        startTime = null;

        // Riavvia il semaforo
        turnOnLights();
    }

    document.addEventListener("keydown", stopTimer);
    window.onload = turnOnLights;
</script>

</body>
</html>
