<?php


include_once "header.php"


?>
<?php

include "logic.php";

?>
<style>

</style>
<link href="css/tablica.css" rel="stylesheet">

<div id="board">
  <div class="wscroll" id="inner-board">
    <div class="container mt-5">




      <!-- Display posts from database -->
      <div class="row">
        <?php foreach ($query as $q) { ?>
          <div class="col-12 col-lg-4 d-flex justify-content-center">
            <div class="sticky taped mt-4" style="width: 18rem;">
              <div class="card-body">
                <h3 class="card-title"><?php echo $q['title']; ?></h3>
                <p class="card-text"><?php echo substr($q['subtitle'], 0, 50); ?></p>
                <a href="view.php?id=<?php echo $q['id'] ?>" class="btn btn-link"> Oderwij <span class="text-danger"></span></a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>

    </div>

  </div <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>



  </body>

  </html>
