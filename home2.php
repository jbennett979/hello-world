<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Display a map on a webpage</title>
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
    <link href="https://api.mapbox.com/mapbox-gl-js/v3.2.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v3.2.0/mapbox-gl.js"></script>
    <link rel="stylesheet" href="hack.css?version=<?php print time(); ?>" type="text/css">
</head>
<body>
<title>Bus Stop Finder</title>
<header>
    <h1>Find the Bus Stop Closest to You!</h1>
</header>

<div id="map"></div>
<div>
        <button onclick="geoLoc()">
            Click Here!
        </button>
        <p id="parag"></p>
    </div>
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
        // sources: {
        //     routes: {
        //         type: 'tiles',
        //         tiles: [`https://transit.land/api/v2/tiles/routes/tiles/{1}/{1}/{1}.pbf?apikey=${apikey}`],
        //         maxzoom: 14
        //     }
        // }
    });
    // UHeights stop
    const popu1p = new mapboxgl.Popup()
    .setLngLat([-73.196196, 44.475565])
    .setHTML("<h2>UHeights</h1>")
    .addTo(map);
    // Carrigan Drive stop
    const popup2 = new mapboxgl.Popup()
    .setLngLat([-73.192637, 44.475444])
    .setHTML("<h2>Carrigan</h1>")
    .addTo(map);
    // Med Center stop
    const popup3 = new mapboxgl.Popup()
    .setLngLat([-73.196171, 44.478638])
    .setHTML("<h2>Medical</h1>")
    .addTo(map);
    // Waterman stop
    const popup4 = new mapboxgl.Popup()
    .setLngLat([-73.200664, 44.478177])
    .setHTML("<h2>Waterman</h1>")
    .addTo(map);

    // SOURCED FROM https://www.geoapify.com/how-to-get-user-location-with-javascript
    if ("geolocation" in navigator) {
        let parag = document.getElementById("parag");
        let loc = navigator.geolocation;
        function geoLoc() {
            if (loc) {
                loc.getCurrentPosition(success);
            }
            else {
                "Your browser does not support geolocation";
            }
        }
        function success(data) {
            let lat = data.coords.latitude;
            let lng = data.coords.longitude;
            let tmps = data.timestamp;
            parag.innerHTML = "You Are Here: <br>Lat: " + lat + "<br>Long: " + lng;
        }
    }
</script>

<section class="stopsTable">
    <table>
        <caption><strong>Bus Stops</strong></caption>
        <tr>
            <th>Bus Route #</th>
            <th>Bus Stop Name</th>
            <th>Coordinates</th>
        </tr>
        <tr>
            <td>Route 1</td>
            <td>University Heights</td>
            <td>-73.196196, 44.475565</td>
        </tr>
        <tr>
            <td>Route 8</td>
            <td>Waterman</td>
            <td>-73.200664, 44.478177</td>
        </tr>
        <tr>
            <td>Route 2/11 (Eastbound)</td>
            <td>Medical Center</td>
            <td>-73.196171, 44.478638</td>
        </tr>
        <tr>
            <td>Route 11 (Westbound)</td>
            <td>Carrigan Drive</td>
            <td>-73.196196, 44.475565</td>
        </tr>
    </table>
</section>


    </table>
</section>

</body>
</html>