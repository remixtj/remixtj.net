<html>

<head>
    <title>Live MAP</title>
    <link href="pure-min.css" rel="stylesheet" />
    <link href="my.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="leaflet/leaflet.css" />
    <script type="text/javascript" src="leaflet/leaflet.js"></script>
    <script type="text/javascript" src="leaflet/leaflet-omnivore.min.js"></script> 
    <script src='leaflet/leaflet.markercluster.js'></script>
    <link href='leaflet/MarkerCluster.css' rel='stylesheet'>
    <link href='leaflet/MarkerCluster.Default.css' rel='stylesheet'>

    
    

    <script type="text/javascript">
var map;
var ajaxRequest;
var plotlist;
var plotlayers=[];

function initmap() {
	// set up the map
	map = new L.Map('map');

	// create the tile layer with correct attribution
	var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
	var osmAttrib='&copy; OpenCycleMap - Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';
	var osm = new L.TileLayer(osmUrl, {attribution: osmAttrib});		

	map.addLayer(osm);
        
	<?php
		if (isset($_GET['date'])) {
	?>        
	var gpxLayer = omnivore.geojson('http://www.remixtj.net/live/csv2json.php?date=<?= $_GET['date']?>').on('ready', function() {
	<?php
	} else {
	?>
	var gpxLayer = omnivore.geojson('http://www.remixtj.net/live/csv2json.php').on('ready', function() {
	<?php
	}
	?>
        map.fitBounds(gpxLayer.getBounds());
    }).addTo(map)
}
    </script> 
    <style>
 html, body {
            height: 100%;
    }

    #map {
        height: 100%;
        background: #000;
    }

    </style>


</head>

<body onload="initmap();">
    <div id="content">
        <div class="pure-g-r">
            <div class="pure-u-1">
                <div id="heading">
                    <img src="compass.png" />
                    <h1>LIVE MAP</h1> 
                </div>
            </div>
        </div>
        <div class="pure-g-r">
            <div class="pure-u-1">
                <h3>Mappa</h3>
                <div id="map"></div>
            </div>
        </div>
    </div>
</body>

</html>
