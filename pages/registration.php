<?php
session_start();
include ('/Applications/MAMP/htdocs/include/header.php');
?>

<div class="container-fluid">
    <h1 class="ps-3 mt-3">Регистрация</h1>
    <div class="mt-4 mx-3">
        <form action="../scripts/check.php" method="post">
            <div class="form-floating mb-3" style="width: 38%;">
                <input type="text" class="form-control" placeholder="Введите имя" name="name" id="name">
                <label for="floatingInput">Имя</label>
            </div>
            <div class="form-floating mb-3" style="width: 38%;">
                <input type="text" class="form-control" placeholder="Введите фамилию" name="surname" id="surname">
                <label for="floatingInput">Фамилия</label>
            </div>
            <div class="form-floating mb-3" style="width: 38%;">
                <input type="text" class="form-control" placeholder="Введите логин" name="login" id="login">
                <label for="floatingInput">Логин</label>
                <div id="emailHelp" class="form-text ms-1">Логин должен содержать от 4 до 10 символов.</div>
            </div>
            <div class="form-floating" style="width: 38%;">
                <input type="password" class="form-control" placeholder="Введите пароль" name="pass" id="pass">
                <label for="floatingPassword">Пароль</label>
                <div id="emailHelp" class="form-text ms-1">Пароль должен содержать от 6 до 8 символов.</div>
            </div>
            <button type="submit" class="btn btn-outline-light mt-3">Зарегистрироваться</button>
        </form>
    </div>
</div>


</body>
<footer>
    <?php include ('/Applications/MAMP/htdocs/include/footer.php'); ?>
</footer>

</html>