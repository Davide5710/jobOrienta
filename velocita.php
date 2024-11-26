<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gioco di Reazione</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #1a1a1a;
        color: #f5f5f5;
        font-family: 'Arial', sans-serif;
    }

    h2 {
        font-size: 2rem;
        font-weight: bold;
        color: #ffd700;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
    }

    p {
        font-size: 1.2rem;
        color: #c9c9c9;
    }

    .container {
        max-width: 600px;
        margin: auto;
    }

    .circle {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        background-color: #444;
        display: inline-block;
        margin: 20px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .circle:hover {
        box-shadow: 0 0 25px rgba(255, 255, 255, 0.4);
    }

    .active {
        background-color: #28a745;
        box-shadow: 0 0 40px rgba(40, 167, 69, 0.8), 0 0 10px rgba(40, 167, 69, 0.5);
    }

    #timer,
    #average-reaction-time {
        font-size: 1.5rem;
        font-weight: bold;
        color: #00ffff;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
    }

    #game-over-message {
        font-size: 1.4rem;
        font-weight: bold;
        text-shadow: 1px 1px 5px rgba(255, 0, 0, 0.8);
    }

    .d-flex {
        justify-content: center;
        align-items: center;
    }

    #restart-button {
        padding: 10px 20px;
        font-size: 1.2rem;
        font-weight: bold;
        background-color: #ffcc00;
        border: none;
        border-radius: 5px;
        color: #333;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    #restart-button:hover {
        background-color: #ff9900;
    }

    #restart-button:active {
        background-color: #cc7a00;
    }
</style>

</head>
<body class="text-center">
    <div class="container mt-5">
        <h2>Tempo di gioco: <span id="timer">0</span> secondi</h2>
        <div class="d-flex justify-content-center mt-4">
            <div id="left-circle" class="circle"></div>
            <div id="center-circle" class="circle"></div>
            <div id="right-circle" class="circle"></div>
        </div>
        <p class="mt-4">Premi <strong>A</strong> per sinistra, <strong>S</strong> per centro, <strong>D</strong> per destra</p>
        <p>Tempo di reazione medio: <span id="average-reaction-time">-</span> ms</p>
        <p id="game-over-message" class="text-danger mt-3"></p>
        <center>
        <button id="restart-button" class="btn btn-warning mt-4" style="display: none;">Ricomincia</button>
        </center>
    </div>



    <script>
    let timer = 0;
    let interval;
    let reactionTimes = [];
    let startTime = 0;
    let activeCircle = null;
    let attempts = 0;
    const maxAttempts = 10;

    function startTimer() {
        interval = setInterval(() => {
            timer++;
            document.getElementById("timer").innerText = timer;
        }, 1000);
    }

    function randomCircle() {
        const circles = ["left-circle", "center-circle", "right-circle"];
        const randomIndex = Math.floor(Math.random() * circles.length);
        activeCircle = circles[randomIndex];
        document.getElementById(activeCircle).classList.add("active");
        startTime = Date.now();
    }

    function resetCircles() {
        document.getElementById("left-circle").classList.remove("active");
        document.getElementById("center-circle").classList.remove("active");
        document.getElementById("right-circle").classList.remove("active");
    }

    function calculateAverageReactionTime() {
        const sum = reactionTimes.reduce((a, b) => a + b, 0);
        return reactionTimes.length ? (sum / reactionTimes.length).toFixed(2) : 0;
    }

    function endGame() {
        clearInterval(interval);
        document.getElementById("game-over-message").innerText = `Gioco terminato! Tempo di reazione medio: ${calculateAverageReactionTime()} ms`;
        document.getElementById("restart-button").style.display = "block"; // Mostra il pulsante di restart
    }

    function restartGame() {
        timer = 0;
        attempts = 0;
        reactionTimes = [];
        document.getElementById("game-over-message").innerText = '';
        document.getElementById("average-reaction-time").innerText = '0';
        document.getElementById("timer").innerText = '0';
        document.getElementById("restart-button").style.display = "none"; // Nascondi il pulsante di restart
        resetCircles();
        startTimer();
        setTimeout(randomCircle, 1000);
    }

    document.addEventListener("keydown", (event) => {
        if (attempts >= maxAttempts) return;

        const key = event.key.toUpperCase();
        const timeTaken = Date.now() - startTime;

        if (
            (key === "A" && activeCircle === "left-circle") ||
            (key === "S" && activeCircle === "center-circle") ||
            (key === "D" && activeCircle === "right-circle")
        ) {
            reactionTimes.push(timeTaken);
            attempts++;
            document.getElementById("average-reaction-time").innerText = calculateAverageReactionTime();

            resetCircles();

            if (attempts < maxAttempts) {
                setTimeout(randomCircle, 1000); // Pausa prima del prossimo cerchio
            } else {
                endGame(); // Termina il gioco al decimo tentativo
            }
        }
    });

    window.onload = function () {
        startTimer();
        setTimeout(randomCircle, 1000);
    };

    // Gestione del pulsante di restart
    document.getElementById("restart-button").addEventListener("click", restartGame);
</script>

</body>
</html>
