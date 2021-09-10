<?php

    include "logic.php";

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
	<link href="css/styleA.css" rel="stylesheet">
    <link href="css/view.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
    <title>Blog using PHP & MySQL</title>
</head>
<body>

<?php
include_once 'header.php';

?>


<div class="about-section">
<?php foreach($query as $q){?>
        <div class="inner-container">
            <h1><?php echo $q['title'];?></h1>
            <p class="text">
            <?php echo $q['content'];?>
         </p>
            <div class="skills">
                <span>Kontakt:</span>
                <span></span>
                <span></span>
				<span></span>
				<span><?php echo $q['kontakt'];?></span>
            </div>
        </div>
        
<?php } ?>  
</div>



    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    
    <?php

include_once 'footer.php';

?>

</body>
</html>