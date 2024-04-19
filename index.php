<?php
require_once __DIR__ . "/Models/Production.php"; //import class
require_once __DIR__ . "/Models/Genre.php"; //import class
require_once __DIR__ . "/Models/Movie.php"; //import class
require_once __DIR__ . "/Models/TVShow.php"; //import class
require __DIR__ . "/database/db.php";

//var_dump($productions[3]->seasons);
?>

<!doctype html>
<html lang='en'>

<head>

    <title>OOP in PHP</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- #region link to Style -->
    <link href='./assets/css/style.css' rel='stylesheet'>
    <!-- #endregion link to Style -->
    <!-- #region link to Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- #endregion link to Bootstrap -->

</head>

<body class='debug'>
    <style>
        <?php include './assets/css/style.css'; ?>
    </style>
    <header>
        <div class="logo">
            <img src="./assets/img/logo.svg" alt="">
        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="navId" role="tablist">
            <li class="nav-item">
                <a href="#tab1Id" class="nav-link" data-bs-toggle="tab" aria-current="page">About us</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#tab5Id" class="nav-link" data-bs-toggle="tab">Another link</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#" class="nav-link" data-bs-toggle="tab">Something</a>
            </li>
        </ul>
    </header>
    <main>
        <div id='app'>
            <div class="container">
                <div class="container py-5">
                    <div class="row g-3">
                        <?php foreach ($productions as $production) : ?>
                            <div class="col-4">
                                <div class="card text-center h-100">
                                    <div class="card-title">
                                        <strong>
                                            Title: <?php echo $production->title ?>
                                        </strong>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <span>
                                                Description:
                                            </span>
                                            <br>
                                            <span>
                                                <?php echo $production->genre?->description ?>
                                            </span>
                                        </div>
                                        <br>
                                        <div>
                                            <span>
                                                Language: <?php echo $production->language ?>
                                            </span>
                                        </div>
                                        <br>
                                        <div>
                                            <span>
                                                Vote: <?php echo $production->vote ?> /10
                                            </span>
                                        </div>
                                        <br>
                                        <div>
                                            <!-- <span>
                                                Profit: <?php echo $production->profit ?>
                                            </span> -->
                                        </div>
                                        <br>
                                        <div>
                                            <!-- <span>
                                                Duration: <?php echo $production->movie?->duration ?>
                                            </span> -->
                                        </div>
                                        <br>
                                        <div>
                                            <!-- <span>
                                                Seasons: <?php echo $production->tvshow?->season ?>
                                            </span> -->
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div>
                                            <span>
                                                Type: <?php echo $production->genre?->name ?>
                                                <!-- $production->genre?->name -->
                                                <!-- the "?" is equal to do an if to controll if genre exist -->
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="row text-center">
                <div class="col-6 left">
                    <ul>
                        <li>
                            <strong>
                                <h4>
                                    Quality
                                </h4>
                            </strong>
                        </li>
                        <li>
                            <a href="">
                                Number_1
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Number_2
                            </a>
                        </li>
                        <li><a href="">
                                Number_3
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Number_4
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 right">
                    <ul>
                        <li>
                            <strong>
                                <h4>
                                    Quantity
                                </h4>
                            </strong>
                        </li>
                        <li>
                            <a href="">
                                1
                            </a>
                        </li>
                        <li>
                            <a href="">
                                2
                            </a>
                        </li>
                        <li>
                            <a href="">
                                3
                            </a>
                        </li>
                        <li>
                            <a href="">
                                4
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- #region Dev-only cdns, disable in production -->
    <!-- #region link to Bootstrap-script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- #endregion link to Bootstrap-script -->
    <!-- #endregion Dev-only cdns, disable in production -->

</body>

</html>