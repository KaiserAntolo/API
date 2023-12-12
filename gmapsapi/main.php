    <!DOCTYPE html>
    <html>
    <head>
        <title>API Example</title>
        <link rel="stylesheet" href="api.css"> 
        <style>
            body {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            h1 {
                margin-bottom: 20px;
            }

            button {
                margin: 10px;
            }

            #map,
            #calculator,
            #spotifyPlaylist {
                margin-top: 20px;
                width: 100%;
            }
            </style>
</head>
<body>
    <h1>API Examples</h1>

    <button onclick="openInNewTab('gmaps.php')">Load Google Maps</button>
    <button onclick="openInNewTab('desmos.php')">Load Desmos Calculator</button>
    <button onclick="openInNewTab('spotify.php')">Load Spotify Playlist</button>

    <script>
        function openInNewTab(url) {
            var win = window.open(url, '_blank');
            win.focus();
        }
    </script>
</body>
</html>
