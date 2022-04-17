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
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <title>Blog using PHP & MySQL</title>
</head>
<body>
<div class="container mt-5">
<form method="GET">
<!-- Title --> 
<input type="text" name="title" placeholder="Tytul" class="form-control my-3 bg-white text-black text-center">
<!-- Subtitle --> 
<input type="text" name="subtitle" placeholder="Pod tytuł" class="form-control my-3 bg-white text-black text-center">
<!-- Content --> 
<textarea name="content" class="form-control my-3 bg-dark text-white"></textarea>
<!-- Zdjęcie -->
<input type="file" name="img" class="text-input"><img src= "upload/<?php echo $q['img'];?>">
<script>
 CKEDITOR.replace('content');
</script>


<!-- Dodaj Post --> 
<button name="new_post" class="btn btn-dark" >Add Post</button>
</form>
</div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Ckeditor -->
  <script src=".../ckeditor/ckeditor.js"></script>
</body>
</html>
