<div>

    <header>
    <div class="container">
       <nav>
            <a href="../index.php"><img src="img/img.png" class="img" ></a>
                <div>
                    <form action="check_search.php" method="post">
                        <a class="a-search"><input placeholder="Поиск" class="search" type="text" name="tittle"></a>
                        <button class="poisk" type="submit">найти</button>
                    </form>
                </div>

                    <ul>
                        <li> <a href="http://example/">Home</a></li>
                        <li> <a href="registration.php">Registration</a></li>
                        <?php if (!empty($_SESSION['user']['email'])) { ?>
                            <?php $user = $_SESSION['user']['email'] ?>
                            <li><a href="profile.php"><?= $user ?></a></li>
                            <li><a href="logout.php">Log out</a></li>
                        <?php } else { ?>
                            <li><a href="login.php">Sing up</a></li>
                        <?php } ?>



                    </ul>
       </nav>
    </div>
    </header>
</div>