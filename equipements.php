<?php
session_start();

if (isset($_SESSION["Loggedin"])) {
    $userpseudo = $_SESSION['Loggedin'];
} else {
    session_destroy();
}

include "auth-mount-equip.php";
?>

<!DOCTYPE html>
<html>

<head>

    <link rel="icon" type="image/x-icon" href="./Assets/icon.png" />
    <meta charset="utf-8" />
    <title>Atara</title>

    <!-- Footer -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />


    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./css/style-equipment.css" />

</head>

<body>

    <div class="imgHeaderEquipment">
        <header>

            <nav id="menus">
                <ul>
                    <li>
                        <a href="./index.php">
                            <img src="./Assets/logo.png" alt="World of warcraft" class="logo" /></a>
                    </li>
                    <li><a href="./equipements.php">Notre équipe</a></li>
                    <li><a href="./bdd-mount.php">Formulaire</a></li>
                    <li><a href="./">Actualités</a></li>
                    <li>
                        <?php
                        if (isset($_SESSION['Loggedin'])) {
                            echo '<a href="./MonCompte.php">' . $userpseudo . '</a>';
                        } else {
                            echo '<a href="./login.php">Mon compte</button></a>';
                        }
                        ?>
                    </li>
                    <li>
                        <?php
                        if (isset($_SESSION['Loggedin'])) {
                            echo '<a href="./PHP/Login/logout.php"><button class="login" type="button">Logout</button></a>';
                        } else {
                            echo '<a href="./login.php"><button class="login" type="button">Login</button></a>';
                        }
                        ?>
                    </li>
                </ul>

            </nav>




</body>

</html>