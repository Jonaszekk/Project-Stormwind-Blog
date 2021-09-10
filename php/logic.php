<?php


$conn = mysqli_connect("localhost", "root", "", "stormwind");
$link = mysqli_connect("localhost", "root", "", "stormwind");

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());
    
    }

    $sql ="SELECT * FROM data";
    $query = mysqli_query($conn, $sql);


    if(isset($_REQUEST["new_post"])) {

        $title = $_REQUEST["title"];
        $subtitle = $_REQUEST['subtitle'];
        $content = $_REQUEST["content"];
        $img = $_REQUEST["img"];

        
        $sql = "INSERT INTO data(title, subtitle, content, img) VALUES('$title','$subtitle', '$content' , '$img')";
        mysqli_query($conn, $sql);


        header("Location: ../adminprofil.php?info=added");
        exit();
    }

    if(isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];

        $sql = "SELECT * FROM data WHERE id= $id";
       $query = mysqli_query($conn, $sql);

    }

    if(isset($_REQUEST['update'])){
        $id = $_REQUEST['id'];
        $title = $_REQUEST["title"];
        $subtitle = $_REQUEST['subtitle'];
        $content = $_REQUEST["content"];
        $img = $_REQUEST["img"];
        

        $sql = "UPDATE data SET title='$title', subtitle='$subtitle', content= '$content',  img= '$img'  WHERE id = $id";
        mysqli_query($conn, $sql);


        header("Location: ../adminprofil.php?info=updated");
        exit();

    }
    if(isset($_REQUEST['delete'])) {
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM data WHERE id= $id";
       $query = mysqli_query($conn, $sql);

       header("Location: ../adminprofil.php?info=deleted");
       exit();

    }


    ?>
