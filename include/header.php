<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- <link href="../style.css" rel="stylesheet"> -->
        <title>BMW</title>
        <link rel="shortcut icon" href="../images/logofooter.png">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    </head>
    <body data-bs-theme="dark">
        <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php">
                    <img src="/images/logo.ico" width="55">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link 
                            <?php
                                $active = 'active';
                                $url = $_SERVER['PHP_SELF'];
                                if ($url == '/index.php')
                                    echo($active);
                                ?>
                            " aria-current="page" href="../index.php">Акции</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link 
                                <?php
                                    $active;
                                    $url = $_SERVER['PHP_SELF'];
                                    if ($url == '/pages/catalog.php')
                                        echo($active);
                                ?>
                            " href="../pages/catalog.php">Каталог призов</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ввести промокод</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav me-5">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle 
                                <?php
                                    $active;
                                    $url = $_SERVER['PHP_SELF'];
                                    if ($url == '/pages/lk.php')
                                        echo($active);
                                ?>
                            " href="../pages/lk.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Личный кабинет
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Войти</a></li>
                                <li><a class="dropdown-item" href="#">Зарегистрироваться</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="../pages/lk.php">Личный кабинет</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>