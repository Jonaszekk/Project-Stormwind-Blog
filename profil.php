<?php

include "include/dbh.inc.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
	<link rel="stylesheet" href="css/profsidebar.css">
    <link href="css/style.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>Menu</h2>
        <ul>
            <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="profil.php"><i class="fas fa-user"></i>Konto</a></li>
            <li><a href="info.php"><i class="fas fa-address-book"></i>Kontakt</a></li>           
            <li><a href="adminprofil.php"><i class="fas fa-project-diagram"></i>Administracja</a></li>
            <li><a href="include/logout.inc.php"><i class="fas fa-map-pin"></i>Wyloguj się</a></li>
        </ul> 
        
    </div>
    <div class="main_content">
        <div class="header">
        <?php
        if(isset($_SESSION['useruid'])) {
            echo "<h1>Witaj " .$_SESSION["useruid"] . ". Życzymy ci miłego spędzania czasu z nami!</h1>";
        }
        ?>

        <div class="info">
        <div class="film">
        <center> <iframe width="1024" height="768" src="https://www.youtube.com/embed/MW4fASDkQXA?start=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </center>
        
        </div>

        
      </div>
    </div>
</div>





</body>
</html>