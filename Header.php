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
    <!--    For Sweet Alert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
    <link rel="stylesheet" type="text/css" href="Stylee.css">
    <!--For Title-->
    <title>Project Need Help?</title>
</head>

<body>
<section id="mainContent">
    <header>
        <div class="mainHeader">
            <div class="logo">
                <img src="masum_production_logo.png">
            </div>
            <nav class="monospace">
                <ul>
                    <li><a href="">home</a></li>
                    <li><a href="">Log-in</a></li>
                    <li><a href="">Register</a></li>
                    <li><a href="">Log-Out</a></li>

                </ul>
            </nav>
            <ul>
                <li>
                    <div class="menubtn">
                        <button style="background-color:#42cc8c;">Help</button>
                    </div>
                </li>
            </ul>
        </div>
    </header>

