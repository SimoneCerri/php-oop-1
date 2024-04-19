<?php
require_once __DIR__ . "/Models/Production.php"; //import class
require_once __DIR__ . "/Models/Genre.php"; //import class
require __DIR__ . "/database/db.php";
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
    <!-- #region link to FontAwesome (icons) -->
    <link rel='stylesheet' href='https: //cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.    css' integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIft+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <!-- #endregion link to FontAwesome (icons) -->
    <!-- #region links to GoogleFonts (Nanum Gothic Coding) -->
    <link rel='preconnect' href='https: //fonts.googleapis.com'>
    <link rel='preconnect' href='https: //fonts.gstatic.com' crossorigin>
    <link href='https: //fonts.googleapis.com/css2?family=Nanum+Gothic+Coding&display=swap' rel='stylesheet'>
    <!-- #endregion links to GoogleFonts (Nanum Gothic Coding) -->
    <!-- #region link to Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- #endregion link to Bootstrap -->

</head>

<body class='debug'>

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
                                    <hr>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <span>
                                            Language: <?php echo $production->language ?>
                                        </span>
                                    </div>
                                    <div>
                                        <span>
                                            Vote: <?php echo $production->vote ?> /10
                                        </span>
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
                                    <div>
                                        <span>
                                            <?php echo $production->genre?->description ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>

        <style>
            body {
                background-color: #333;
                color: white;
            }
        </style>
    </div>
    <!-- #region Dev-only cdns, disable in production -->
    <!-- #region link to Vue-script -->
    <script src='https: //unpkg.com/vue@3/dist/vue.global.js'></script>
    <!-- #endregion link to Vue-script -->
    <!-- #region link to Bootstrap-script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- #endregion link to Bootstrap-script -->
    <!-- #region link to Script -->
    <script src='./assets/js/main.js'></script>
    <!-- #endregion link to Script -->
    <!-- #endregion Dev-only cdns, disable in production -->

</body>

</html>