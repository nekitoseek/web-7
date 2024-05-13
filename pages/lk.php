<?php
session_start();
include ('/Applications/MAMP/htdocs/include/header.php');
?>

<div class="container-fluid">
  <h1 class="ps-3 mt-3">Личный кабинет</h1>
  <!-- ниже сделать имя фамилия из бд -->
  <h2 class="text-center mt-4">Администратор</h2>
  <div class="bg-body-secondary rounded p-3">
    <p class="fs-4">Накоплено баллов: 10000</p>
    <p class="fs-4">Заказанные призы:</p>
  </div>
</div>

<footer>
  <?php include ('/Applications/MAMP/htdocs/include/footer.php'); ?>
</footer>