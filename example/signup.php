<?php
session_start();
require_once 'bd/bd.php';

$password = md5($_POST['password']);
$email = $_POST['email'];

$check_user = mysqli_query($conn, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");


if(mysqli_num_rows($check_user) > 0){
    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] =[
        "id" => $user['id'],
        "email" => $user['email'],
        "pass" => $user["password"]
    ];
    header('location: index.php');


}else{
    $_SESSION['message'] = "Неверный логин или пароль";
    header('location: login.php');
}

?>