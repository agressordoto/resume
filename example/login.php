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
    <link rel="stylesheet" href="registration_style.css">
    <link rel="stylesheet" href="index.css">

</head>
<body>
<div class="page">
    <?php include "includes/headder.php"?>
    <div class="body">
        <main>
            <div class="form-center">
                <form method="post" action="signup.php" class="form">
                    <a class="vhod">Вход</a>
                    <br><input type="text" placeholder="Введите email" class="email" name="email"><br>

                    <br><input type="text" placeholder="Введите пароль" class="password" name="password"><br>

                    <br><button class="form__button" type="submit">Войти</button><br>

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


