<?php
session_start();

?>

<!doctype html>
<html>
<head> 

<meta charset="utf-8"> 
<meta name="description" content=""> 
<meta name="viewport" content="width=device-width, initial-scale=1">
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="css/style.css" rel="stylesheet">

    
	

<title>Stormwind</title> 
<style>
html {
  scroll-behavior: smooth;
}

</style>

</head> 

<body>  

		<!-- Navigatrion -->
		
        <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
            <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/Silverlion.png" width="85" height="85"></a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarResponsive">
             <ul class="navbar-nav ml-auto">
             <li class="nav-item">
                 <a class="nav-link" href="index.php">Strona głowna</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="info.php">Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tablica/tablica.php">Tablica</a>  
            </li>
            <li class="nav-item">
                <a class="nav-link" href="artykuly.php">Artykuły</a>
            </li>
            <?php
            if (isset($_SESSION["useruid"])) {
echo "<li class='nav-item'> <a class='nav-link' href='profil.php'>Profil</a></li>";
echo "<li class='nav-item'> <a class='nav-link' href='include/logout.inc.php'>Wyloguj</a></li>";
} 
else {
    echo "<li class='nav-item'> <a class='nav-link' href='login.php'>Logowanie</a></li>";
    echo "<li class='nav-item'> <a class='nav-link' href='signup.php'>Rejestracja</a></li>";
}
?>

            
            </ul>
            </div>
            </div>
            </nav>


