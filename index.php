<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Titlegggg</title>
    <style>
      html, body {
        height: 500px;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
</head>
<body>
  <div id="map"></div>
  
  <div id="controls">
    <button onclick="startListening()">Начать прослушивание</button>
    <button onclick="stopListening()">Остановить прослушивание</button>
  </div>

  <script src="main.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmUfjIiWuupGEbqKfPdh3qQRAXSXlU0Dg&callback=initMap" async defer></script>
</body>
</html>