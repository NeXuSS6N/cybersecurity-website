<?php
session_start();

if (isset ($_SESSION["Loggedin"])) {
    $username = $_SESSION['Loggedin'];
} else {
    session_destroy();
}
?>



<!DOCTYPE html>

<html lang="fr">

<head>
    <link rel="icon" type="image/x-icon" href="./Assets/icon.png" />
    <meta charset="utf-8" />
    <title>Atara</title>

    <link rel="stylesheet" href="./css/style.css" />
    <script src="script.js"></script>

    <!-- Footer -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />

    <!-- Police -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <div class="imgHeader">
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
                        if (isset ($_SESSION['Loggedin'])) {
                            echo '<a href="./MonCompte.php">' . $username . '</a>';
                        } else {
                            echo '<a href="./login.php">Mon compte</button></a>';
                        }
                        ?>
                    </li>
                    <li>

                        <?php
                        if (isset ($_SESSION['Loggedin'])) {
                            echo '<a href="./PHP/Login/logout.php"><button class="login" type="button">Logout</button></a>';
                        } else {
                            echo '<a href="./login.php"><button class="login" type="button">Login</button></a>';
                        }
                        ?>
                    </li>
                </ul>
            </nav>
        </header>
    </div>
    <section>
        <div class="actu">
            <article>
                <div class="article1">
                    <div class="articleText">
                        <h3>
                            Cyberattaque Massive : Des Hackers utilisent des Chatbots pour Infiltrer les Réseaux
                            Sociaux
                        </h3>
                        <p>
                            Des rapports révèlent qu'une cyberattaque d'envergure mondiale a été lancée par des hackers
                            utilisant des chatbots sophistiqués pour infiltrer les réseaux sociaux. Ces chatbots
                            malveillants ciblent les profils des utilisateurs, collectant des données sensibles et
                            propageant des logiciels malveillants. Les experts en sécurité affirment que cette attaque
                            pourrait compromettre des millions de comptes et exhortent les utilisateurs à être vigilants
                            et à renforcer leurs mesures de sécurité en ligne.
                        </p>
                        <button class="read" type="button">Lire la suite</button>
                    </div>

                    <img src="./Assets/article1.jpg" alt="Invincible" class="invincible" />
                </div>

                <div class="article1">
                    <div class="articleText">
                        <h3>Fuite de Données Géante : Des Pirates Informatiques s'Emparent des Informations de Cartes
                            Bancaires de Millions de Clients"</h3>
                        <p>
                            Une fuite de données massive a été signalée, avec des pirates informatiques ayant réussi à
                            s'emparer des informations de cartes bancaires de millions de clients dans le monde entier.
                            Les experts en sécurité craignent que ces données ne soient utilisées à des fins de fraude
                            financière à grande échelle. Les institutions financières sont en état d'alerte maximale,
                            travaillant rapidement pour identifier et sécuriser les vulnérabilités dans leurs systèmes.
                        </p>
                        <button class="read" type="button">Lire la suite</button>
                    </div>

                    <img src="./Assets/article2.jpg" alt="Invincible" class="invincible" />
                </div>

                <div class="article1">
                    <div class="articleText">
                        <h3>Ransomware Dévastateur : Une Entreprise Multinationale Paralysée par une Attaque de
                            Ransomware Inédite</h3>
                        <p>
                            Une entreprise multinationale de premier plan a été la cible d'une attaque de ransomware
                            sans précédent, paralysant complètement ses opérations. Les pirates informatiques ont
                            chiffré les données cruciales de l'entreprise et exigent une somme exorbitante en bitcoin
                            pour leur restitution. Les experts en sécurité sont sur le qui-vive, tentant de déterminer
                            l'origine de l'attaque et de mettre en place des mesures de récupération pour limiter les
                            dommages.


                        </p>
                        <button class="read" type="button">Lire la suite</button>
                    </div>

                    <img src="./Assets/article3.jpg" alt="Invincible" class="invincible" />
                </div>
            </article>

            <aside>
                <div class="aside1">
                    <h3>News du jour</h3>
                    <p>
                        Un mail teste les réflexes des gendarmes en matière de cybersécurité, 10 % échouent
                    </p>
                    <img src="./Assets/news1.jpg" alt="Equipement" class="nain" />
                    <button class="button-aside" type="button">Découvrir</button>
                </div>
                <div class="aside1">
                    <h3>News du jour</h3>
                    <p>
                        Cybersécurité : l’armée française s’entraîne, et le dit en message codé sur X
                    </p>
                    <img src="./Assets/news2.jpg" alt="casque nain" class="nain" />
                    <button class="button-aside" type="button">Découvrir</button>
                </div>
            </aside>
        </div>
    </section>

    <div class="footer-basic">
        <footer>
            <div class="social">
                <a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i
                        class="icon ion-social-snapchat"></i></a><a href="#"><i
                        class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a>
            </div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Page d'accueil</a></li>
                <li class="list-inline-item"><a href="./equipements.php">L'équipe Atara</a></li>
                <li class="list-inline-item"><a href="#">Paramètres et politique de cookies</a></li>
                <li class="list-inline-item"><a href="#">Mentions légales</a></li>
                <li class="list-inline-item"><a href="#">Confidentialité en ligne</a></li>
            </ul>
            <p class="copyright">Atara © 2024</p>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>