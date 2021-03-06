<?php
include __DIR__ ."../../Application/Database.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../files/css/explore.css?=<?= rand(1, 12000) ?>">
    <title>Micro Tech - Explore</title>
</head>

<body>
    <div class="container">
        <div class="split left">
            <h1>Alkatrészek</h1>
            <a href="component.php" class="button">Részletek</a>
        </div>
        <div class="split right">
            <h1>Játékok</h1>
            <a href="game.php" class="button">Részletek</a>
        </div>
        <?php
        if ($_SESSION['permission'] == "Weblap Tervező") {
            echo ' <div class="nav-admin">
            <a href="../Administration/administration.php"><span>Belépés mint Adminisztrátor</span></a>
            </div>';
        }
        ?>
    </div>
    <script src="../files/js/explore.js"></script>
</body>

</html>