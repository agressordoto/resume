<?php
session_start();
require_once "bd/bd.php";
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$number = $_POST['number'];

if(trim($name)=== ""){
    $_SESSION['message'] = "Имя заданно не верно";
    header('location: registration.php');
}else {
    if(trim($password) === ""){
       $_SESSION['message'] = "Параль заданн не верно";
       header('location: registration.php');
    }else{
        if(trim($email) === ""){
            $_SESSION['message'] = "Почта заданна не верно";
            header('location: registration.php');
        }else{
            $password = md5($password);
            $query = "INSERT INTO `users` (`name`, `email`, `password`, `number`) VALUES ('$name','$email','$password','$number')";
            mysqli_query($conn, $query);
        }
    }

}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="index.php">Домой</a>
</body>
</html>


