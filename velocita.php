<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gioco di Reazione</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .circle {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: grey;
            display: inline-block;
            margin: 20px;
        }
        .active {
            background-color: green;
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
        <p class="mt-4">Premi <strong>A</strong> per sinistra, <strong>G</strong> per centro, <strong>L</strong> per destra</p>
        <p>Tempo di reazione medio: <span id="average-reaction-time">0</span> ms</p>
        <p id="game-over-message" class="text-danger mt-3"></p>
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
        }

        document.addEventListener("keydown", (event) => {
            if (attempts >= maxAttempts) return;

            const key = event.key.toUpperCase();
            const timeTaken = Date.now() - startTime;

            if (
                (key === "A" && activeCircle === "left-circle") ||
                (key === "G" && activeCircle === "center-circle") ||
                (key === "L" && activeCircle === "right-circle")
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
    </script>
</body>
</html>
