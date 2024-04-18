<?php

require_once __DIR__ . "/Models/Production.php";
require_once __DIR__ . "/Models/Genre.php";

$Prod1 = new Production("First prod", "English", 1, new Genre("First name", "First description")); //you can also save the new Genre inside another variable
$Prod2Genre = new Genre("Second name", "Second description");
$Prod2 = new Production("Second prod", "English", 2, $Prod2Genre);

//var_dump($Prod1);

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
            <ul class="list-group list-group-numbered">
                <h3>Production</h3> <!-- No way to put a class-name here without write directly ? (ex. < ?php echo Production ? >) -->
                <li class="list-group-item"><?php echo $Prod1->title ?></li>
                <li class="list-group-item"><?php echo $Prod1->language ?></li>
                <li class="list-group-item">Vote: <?php echo $Prod1->vote ?></li>
                <li class="list-group-item"><?php echo $Prod1->genre->name ?></li>
                <li class="list-group-item"><?php echo $Prod1->genre->description ?></li>
            </ul>
        </div>
        <div class="container">
            <ul class="list-group list-group-numbered">
                <h3>Production</h3> <!-- No way to put a class-name here without write directly ? (ex. < ?php echo Production ? >) -->
                <li class="list-group-item"><?php echo $Prod2->title ?></li>
                <li class="list-group-item"><?php echo $Prod2->language ?></li>
                <li class="list-group-item">Vote: <?php echo $Prod2->vote ?></li>
                <li class="list-group-item"><?php echo $Prod2Genre->name ?></li> <!-- using the new variable instead of Prod2->genre->name -->
                <li class="list-group-item"><?php echo $Prod2Genre->description ?></li> <!-- using the new variable instead of Prod2->genre->description -->
            </ul>
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