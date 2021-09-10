<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<title>PANEL UŻYTKOWNIKÓW</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<link href="css/profsidebar.css" rel="stylesheet">

<style>

.wrapper1{

width: 600px;

margin: 0 auto;

}

table tr td:last-child{

width: 120px;

}

</style>



<script>

$(document).ready(function(){

$('[data-toggle="tooltip"]').tooltip();

});

</script>

</head>


<body>
<?php if(isset($_REQUEST['info'])){?>

<?php if($_REQUEST['info'] == "added"){?>
    <div class="alert alert-success" role="alert">
    Post has been added lol
    </div>
    <?php }else if($_REQUEST['info'] == "updated"){ ?>
        <div class="alert alert-success" role="alert">
    Post has been updated lol
    </div>
    <?php }else if($_REQUEST['info'] == "deleted"){ ?>
        <div class="alert alert-danger" role="alert">
    Post has been deleted lol
    </div>
    <?php }?>

<?php }?>

<div class="wrapper">
    <div class="sidebar">
        <h2>Menu</h2>
        <ul>
            <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="profil.php"><i class="fas fa-user"></i>Konto</a></li>
            <li><a href="info.php"><i class="fas fa-address-book"></i>Informacje</a></li>           
            <li><a href="adminprofil.php"><i class="fas fa-project-diagram"></i>Administracja</a></li>
            <li><a href="include/logout.inc.php"><i class="fas fa-map-pin"></i>Wyloguj się</a></li>
        </ul> 
        
    </div>

        



<div class="wrapper1">

<div class="container-fluid">

<div class="row">

<div class="col-md-12">

<div class="mt-5 mb-3 clearfix">

<h2 class="pull-left">Lista Artykułów</h2>

<div class="text-center">
            <a href="php/create.php" class="btn btn-outline-dark">+ Create a new post</a>
        </div>

</div>




<?php



require_once "php/logic.php";



$sql = "SELECT * FROM data";

if($result = mysqli_query($link, $sql)){

if(mysqli_num_rows($result) > 0){

echo '<table class="table table-bordered table-striped">';

echo "<thead>";

echo "<tr>";

echo "<th>#</th>";

echo "<th>Title</th>";

echo "<th>Subtitle</th>";

echo "<th>Action</th>";

echo "</tr>";

echo "</thead>";

echo "<tbody>";

while($row = mysqli_fetch_array($result)){

echo "<tr>";

echo "<td>" . $row['id'] . "</td>";

echo "<td>" . $row['title'] . "</td>";

echo "<td>" . $row['subtitle'] . "</td>";

echo "<td>";

echo '<a href="php/view.php?id='. $row['id'] .'" class="mr-3" title="Podejrzyj" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';


echo '';

echo '<a href="php/edit.php?id='. $row['id'] .'" class="mr-3" title="Edytuj" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';

echo "</td>";

echo "</tr>";

}

echo "</tbody>";

echo "</table>";

// Free result set

mysqli_free_result($result);

} else{

echo '<div class="alert alert-danger"><em>No records were found.</em></div>';

}

} else{

echo "Oops! Something went wrong. Please try again later.";

}

// Close connection

mysqli_close($link);

?>

</div>

</div>

</div>

</div>

</body>

</html>