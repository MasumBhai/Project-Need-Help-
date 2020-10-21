<?php
require_once "Header.php";
?>
<?php
session_destroy();
?>
<a class="button" href="LogIn.php">Log In with another account
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</a>
<style>
    body{
        margin: 0;
        padding: 0;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        font-family: consolas;
        background: #031321;
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
    footer{
        background: aliceblue;
    }
</style>
<script type="text/javascript">
    swal({
  title: "Log Out!",
  text: "Try another account to link with me!",
  icon: "info",
  button: "COOL?",
});
</script>
<?php
require_once "Footer.php";
?>