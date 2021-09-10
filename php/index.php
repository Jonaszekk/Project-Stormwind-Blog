<?php

    include "logic.php";
    include_once 'header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="../css/ok.css" rel="stylesheet">
    <link href="../css/styleA.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
    <title>Blog using PHP & MySQL</title>
</head>
<body>




    <div class="wrapper">
  <div class="blog">
  <?php foreach($query as $q) {?>
    <div class="single-blog">
      <div class="blog-img">
        <img src="css/img/zdjart1.png">
      </div>
      <div class="blog-info">
        <a href=""><i class="fas fa-calendar-alt"></i> 1.05.2021 21:33</a>
      </div>
      <div class="blog-content">
        <h4 class="card-tittle"><?php echo $q['title'];?></h4>
        <p class="card-tittle"><?php echo $q['subtitle'];?></p>
		<div class="cta">
        <a href="view.php?id=<?php echo $q['id'];?>">Przeczytaj więcej &rarr;</a>
		</div>
      </div>
    </div>
    
	<?php }?>
  </div>

</div>




 

      

      





    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    
    <hr class="my-4">
	
	<!-- Social Media-->
	<div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-12">
				<h2> Dołącz do nas </h2>
			</div>
			<div class="col-12 social padding">
				<a href="#"><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-google-plus-g"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-youtube"></i></a>
			</div>
		</div>
	</div>
	


	<!-- Fotter -->
	<footer>
		<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-md-4">
				<hr class="light">
				<h5> Kontakt </h5>
				<hr class="light">
				<p>111-222-333</p>
				<p>stormwindblog@gmail.com</p>
	
			</div>
			<div class="col-md-4">
				<hr class="light">
				<h5> Nowe Artykuły </h5>
				<hr class="light">
				<p>Środa 17:00</p>
				<p>Piątek 18:00</p>
				<p>Niedziela 12:00</p>
			</div>
			<div class="col-md-4">
				<hr class="light">
				<h5> Kontakt </h5>
				<hr class="light">
				<p>111-222-333</p>
				<p>stormwindblog@gmail.com</p>
			</div>
			<div class="col-12">
				<hr class="light">
				<h5>&copy; stormwind.com</h5>
			</div>
		</div>
		</div>
	</footer>
	</body> 
	
	</html>





 