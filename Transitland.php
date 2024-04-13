<!DOCTYPE html>fix apis
<html>
    <script src="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet" />
<body>
<div id="map" style="height:600px"></div>

<script>

    const urlParams = new URLSearchParams(window.location.search);
    mapboxgl.accessToken = "sk.eyJ1IjoiY2llcnJhamVubiIsImEiOiJjbHV5NmIxMzIwMDBrMmpwMjd2ZXkydXdsIn0.XW2c_saKJO4sVD5OGCymeQ";
    const apikey = "AEUxBnDkItZMdx6zMs1LrdeGI0uumtGv";
    const map = new mapboxgl.Map({
        container: 'map',
        style: {
            version: 8,
            zoom: 12,
            center: [44.478339, -73.197576],
            sources: {
                routes: {
                    type: 'vector',
                    tiles: [`https://transit.land/api/v2/tiles/routes/tiles/{z}/{x}/{y}.pbf?apikey=${apikey}`],
                    maxzoom: 14
                }
            },
            layers: [{
                id: 'f-chittendoncounty~rt',
                type: 'line',
                source: 'https://api.goswift.ly/real-time/green-mountain/gtfs-rt-vehicle-positions',
                'source-layer': 'https://ridegmt.com/route-1-williston/',
                layout: {
                    'line-cap': 'round',
                    'line-join': 'round'
                },
                paint: {
                    'line-width': 3.0,
                    'line-color': '#ff0000'
                }
            }]
        }
    })
</script>
</body>

</html>

<div>
    <div id="map" ref="map" style="height:600px" />
</div>
