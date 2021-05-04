<?php
include 'info.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Reader</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=poppins">
<link href="https://fonts.googleapis.com/css?family=Lacquer|Odibee+Sans|Trade+Winds&display=swap" rel="stylesheet">

<style>
body,h1 {font-family: "Poppins"}

body, html {height: 100%}
.bgimg {
  background-image: url('/cdn/imagenes/bfondo.png');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
</style>

</head>
<body>
    <div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div class="w3-display-topleft w3-padding-large w3-xlarge">
    <p style="text-align: center; font-size: 25px; color: white; font-family: 'Trade Winds';">Reader</p>
  </div>
    <div class="w3-display-middle">
    <p style="text-align: center; font-size: 50px; color: white; font-family: 'Trade Winds';"><? echo $kyoskomsg ?></p>
        <p style="text-align: center; font-size: 50px; color: white; font-family: 'Trade Winds';"><? echo $txts['InfoKnight'] ?></p>
            <p style="text-align: center; font-size: 40px; color: white; font-family: 'Trade Winds';"><? echo $txts['Publicaciones'] ?></p>
    </div>
</body>
</html>


<!--
<body class="bgimg">

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div class="w3-display-topleft w3-padding-large w3-xlarge">
    KNS
  </div>
  <div class="w3-display-middle">
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <p class="w3-large w3-center">Hecho por !Mr.AbrahaMatheus#4912</p>
  </div>
  <div class="w3-display-bottomleft w3-padding-large">
    KnightNoScanlation<a href="https://knightnofansub.site" target="_blank"> KNS</a>
  </div>
</div>

</body>
</html>
-->
