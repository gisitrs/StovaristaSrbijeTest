<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Stovarišta Srbije &mdash; Projekt Križan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    
  
    <link rel="stylesheet" href="css/aos.css">

    <!--<link rel="stylesheet" href="css/style.css">-->
    
  </head>
  <body>
  
  
  <div class="site-wrap">
    
    <div id="map" style="position: absolute; left: 0; top: 4.9rem; bottom: 0; right: 0;"></div>

  </div>

  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

  <script>
    // Initialize the map
    var map = L.map('map').setView([44.808567, 20.467469], 7); // Coordinates for London, change to your desired location

    // Add OpenStreetMap tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Add a marker at the given coordinates
    //var marker = L.marker([51.505, -0.09]).addTo(map); // Coordinates for London

    // Optional: Bind a popup to the marker
    //marker.bindPopup('<b>Hello world!</b><br>I am a popup.').openPopup();

    // Create a LayerGroup to store markers
    var markersLayer = L.layerGroup().addTo(map);

    // Event listener for map click to get Latitude and Longitude
    map.on('click', function(event) {
      var lat = event.latlng.lat;
      var lng = event.latlng.lng;
      // Display the coordinates
      document.getElementById('latId').value = lat.toFixed(6);
      document.getElementById('lonId').value = lng.toFixed(6);
      
      markersLayer.clearLayers();

      var marker = L.marker([lat, lng]).addTo(markersLayer);
    });
  </script>
    
  </body>
</html>