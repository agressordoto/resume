<?php
session_start();
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
    <link rel="stylesheet" href="registration_style.css">

</head>
<body>
<div class="page">
    <?php include "includes/headder.php"?>
    <div class="body">
        <main>
            <br class="form-center">
                <form method="post" action="check_newposts.php" class="form" enctype="multipart/form-data">

                    <br><input type="text" placeholder="Введите название статьи" name="name"></br>

                    <br><input type="text" placeholder="Введите текст статьи" name="text"></br>

                    <br><input type="file" placeholder="Выберите картинку" name="file"></br>

                    <br><button class="form__button">Опубликовать</button><br>

                    <?php
                    if(isset($_SESSION['message'])){
                        echo '<p class="msg">'  . $_SESSION['message'] .  '</p>';
                        unset($_SESSION['message']);
                    }
                    ?>







                </form>

            </div>
        </main>
    </div>
</div>
</body>
</html>

