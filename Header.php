<?php
session_start();
require_once "Configaration.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--Device size responsiveness-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <!--SEO stuff-->
    <meta name="description" content="Nearest Hospital can be found">
    <meta name="keywords"
          content="nearest,help line,nearest location,web design,medicine,help,need,ambulance,doctor,dactor,hospital,hospital database,website,send me ambulance,nearest,nearest hospitals">
    <meta name="author" content="Abdullah Al Masum">
    <!-- For bootstrap -->
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>
    <!-- Bootstrap Finished -->
    <!--api for jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--    for Google Recptcha-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!--    For Sweet Alert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--    for mapBox-->
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet'/>
<!--    for mapQuest-->
    <script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js"></script>
    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css"/>
    <script type="text/javascript">
        window.onload = function() {
            L.mapquest.key = 'lYrP4vF3Uk5zgTiGGuEzQGwGIVDGuy24';

            var map = L.mapquest.map('map', {
                center: [23.872007999999997, 90.4072688],
                layers: L.mapquest.tileLayer('map'),
                zoom: 17
            });

            map.addControl(L.mapquest.control());
        }
    </script>

    <!--Link to CSS for Styling-->
    <style type="text/css">
        body {
            font-family: 'Georgia', 'sans-serif';
            font-style: italic;
            /*src: local(font-face"Georgia");*/
            font-weight: 500;
            scroll-behavior: smooth;
        }
    </style>
<!--for manual css file-->
    <link rel="stylesheet" type = "text/css" href="comment_form.css" >
    <link rel="stylesheet" type="text/css" href="Stylee.css">
    <!--For Title-->
    <title>Project Need Help?</title>
</head>

<section id="mainContent">
    <header>
        <div class="mainHeader">
            <div class="logo">
                <img src="masum_production_logo.png">
            </div>
            <nav class="monospace">
                <ul>
                    <li><a href="Home.php">home</a></li>
                    <li><a href="LogIn.php">Log-in</a></li>
                    <li><a href="RegisTration.php">Register</a></li>
                    <li><a href="comment_front.php">Comment-Section</a></li>
                    <li><a href="LogOut.php">Log-Out</a></li>
                    <li><a href="AboutMe.php">About Me</a></li>

                </ul>
            </nav>
            <ul>
                <li>
                    <div class="menubtn">
                        <button style="background-color:#42cc8c;"><a href="Home.php">Guest Account</a></button>
                    </div>
                </li>
            </ul>
        </div>
    </header>
</section>

