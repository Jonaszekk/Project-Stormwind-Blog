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

<?php foreach($query as $q) {?>
<form method="GET">
<input type="text" hidden name="id" value="<?php echo $q["id"];?>">

<!-- Title -->      
<input type="text" name="title" placeholder="Tytuł" class="form-control my-3  text-black text-center" value="<?php echo $q['title'];?>">
<!-- Subtitle -->
<input type="text" name="subtitle" placeholder="Pod tytuł" class="form-control my-3 text-black text-center" value="<?php echo $q['subtitle'];?>">
<!-- Content -->
<textarea name="content" class="form-control my-3 bg-dark text-white"><?php echo $q['content'];?></textarea>
<!-- Zdjęcie -->
<input type="file" name="img" class="text-input">
<script>
 CKEDITOR.replace( 'content' );
</script>
             <button name="update" class="btn btn-dark" >Update</button>
             <button class="btn btn-danger" name="delete">Delete</button>
            <a href="../adminprofil.php" button name="back"  class="btn btn-dark"> Back </button></a> 
        </form>
<?php }?>






   </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Ckeditor -->

        
</body>
</html>