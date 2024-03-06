<?php
session_start();
require_once "bd/bd.php";

$id = $_POST['id'];
$name = $_POST['name'];


$all3 = mysqli_query($conn, "SELECT * FROM `posts` WHERE `id_autor`");
$all2 = mysqli_fetch_assoc($all3);
$id_autor = $all2['id_autor'];

if($_SESSION['user']['id'] === $id_autor){
    $query = "DELETE FROM `posts` WHERE `id` = '$id'";
    mysqli_query($conn, $query);
    $_SESSION['message'] = "Статья успешно удалена";
    header('location: deleteposts.php');
}else{
    $_SESSION['message'] = "Статья не ваша";
    header('location: deleteposts.php');
}



