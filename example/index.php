<?php
session_start();
include "bd/bd.php";


?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>example</title>
    <link rel="stylesheet" href="index.css">

</head>
<body>
<div class="page">
<?php include "includes/headder.php" ?>
    <main>
        <div>
            <form class="OpenForm">
                <div class="article">
                    <?php
                    $result = mysqli_query($conn, "SELECT * FROM `posts`");

                    while ($posts = mysqli_fetch_assoc($result)) {
                        echo '<img class="imgprofile" src="' . $posts["image"] . '"/>';
                        echo "Название статьи: " .$posts["tittle"]. "<br>";
                        echo "Текст статьи:" . " " . $posts["text"] . "<br>";

                    }


                    ?>
                </div>
            </form>
        </div>
    </main>
<?php include "includes/footer.php"?>
</div>



</body>
</html>


