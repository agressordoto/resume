<?php
session_start();
require_once "bd/bd.php";
$tittle = $_POST['tittle'];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">

</head>
<body>
    <form>
        <div>
            <?php include "includes/headder.php";?>
            <?php
            $query = mysqli_query($conn,"SELECT * FROM `posts` WHERE `tittle` = '$tittle'");
            while ($posts = mysqli_fetch_assoc($query)) {
            echo '<img class="imgprofile" src="' . $posts["image"] . '"/>';
            echo " " .$posts["tittle"]. "<br>";
            echo "Текст статьи:" . " " . $posts["text"] . "<br>";}
            ?>

        </div>
    </form>
</body>
</html>










