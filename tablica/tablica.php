<?php


    include_once "header.php"
    

?>
<?php

include "logic.php";

?>
<style>
.wscroll::-webkit-scrollbar {
  width: 10px;
  height: 10px;
}

.wscroll::-webkit-scrollbar-button {
  width: 9px;
  height: 9px;
}

.wscroll::-webkit-scrollbar-thumb {
  background-color: hsl(36, 100%, 50%);
  border-radius: 9px;
  background-image: -webkit-linear-gradient(
    45deg,
    rgba(255, 255, 255, .2) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, .2) 50%,
    rgba(255, 255, 255, .2) 75%,
    transparent 75%,
    transparent
  );
}

.wscroll::-webkit-scrollbar-thumb:hover {
  background-color: hsl(36, 100%, 40%);
  background-image: -webkit-linear-gradient(
    45deg,
    rgba(255, 255, 255, .2) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, .2) 50%,
    rgba(255, 255, 255, .2) 75%,
    transparent 75%,
    transparent
  );
}

.wscroll::-webkit-scrollbar-thumb:active {
  background-color: hsl(36, 100%, 35%);
  background-image: -webkit-linear-gradient(
    45deg,
    rgba(255, 255, 255, .2) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, .2) 50%,
    rgba(255, 255, 255, .2) 75%,
    transparent 75%,
    transparent
  );
}

.wscroll::-webkit-scrollbar-track {
  background: #5a5a5a;
  border-radius: 50px;
}

.wscroll::-webkit-scrollbar-track:hover {
  background: #4a4a4a;
}

.wscroll::-webkit-scrollbar-track:active {
  background: #3f3f3f;
}

.wscroll::-webkit-scrollbar-corner {
  background: transparent;
}

body {
  margin: 20px;
  background-image: url("whitewall_jxi78g.png");
}

#board {
  border: 31px solid transparent;
  height: 93vh;
  width: 97vw;
  min-height: 381px;
  min-width: 572px;
  /*max-width: 1500px;*/
  background-image: url("http://res.cloudinary.com/cspaveljb/image/upload/v1499110969/cork_w2tt25.jpg");
  background-size: 1300px;
  border-image-source: url("http://res.cloudinary.com/cspaveljb/image/upload/v1499110958/corkborder_f8cm3g.png");
  border-image-slice: 31 29;
  border-image-width: 31px 29px;
  overflow: hidden;
  position: absolute;
}

#inner-board {
  /*border: 2px dotted red;*/
  /*min-height: 300px;*/
  height: 93%;
  overflow: auto;
  overflow-x: visible;
  /*position: relative;*/
}
</style>
<link href="css/tablica.css" rel="stylesheet">

<div id="board">
<div class="wscroll" id="inner-board">
<div class="container mt-5">

        


        <!-- Display posts from database -->
        <div class="row">
            <?php foreach($query as $q){ ?>
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <div class="sticky taped mt-4" style="width: 18rem;">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $q['title'];?></h3>
                            <p class="card-text"><?php echo substr($q['subtitle'], 0, 50);?></p>
                            <a href="view.php?id=<?php echo $q['id']?>" class="btn btn-link"> Oderwij  <span class="text-danger"></span></a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
       
    </div>

    </div

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>



</body>
</html>
