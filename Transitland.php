<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Display a map on a webpage</title>
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
    <link href="https://api.mapbox.com/mapbox-gl-js/v3.2.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v3.2.0/mapbox-gl.js"></script>
    <style>
        body { margin: 0; padding: 0; }
        #map { position: absolute; top: 0; bottom: 0; width: 100%; }
    </style>
</head>
<body>
<div id="map"></div>
<script>
    // TO MAKE THE MAP APPEAR YOU MUST
    // ADD YOUR ACCESS TOKEN FROM
    // https://account.mapbox.com
    mapboxgl.accessToken = 'pk.eyJ1IjoibGhvbG1lczciLCJhIjoiY2x1eTZleWxhMGIyMTJqcXF2bnFoc3RpMiJ9.CqlWwY6vLoK2ObCB5nR66g';
    const apikey = "AEUxBnDkItZMdx6zMs1LrdeGI0uumtGv";
    const map = new mapboxgl.Map({
        container: 'map', // container ID
        center: [-73.197576 ,44.478339], // starting position [lng, lat]
        zoom: 13 // starting zoom
        sources: {
            routes: {
                type: 'tiles',
                tiles: [`https://transit.land/api/v2/tiles/routes/tiles/{1}/{1}/{1}.pbf?apikey=${apikey}`],
                maxzoom: 14
            }
        }
    });
</script>

</body>
</html>