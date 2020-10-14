<?php
require_once "Header.php";
?>
<body>
<input class="btn btn-primary" type="submit" id="locaTion" name="findMe" value="Locate me" onclick="getLocation()">
<!--<button id="locaTion" onclick="getLocation()">Locate me</button>-->
<p id="DEMO"></p>
<p id="MAPS"></p>
</body>


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

