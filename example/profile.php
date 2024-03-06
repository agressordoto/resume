<?php
session_start();
include "bd/bd.php";
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
    <link rel="stylesheet" href="тnewpostscss.css">

</head>
<body>

<div class="page">
    <?php include "includes/headder.php"?>
<div class="page2">
    <div class="article">
        <?php
        $id_autor = $_SESSION['user']['id'];
        $result = mysqli_query($conn, "SELECT * FROM `posts` WHERE `id_autor` = '$id_autor'");

        while ($posts = mysqli_fetch_assoc($result)) {
            echo '<img class="imgprofile" src="' . $posts["image"] . '"/>';
            echo "Номер статьи: " . " " . $posts["id"] . "<br>";
            echo "Текст статьи:" . " " . $posts["text"] . "<br>";
            echo "Название статьи: " . " " .$posts["tittle"];

        }


        ?>
    </div>


    <div class="body">
        <main>
            <div class="formposts">

                    <a href="newposts.php"><button>Добавить новую статью</button></a>
                    <a href="deleteposts.php"><button >Удалить статью</button></a>









            </div>
        </main>
    </div>

</div>
</div>
<?php include "includes/footer.php" ?>
</body>
</html>

