<?php
require_once "Header.php";
?>
<body>
<div class="about">
<p class="item-1">Me? Abdullah Al Masum</p>

<p class="item-2">I am An average Student with Low CG :')</p>

<p class="item-3">currently Studying in CSE,MIST</p>
</div>
</body>
<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:600);

    body{
        font-family: 'Open Sans', 'sans-serif';
        color: #cecece;
        background: #222;
        overflow: hidden;
    }

    .item-1,
    .item-2,
    .item-3 {
        position: absolute;
        display: block;
        top: 20%;

        width: 60%;

        font-size: 2em;

        animation-duration: 10s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
    }

    .item-1{
        animation-name: anim-1;
    }

    .item-2{
        animation-name: anim-2;
    }

    .item-3{
        animation-name: anim-3;
    }

    @keyframes anim-1 {
        0%, 8.3% { left: -100%; opacity: 0; }
        8.3%,25% { left: 25%; opacity: 1; }
        33.33%, 100% { left: 110%; opacity: 0; }
    }

    @keyframes anim-2 {
        0%, 33.33% { left: -100%; opacity: 0; }
        41.63%, 58.29% { left: 25%; opacity: 1; }
        66.66%, 100% { left: 110%; opacity: 0; }
    }

    @keyframes anim-3 {
        0%, 66.66% { left: -100%; opacity: 0; }
        74.96%, 91.62% { left: 25%; opacity: 1; }
        100% { left: 110%; opacity: 0; }
    }
    footer{
        margin-top: 32%;
    }
</style>
<?php
require_once "Footer.php";
?>
