<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programmazione Web</title>
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Courier Prime', monospace;
            margin: 0;
            display: flex;
            height: 100vh;
            background: #1e1e1e;
            color: #f0f0f0;
            overflow: hidden;
        }

        .editor-container {
            display: flex;
            flex: 1;
        }

        #code-container {
            width: 50%;
            padding: 20px;
            background: #2e3b4e;
            border-right: 1px solid #555;
            overflow-y: auto;
            color: #c5c6c7;
        }

        #code-input {
            width: 100%;
            height: calc(100% - 40px);
            background: #3b4c61;
            color: #f8f8f2;
            border: none;
            resize: none;
            padding: 10px;
            font-size: 16px;
            line-height: 1.5;
            border-radius: 10px;
            font-family: 'Courier Prime', monospace;
        }

        #code-input:focus {
            outline: none;
        }

        #preview-container {
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #121212;
            overflow: hidden;
            transition: background-color 0.3s ease;
        }

        .shape {
            display: inline-block;
            transition: all 0.3s ease-in-out;
            animation-duration: 1s;
        }

        @keyframes zoom {
            0% {
                transform: scale(0.5);
            }

            100% {
                transform: scale(1);
            }
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes fade {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
    <div class="editor-container">
        <div id="code-container">
            <textarea id="code-input" spellcheck="false">
programma() {
  shape() {
    forma: quadrato; // opzioni: quadrato, cerchio, rettangolo
    dimensione: 150px; // grandezza della forma
    tipoLinea: continua; // continua, tratteggiata, punto
    dimBordo: 7px; // spessore del bordo
    ombra: 10px 10px 5px rgba(0, 0, 0, 0.5); // ombra: x, y, definizione (r,g,b,opacità)
    opacità: 0.9; // trasparenza della forma
  }
  color() {
    colore: #ff4500; // colore di riempimento
    coloreBordo: #4682b4; // colore del bordo
    sfondo: #f0f0f0; // colore dello sfondo
  }
  animazione() {
    velocità: 3s; // durata animazione
    tipo: bounce; // opzioni: zoom, rotate, bounce, fade
  }
}
            </textarea>
        </div>
        <div id="preview-container">
            <div class="shape" id="shape-preview"></div>
        </div>
    </div>

    <script>
        const codeInput = document.getElementById("code-input");
        const previewContainer = document.getElementById("preview-container");
        const shapePreview = document.getElementById("shape-preview");

        const updateShape = () => {
            const code = codeInput.value;

            const shapeMatch = code.match(/forma:\s*(\w+);/);
            const sizeMatch = code.match(/dimensione:\s*(\d+px);/);
            const lineTypeMatch = code.match(/tipoLinea:\s*(\w+);/);
            const borderSizeMatch = code.match(/dimBordo:\s*(\d+px);/);
            const fillColorMatch = code.match(/colore:\s*#([0-9a-fA-F]{6});/);
            const borderColorMatch = code.match(/coloreBordo:\s*#([0-9a-fA-F]{6});/);
            const bgColorMatch = code.match(/sfondo:\s*#([0-9a-fA-F]{6});/);
            const animationSpeedMatch = code.match(/velocità:\s*(\d+(s|ms));/);
            const animationTypeMatch = code.match(/tipo:\s*(\w+);/);
            const shadowMatch = code.match(/ombra:\s*([^;]+);/);
            const opacityMatch = code.match(/opacità:\s*(\d+(\.\d+)?);/);
            const scaleMatch = code.match(/scala:\s*(\d+(\.\d+)?);/);

            const shapeType = shapeMatch ? shapeMatch[1] : "quadrato";
            const size = sizeMatch ? sizeMatch[1] : "100px";
            const lineType = lineTypeMatch ? lineTypeMatch[1] : "continua";
            const borderSize = borderSizeMatch ? borderSizeMatch[1] : "10px";
            const fillColor = fillColorMatch ? `#${fillColorMatch[1]}` : "#ff0000";
            const borderColor = borderColorMatch ? `#${borderColorMatch[1]}` : "#00ff00";
            const bgColor = bgColorMatch ? `#${bgColorMatch[1]}` : "#121212";
            const animationSpeed = animationSpeedMatch ? animationSpeedMatch[1] : "1s";
            const animationType = animationTypeMatch ? animationTypeMatch[1] : "none";
            const shadow = shadowMatch ? shadowMatch[1] : "none";
            const opacity = opacityMatch ? opacityMatch[1] : "1";
            const scale = scaleMatch ? scaleMatch[1] : "1";

            previewContainer.style.backgroundColor = bgColor;
            shapePreview.style.width = size;
            shapePreview.style.height = size;
            shapePreview.style.backgroundColor = shapeType === "triangolo" ? "transparent" : fillColor;
            shapePreview.style.border = `${borderSize} ${
                lineType === "continua" ? "solid" : lineType === "tratteggiata" ? "dashed" : "dotted"
            } ${borderColor}`;
            shapePreview.style.animation = `${animationType} ${animationSpeed} infinite`;
            shapePreview.style.boxShadow = shadow;
            shapePreview.style.opacity = opacity;
            shapePreview.style.transform = `scale(${scale})`;

            switch (shapeType) {
                case "cerchio":
                    shapePreview.style.borderRadius = "50%";
                    break;
                case "rettangolo":
                    shapePreview.style.width = size; // Larghezza del rettangolo
                    shapePreview.style.height = `${parseInt(size) / 2}px`; // Altezza (metà della larghezza)
                    shapePreview.style.borderRadius = "0"; // Nessun bordo arrotondato
                    shapePreview.style.backgroundColor = fillColor; // Colore di riempimento
                    shapePreview.style.border = `${borderSize} ${
        lineType === "continua" ? "solid" : lineType === "tratteggiata" ? "dashed" : "dotted"
    } ${borderColor}`; // Configurazione del bordo
                    shapePreview.style.boxShadow = shadow; // Aggiunta ombra
                    break;
                default:
                    shapePreview.style.clipPath = "none";
                    shapePreview.style.borderRadius = "0";
            }
        };

        codeInput.addEventListener("input", updateShape);
        updateShape();
    </script>
</body>

</html>