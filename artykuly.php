<?php

include "php/logic.php";
include_once "header.php"


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
  <link href="css/art1.css" rel="stylesheet">
  <link href="css/styleA.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
  <style>
    @media screen and (max-width) {
      .blog {
        max-width: 80rem;
        padding-left: 5rem;
      }

      .blog-img {
        max-width: 30rem;
        min-width: 30rem;
      }
    }
  </style>


  <title>Blog using PHP & MySQL</title>
</head>

<body>
  <div class="background">
    <div class="blog">
      <?php foreach ($query as $q) { ?>
        <div class="single-blog mt-5">
          <div class="blog-img">
            <img src="upload/<?php echo $q['img']; ?>">
          </div>
          <div class="blog-info">
            <a href=""><i class="fas fa-calendar-alt"></i> <?php echo $q['time']; ?> </a>
          </div>
          <div class="blog-content">
            <h4 class="card-tittle"><?php echo $q['title']; ?></h4>
            <p class="card-tittle"><?php echo $q['subtitle']; ?></p>
            <div class="cta">
              <a href="php/view.php?id=<?php echo $q['id']; ?>">Przeczytaj więcej &rarr;</a>
            </div>
          </div>
        </div>


      <?php } ?>
    </div>

  </div>

  </div>







  </div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




  <?php

  include_once 'footer.php'

  ?>
