<?php
require_once "Header.php";
?>
<body>
<div class="Doctores_animation">
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets2.lottiefiles.com/packages/lf20_wdXBRc.json" background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop autoplay></lottie-player>
</div>
    <a class="button" type="submit" id="locaTion" name="findMe" value="Locate me" onclick="getLocation()">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    Locate me
</a>
<style>
    .Doctores_animation{
        justify-content: center;
        align-items: center;
        align-content: center;
    }
    body{
        margin: 0;
        padding: 0;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        font-family: consolas;
        background: #D3D3D3;
    }
    .button{
        display: inline-block;
        position: relative;
        font-size: 24px;
        padding: 12px 20px;
        color:#2196f3;
        overflow: hidden;
        text-decoration: none;
        letter-spacing: 4px;
        text-transform: uppercase;
        transition: 0.5s;
    }
    .button:hover{
        color:#255784;
        background: #2196f3;
        box-shadow:0 0 10px #2196f3,0 0 40px #2196f3,0 0 80px #2196f3;
        transition-delay: 1s;
    }
    /*.button:visited:hover{
        color: #f00;
        background: #39ff14;
        box-shadow:0 0 10px #39ff14,0 0 40px #39ff14,0 0 80px #39ff14;
        transition-delay: 1s;

    }
    */
    a span{
        position: absolute;
        display: block;
    }
    a span:nth-child(1)
    {
        top: 0;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg,transparent,#2196f3);
    }
    a:hover span:nth-child(1)
    {
        left: 100%;
        transition: 1s;
    }
    a span:nth-child(3)
    {
        bottom: 0;
        right: -100%;
        width: 100%;
        height: 2.5px;
        background: linear-gradient(270deg,transparent,#2196f3);
    }
    a:hover span:nth-child(3)
    {
        right: 100%;
        transition: 1s;
        transition-delay: .5s;
    }
    a span:nth-child(2)
    {
        right: 0;
        top: -100%;
        width: 2px;
        height: 100%;
        background: linear-gradient(180deg,transparent,#2196f3);
    }
    a:hover span:nth-child(2)
    {
        top: 100%;
        transition: 1s;
        transition-delay: .25s;
    }
    a span:nth-child(4)
    {
        bottom: -100%;
        left: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(360deg,transparent,#2196f3);
    }
    a:hover span:nth-child(4)
    {
        bottom: 100%;
        transition: 1s;
        transition-delay: .75s;
    }
</style>
<!--<button id="locaTion" onclick="getLocation()">Locate me</button>-->
<p id="DEMO"></p>
<p id="MAPS"></p>
<!--for Table-->
<table class="table table-dark">
    <thead class="thead-light">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Hospital Name</th>
        <th scope="col">Hosptal Langtitute</th>
        <th scope="col">Hospital Longtitute</th>
        <th scope="col">Hospital's Ambulance</th>
        <th scope="col">Hospital's Review</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Meccaa Medina General Hospital</td>
        <td>23.8720167</td>
        <td>90.40726289999999</td>
        <td>01551805248</td>
        <td><a href="comment_front.php">click here</a></td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Uttarkhan General Hospital</td>
        <td>23.8720167</td>
        <td>90.40726289999999</td>
        <td>01551805248</td>
        <td><a href="comment_front.php">click here</a></td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Shaheed Monsur Ali Medical College and Hospital</td>
        <td>23.8720167</td>
        <td>90.40726289999999</td>
        <td>01551805248</td>
        <td><a href="comment_front.php">click here</a></td>
    </tr>
    <tr>
        <th scope="row">4</th>
        <td>Lubana General Hospital & Uttara Cardiac Center</td>
        <td>23.8720167</td>
        <td>90.40726289999999</td>
        <td>01551805248</td>
        <td><a href="comment_front.php">click here</a></td>
    </tr>
    <tr>
        <th scope="row">5</th>
        <td>Millennium Orthopaedic Hospital</td>
        <td>23.8720167</td>
        <td>90.40726289999999</td>
        <td>01551805248</td>
        <td><a href="comment_front.php">click here</a></td>
    </tr>
    <tr>
        <th scope="row">6</th>
        <td>Aichi Hospital Ltd</td>
        <td>23.8720167</td>
        <td>90.40726289999999</td>
        <td>01551805248</td>
        <td><a href="comment_front.php">click here</a></td>
    </tr>
    </tbody>
</table>

<!-- Autocomplete location search input -->
<div class="form-group">
    <label>Location:</label>
    <input type="text" class="form-control" id="search_input" placeholder="Type address..." />
    <input type="hidden" id="loc_lat" />
    <input type="hidden" id="loc_long" />
</div>

<!-- Display latitude and longitude -->
<div class="latlong-view">
    <p><b>Latitude:</b> <span id="latitude_view"></span></p>
    <p><b>Longitude:</b> <span id="longitude_view"></span></p>
</div>
<!--for mapBox-->
<div id='mapp' style='width: 400px; height: 300px;'></div>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoibWFzdW0wMzUiLCJhIjoiY2tnaTE2dm15MGNqMzJycGM5bTBpbDYybiJ9.b8iNUDAMN3qI9hgJwkwMwg';
    var map = new mapboxgl.Map({
        container: 'mapp',
        style: 'mapbox://styles/mapbox/streets-v11'
    });
</script>
<!--for mapquest-->
<div id="map" style="width: 100%; height: 530px;"></div>

<div id="mmap" style="width: 100%; height: 530px;"></div>
<!--for googleMap-->
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhKoXQph3JHf3LuIqapBMIQIKi0ZyhqLw&libraries=places&callback=initMap" async defer></script>-->
<!--<script type="text/javascript">-->
<!--var map;-->
<!---->
<!--function initMap() {-->
<!--// Create the map.-->
<!--var pyrmont = {-->
<!--lat: 23.872007999999997,-->
<!--lng: 90.4072688-->
<!--};-->
<!--if (navigator.geolocation) {-->
<!--try {-->
<!--navigator.geolocation.getCurrentPosition(function(position) {-->
<!--var pyrmont = {-->
<!--lat: position.coords.latitude,-->
<!--lng: position.coords.longitude-->
<!--};-->
<!--});-->
<!--} catch (err) {-->
<!---->
<!--}-->
<!--}-->
<!--map = new google.maps.Map(document.getElementById('mmap'), {-->
<!--center: pyrmont,-->
<!--zoom: 17-->
<!--});-->
<!---->
<!--// Create the places service.-->
<!--var service = new google.maps.places.PlacesService(map);-->
<!---->
<!--// Perform a nearby search.-->
<!--service.nearbySearch({-->
<!--location: pyrmont,-->
<!--radius: 4000,-->
<!--type: ['hospital']-->
<!--},-->
<!--function(results, status, pagination) {-->
<!--if (status !== 'OK') return;-->
<!---->
<!--createMarkers(results);-->
<!--getNextPage = pagination.hasNextPage && function() {-->
<!--pagination.nextPage();-->
<!--};-->
<!--});-->
<!--}-->
<!---->
<!--function createMarkers(places) {-->
<!--var bounds = new google.maps.LatLngBounds();-->
<!--for (var i = 0, place; place = places[i]; i++) {-->
<!--var image = {-->
<!--url: place.icon,-->
<!--size: new google.maps.Size(71, 71),-->
<!--origin: new google.maps.Point(0, 0),-->
<!--anchor: new google.maps.Point(17, 34),-->
<!--scaledSize: new google.maps.Size(25, 25)-->
<!--};-->
<!---->
<!--var marker = new google.maps.Marker({-->
<!--map: map,-->
<!--icon: image,-->
<!--title: place.name,-->
<!--position: place.geometry.location-->
<!--});-->
<!--bounds.extend(place.geometry.location);-->
<!--}-->
<!--map.fitBounds(bounds);-->
<!--}-->
<!--</script>-->
<!--new key = AIzaSyBBC_CY21Pk0fRyu7WafvtcyquGALPMoPI-->
<!--map_api_key = AIzaSyA9H4DyRG1FJpvbmpTfov0VqLYDnaxgVo8-->
<!--place_api_Key = AIzaSyAhKoXQph3JHf3LuIqapBMIQIKi0ZyhqLw-->
<!--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyA9H4DyRG1FJpvbmpTfov0VqLYDnaxgVo8"></script>-->
<!--<script src="https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=-33.8670522,151.1957362&radius=1000&types=hospital&keyword=hospital&name=hospital&key=AIzaSyAhKoXQph3JHf3LuIqapBMIQIKi0ZyhqLw"></script>-->
<!--</body>-->
<!--<script type="text/javascript">-->
<!--var searchInput = 'search_input';-->
<!---->
<!--$(document).ready(function () {-->
<!--var autocomplete;-->
<!--autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {-->
<!--types: ['geocode'],-->
<!--});-->
<!---->
<!--google.maps.event.addListener(autocomplete, 'place_changed', function () {-->
<!--var near_place = autocomplete.getPlace();-->
<!--document.getElementById('loc_lat').value = near_place.geometry.location.lat();-->
<!--document.getElementById('loc_long').value = near_place.geometry.location.lng();-->
<!---->
<!--document.getElementById('latitude_view').innerHTML = near_place.geometry.location.lat();-->
<!--document.getElementById('longitude_view').innerHTML = near_place.geometry.location.lng();-->
<!--});-->
<!--});-->
<!--$(document).on('change', '#'+searchInput, function () {-->
<!--document.getElementById('latitude_input').value = '';-->
<!--document.getElementById('longitude_input').value = '';-->
<!---->
<!--document.getElementById('latitude_view').innerHTML = '';-->
<!--document.getElementById('longitude_view').innerHTML = '';-->
<!--});-->
<!--</script>-->
<script type="text/javascript">
    var loc = document.getElementById("DEMO");
    var x;
    function getLocation()
    {
        if (navigator.geolocation)
        {
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        }
        else
        {
            loc.innerHTML = "Geolocation is not supported by this browser.";
        }
    }
    function showPosition(position) {
        loc.innerHTML = "Latitude: " + position.coords.latitude +
            "<br>Longitude: " + position.coords.longitude;
    }
    function showError(error)
    {
        switch(error.code)
        {
            case error.PERMISSION_DENIED:
                loc.innerHTML = "User denied the request for Geolocation."
                alert("We are Sorry.\nMasum Production House is unable to provide service to you.\nAs you denied the GeoLocation request\nPlease Allow Access To Continue");
                break;
            case error.POSITION_UNAVAILABLE:
                loc.innerHTML = "Location information is unavailable."
                break;
            case error.TIMEOUT:
                loc.innerHTML = "The request to get user location timed out."
                break;
            case error.UNKNOWN_ERROR:
                loc.innerHTML = "An unknown error occurred."
                break;
        }
    }
</script>

<?php
require_once "Footer.php";
?>

