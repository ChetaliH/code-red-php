<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hacked</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #000;
            color: #FF0000;
            font-family: 'Courier New', Courier, monospace;
            overflow: hidden;
        }

        h1 {
            font-size: 10rem;
            text-transform: uppercase;
            letter-spacing: 1rem;
            text-shadow: 
                0 0 5px #FF0000, 
                0 0 10px #FF0000, 
                0 0 20px #FF0000, 
                0 0 40px #FF0000, 
                0 0 80px #FF0000;
            animation: flicker 2s infinite alternate;
        }

        @keyframes flicker {
            0% {
                opacity: 1;
                text-shadow: 
                    0 0 5px #FF0000, 
                    0 0 10px #FF0000, 
                    0 0 20px #FF0000, 
                    0 0 40px #FF0000, 
                    0 0 80px #FF0000;
            }
            50% {
                opacity: 0.8;
                text-shadow: 
                    0 0 10px #FF0000, 
                    0 0 20px #FF0000, 
                    0 0 40px #FF0000, 
                    0 0 80px #FF0000;
            }
            100% {
                opacity: 0.5;
                text-shadow: 
                    0 0 20px #FF0000, 
                    0 0 40px #FF0000, 
                    0 0 80px #FF0000;
            }
        }
    </style>
</head>
<body>
    <h1>Hacked</h1>
</body>
</html>
