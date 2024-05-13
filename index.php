<!-- тут весь список акций -->

<?php
session_start();
include ('/Applications/MAMP/htdocs/include/header.php');
?>


<div class="container-fluid">
  <div class="px-5 mx-4 text-center mt-3 mb-3 d-grid gap-2">
    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Ввести промокод
    </button>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Ввод промокода</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Промокод</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена
            </button>
            <button type="button" class="btn btn-primary">Подтвердить</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3 mx-auto mt-2 border-2" style="max-width: 90%;">
    <div class="row g-0">
      <div class="col-md-3">
        <img src="/images/michelin.jpg" class="img-fluid rounded-start" alt="michelin">
      </div>
      <div class="col-md-9">
        <div class="card-body">
          <h5 class="card-title text-center">Покупай резину Michelin</h5>
          <p class="card-text">При покупке комплекта резины от производителя Michelin, получи промокод у
            продавца, активируй его на нашем сайте и получи баллы для заказа призов!</p>
          <p class="card-text m-3 text-end position-absolute bottom-0 end-0"><small class="text-body-secondary">Акция
              проводится до 00.00.0000</small></p>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-3 mx-auto mt-5 border-2" style="max-width: 90%;">
    <div class="row g-0">
      <div class="col-md-3">
        <img src="/images/gazprom.jpg" class="img-fluid rounded-start" alt="gazprom">
      </div>
      <div class="col-md-9">
        <div class="card-body">
          <h5 class="card-title text-center">Заправляйся на Газпромнефти</h5>
          <p class="card-text">При заправке на сумму более 50 000 ₽ в месяц, получи промокод у продавца,
            активируй его на нашем сайте и получи баллы для заказа призов!</p>
          <p class="card-text m-3 text-end position-absolute bottom-0 end-0"><small class="text-body-secondary">Акция
              проводится до 00.00.0000</small></p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3 mx-auto mt-5 border-2" style="max-width: 90%;">
    <div class="row g-0">
      <div class="col-md-3">
        <img src="/images/fitservice.jpg" class="img-fluid rounded-start" alt="fitservice">
      </div>
      <div class="col-md-9">
        <div class="card-body">
          <h5 class="card-title text-center">Ремонтируй и обслуживай автомобиль в FIT SERVICE</h5>
          <p class="card-text">При оплате услуг FIT SERVICE на сумму более 100 000 ₽, получи промокод у
            продавца, активируй его на нашем сайте и получи баллы для заказа призов!</p>
          <p class="card-text m-3 text-end position-absolute bottom-0 end-0"><small class="text-body-secondary">Акция
              проводится до 00.00.0000</small></p>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
<footer>
  <?php include ('/Applications/MAMP/htdocs/include/footer.php'); ?>

  </html>