<?php


$conn = mysqli_connect("localhost", "root", "", "stormwind");
$link = mysqli_connect("localhost", "root", "", "stormwind");

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());
    
    }

    $sql ="SELECT * FROM tablica";
    $query = mysqli_query($conn, $sql);


    if(isset($_REQUEST["new_post"])) {

        $title = $_REQUEST["title"];
        $subtitle = $_REQUEST['subtitle'];
        $content = $_REQUEST["content"];
        $kontakt = $_REQUEST["kontakt"];

        
        $sql = "INSERT INTO tablica (title, subtitle, content, kontakt) VALUES('$title','$subtitle', '$content' , '$kontakt')";
        mysqli_query($conn, $sql);


        header("Location: tablica.php?info=added");
        exit();
    }

    if(isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];

        $sql = "SELECT * FROM tablica WHERE id= $id";
       $query = mysqli_query($conn, $sql);

    }

    if(isset($_REQUEST['update'])){
        $id = $_REQUEST['id'];
        $title = $_REQUEST["title"];
        $subtitle = $_REQUEST['subtitle'];
        $content = $_REQUEST["content"];
        $kontakt = $_REQUEST["kontakt"];
        

        $sql = "UPDATE tablica SET title='$title', subtitle='$subtitle', content= '$content',  kontakt= '$kontakt'  WHERE id = $id";
        mysqli_query($conn, $sql);


        header("Location: tablica.php?info=updated");
        exit();

    }
    if(isset($_REQUEST['delete'])) {
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM tablica WHERE id= $id";
       $query = mysqli_query($conn, $sql);

       header("Location: tablica.php?info=deleted");
       exit();

    }


    ?>
