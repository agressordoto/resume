<?php session_start();?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="registration_style.css">
    <title>Delete</title>
</head>
<body>

<div class="page">
    <?php include "includes/headder.php"?>
    <div class="body">
        <main>
            <div class="form-center">
                <form method="post" action="checkdelete.php" class="form">
                    <a class="vhod">Удаление статьи</a>
                    <br><input type="text" placeholder="Введите номер статьи" class="email" name="id"><br>

                    <br><input type="text" placeholder="Введите имя автора" class="password" name="name"><br>

                    <br><button class="form__button" type="submit">Удалить</button><br>

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

<?php include "includes/footer.php"?>
</body>
</html>