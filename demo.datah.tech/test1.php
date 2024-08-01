<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Power BI en iframe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        #buttons {
            margin: 20px 0;
        }
        iframe {
            border: none;
        }
    </style>
</head>
<body>
    <div id="buttons">
        <button onclick="goBack()">Atrás</button>
        <button onclick="goForward()">Adelante</button>
    </div>
    <iframe id="powerbi-frame" 
            src="https://app.powerbi.com/reportEmbed?reportId=786d75da-7fea-4d85-b740-eadac442c3c6&autoAuth=true&ctid=89c4c84d-eebb-419c-9a49-afac68cebb7e" 
            width="1600" 
            height="900" 
            frameborder="0" 
            allow="fullscreen; geolocation">
    </iframe>

    <script>
        function goBack() {
            window.location.href = "https://alvarium.mx/powerbi/balanced-scorecard.php";
            // var iframe = document.getElementById('powerbi-frame');
            // iframe.contentWindow.history.back();
        }

        function goForward() {
            var iframe = document.getElementById('powerbi-frame');
            iframe.contentWindow.history.forward();
        }
    </script>
</body>
</html>
