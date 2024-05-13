<?php
session_start();
include ('/Applications/MAMP/htdocs/include/header.php');
?>

<div class="container-fluid">
    <h1 class="ps-3 mt-3">Авторизация</h1>
    <div class="mt-4 mx-3">
        <form action="" method="post">
            <div class="form-floating mb-3" style="width: 38%;">
                <input type="text" class="form-control" placeholder="Введите логин" name="login" id="login">
                <label for="floatingInput">Логин</label>
            </div>
            <div class="form-floating" style="width: 38%;">
                <input type="password" class="form-control" placeholder="Введите пароль" name="pass" id="pass">
                <label for="floatingPassword">Пароль</label>
            </div>
            <button type="submit" class="btn btn-outline-light mt-3">Войти</button>
        </form>
    </div>
</div>


</body>
<footer>
    <?php include ('/Applications/MAMP/htdocs/include/footer.php'); ?>
</footer>

</html>