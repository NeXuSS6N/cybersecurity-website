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
        </header>

        <div class="team-section">
            <h2>Notre équipe</h2>

            <div class="team-member">
                <img src="./Assets/team-member1.jpg" alt="Team Member 1" />
                <h3>Anaïs</h3>
                <p>Développeur</p>

            </div>
            <div class="team-member">
                <img src="./Assets/team-member2.jpg" alt="Team Member 2" />
                <h3>Ruben</h3>
                <p>Développeur</p>

            </div>

            <div class="team-member">
                <img src="./Assets/team-member3.jpg" alt="Team Member 3" />
                <h3>Philippe Casier</h3>
                <p>Proxénète</p>

            </div>

            <div class="team-member">
                <img src="./Assets/team-member4.jpg" alt="Team Member 4" />
                <h3>Philippe</h3>
                <p>Architecte réseaux</p>

            </div>

            <div class="team-member">
                <img src="./Assets/team-member5.jpg" alt="Team Member 5" />
                <h3>Philippe</h3>
                <p>Commercial CESI France</p>

            </div>

        </div>

        <div class="footer-basic">
            <footer>
                <div class="social">
                    <a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i
                            class="icon ion-social-snapchat"></i></a><a href="#"><i
                            class="icon ion-social-twitter"></i></a><a href="#"><i
                            class="icon ion-social-facebook"></i></a>
                </div>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="./index.php">Page d'accueil</a></li>
                    <li class="list-inline-item"><a href="./equipements.php">L'équipe Atara</a></li>
                    <li class="list-inline-item"><a href="#">Paramètres et politique de cookies</a></li>
                    <li class="list-inline-item"><a href="#">Mentions légales</a></li>
                    <li class="list-inline-item"><a href="#">Confidentialité en ligne</a></li>
                </ul>
                <p class="copyright">Atara © 2024</p>
            </footer>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js">
        </script>

</body>

</html>