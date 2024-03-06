<?php
session_start();
require_once "bd/bd.php";

$name = $_POST['name'];
$text = $_POST['text'];

$id_autor = $_SESSION['user']['id'];

$path = 'img/' . time() . $_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'], $path);

if(trim($name) === ""){
    $_SESSION["message"] = "Не все полян заполеннны!";
    header("location: newposts.php");
}else{
    if(trim($text) === ""){
        $_SESSION["message"] = "Не все полян заполеннны!";
        header("location: newposts.php");
    }else{
        mysqli_query($conn,"INSERT INTO `posts` (`id`,`id_autor`, `tittle`, `text`, `image`) VALUES (NULL,'$id_autor', '$name', '$text', '$path')");
        header("location: profile.php");
    }
}





