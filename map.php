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
    <p id="objectvaluesId" style="display:block;"></p>
    <div id="map" style="position: absolute; left: 0; top: 4.9rem; bottom: 0; right: 0;"></div>
  </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

  <script>
    // Initialize the map
    var map = L.map('map').setView([44.244413, 20.986194], 7); // Coordinates for London, change to your desired location

    // Add OpenStreetMap tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Create a LayerGroup to store markers
    var markersLayer = L.layerGroup().addTo(map);

    $.post("Components/getmapobjects.php", function(data) {
         $("#objectvaluesId").val(data);
    });

    function createLocations(){
      var listOfObjects = document.getElementById('objectvaluesId').value;

      markersLayer.clearLayers();

      // Step 1: Parse the string into an array of coordinate pairs
      const coordinateString = listOfObjects
          .replace(/\[/g, '')
          .replace(/\]/g, '')
          .split(',')
          .map(String);

      // Step 2: Reformat the parsed data into an array of arrays (latitude, longitude)
      const coordinates = [];
      for (let i = 0; i < coordinateString.length; i += 7) {
         coordinates.push([coordinateString[i], coordinateString[i + 1], coordinateString[i + 2], coordinateString[i + 3], coordinateString[i + 4], coordinateString[i + 5], coordinateString[i + 6]]);
      }

      // Step 3: Use forEach to loop through the coordinates array
      coordinates.forEach((coordinate, index) => {
          const latitude = coordinate[0];
          const longitude = coordinate[1];
          const name = coordinate[2];
          const address = coordinate[3];
          const imagePath = coordinate[4];
          const orderNumber = coordinate[5];
          const moreDetails = coordinate[6];
          var showMoreDetails = 'block';

          if (moreDetails == '#'){
            showMoreDetails = 'none';
          }
  
          var marker = L.marker([latitude, longitude]).addTo(markersLayer);
          marker.bindPopup('<img src="'+ imagePath +'" alt="Image" style="width:300px;" /><h2>'+ name +'</h2>'+ 
                          '<h4>'+ address +'</h4><a href="' + moreDetails + '" style="display:' + showMoreDetails + '">Više detalja</a>');
      });
    }

    window.onload = function() { 
      createLocations();
    };

  </script>

  <script src="jquery/jquery.min.js"></script>
    
  </body>
</html>