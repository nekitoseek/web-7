<?php
$name = htmlspecialchars(filter_var(trim($_POST['name'])));
$surname = htmlspecialchars(filter_var(trim($_POST['surname'])));
$login = htmlspecialchars(filter_var(trim($_POST['login'])));
$pass = htmlspecialchars(filter_var(trim($_POST['pass'])));

if (mb_strlen($login) < 4 || mb_strlen($login) > 10) {
    echo "Недопустимая длина логина";
    exit();
} elseif (mb_strlen($pass) < 6 || mb_strlen($pass) > 8) {
    echo "Недопустимая длина пароля";
    exit();
} elseif (mb_strlen($name) < 2 || mb_strlen($name) > 15) {
    echo "Недопустимая длина имени";
    exit();
} elseif (mb_strlen($surname) < 2 || mb_strlen($surname) > 15) {
    echo "Недопустимая длина фамилии";
    exit();
}
// таймкод видоса остановился на 20:21
?>