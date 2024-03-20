<?php
session_start();
$servername = 'localhost';
$username = 'root';
$password = '';

/* On ferme la connexion */
$conn = null;

if (isset ($_SESSION["Loggedin"])) {
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

    <!-- <style>
        form {
            background-image: url('./Assets/header-mounts.jpg');
            background-size: cover;
            height: 800px;
            width: 100%;
        }
    </style> -->


</head>

<body>



    <div class="imgHeaderMount">

        <header>

            <nav id="menus">
                <ul>
                    <li>
                        <a href="./index.php">
                            <img src="./Assets/logo.png" alt="World of warcraft" class="logo" /></a>
                    </li>
                    <li><a href="./bdd-mount.php">Notre équipe</a></li>
                    <li><a href="./equipements.php">Formulaire</a></li>
                    <li><a href="./equipements.php">Actualités</a></li>
                    <li>
                        <?php
                        if (isset ($_SESSION['Loggedin'])) {
                            echo '<a href="./MonCompte.php">' . $userpseudo . '</a>';
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

            <div>
                <h2 class="filter">Formulaire</h2>
            </div>



            <form action="bdd-mount.php" method="post" class="formMount">



                <!-- /*------------------------ FILTRES MONTURES-------------------*/ -->

                <!-- Type -->

                <div class="filter">

                    <label for="nombre">Nombre d'employés</label>
                    <select name="nombre">
                        <option value=""></option>
                        <option value="1-19">1-19</option>
                        <option value="20-99">20-99</option>
                        <option value="100-999">100-999</option>
                        <option value="1000+">1000+</option>
                    </select>


                    <label for="itdedie">Avez-vous une équipe IT dédiée?</label>
                    <select name="itdedie">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <?php if ((!empty ($_POST["itdedie"]))) {
                        echo "coucou";
                    } ?>

                    <label for="mdp">Avez-vous une base de données de mots de passe commune au service IT ? </label>
                    <select name="mdp">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="rssi">Existe-t-il un RSSI (désigné ou recruté) ? </label>
                    <select name="rssi">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="cyberattaque">Si non, avez-vous désigné un référent en cas de cyberattaque ? </label>
                    <select name="cyberattaque">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="charte">Y’a t’il une charte de sécurité informatique ? </label>
                    <select name="charte">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="exterieur">Existe t-il une liste des personnes extérieures qui pénètrent physiquement
                        dans
                        vos locaux ? </label>
                    <select name="exterieur">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="sensible">Existe t’il une sensibilisation des utilisateurs à la sécurité informatique
                        et à la confidentialité ?</label>
                    <select name="sensible">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="phishing">Avez-vous déjà réalisé une campagne de phishing au sein de votre organisation
                        ? </label>
                    <select name="phishing">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="certif">Avez-vous des certifications ? </label>
                    <select name="certif">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="coffre">Utilisez-vous un coffre-fort de mots de passe ? </label>
                    <select name="coffre">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="service">Les mots de passes administrateurs sont-ils différents pour chaque service ?
                    </label>
                    <select name="service">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="service">Les mots de passes administrateurs sont-ils différents pour chaque service ?
                    </label>
                    <select name="service">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="laps">Si vous êtes sous Windows, utiliser-vous LAPS ?
                    </label>
                    <select name="laps">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="compte">Lors du départ d’un salarié, son compte utilisateur est-il désactivé ?
                    </label>
                    <select name="compte">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="data">Pendant combien de temps gardez-vous leurs données après le départ ?
                    </label>
                    <select name="data">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                </div>

                <!-- UTILISATEURS / HARDWARE / SOFTWARE / RESEAU  -->
                <div class="filter">

                    <label for="acces">Avez-vous un contrôle d’accès à l’entrée des locaux ?
                    </label>
                    <select name="acces">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="controle">Avez-vous un contrôle de sécurité ?
                    </label>
                    <select name="controle">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="firewall"> Y’a t’il un firewall ?
                    </label>
                    <select name="firewall">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="inventaire"> Y’a t’il un inventaire, tenu à jour, du matériel de l’entreprise ?
                    </label>
                    <select name="inventaire">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="renew">Le matériel informatique des utilisateurs est-il renouvelé régulièrement ?
                    </label>
                    <select name="renew">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="trois">Les données sont-elles stockées à 3 endroits différents ?
                    </label>
                    <select name="trois">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="local"> Le serveur, les sauvegardes, les équipements de réseau sont-ils protégés dans un
                        local fermé et climatisé ?
                    </label>
                    <select name="local">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="nouveau"> Avez-vous une réglementation pour l’installation de tout nouveau matériel ?
                    </label>
                    <select name="nouveau">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="antivirus">Existe-t-il un Antivirus sur le matériel physique (PC, Serveurs,...)?
                    </label>
                    <select name="antivirus">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="regular">Est-il mis à jour régulièrement ?
                    </label>
                    <select name="regular">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="logiciel">Les logiciels mis à jour par votre entreprise sont-ils mis à jour
                        régulièrement
                        ?
                    </label>
                    <select name="logiciel">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="inventaire">Avez-vous procédé a un inventaire des OS & logiciels installés sur le
                        matériel
                        de l’entreprise ?
                    </label>
                    <select name="inventaire">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="regle">Avez-vous une réglementation pour l’installation de tout nouveau logiciel?
                    </label>
                    <select name="regle">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="wifi">Avez-vous un WiFi d’entreprise ?
                    </label>
                    <select name="wifi">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="invite">Avez-vous un un WiFi invité ?
                    </label>
                    <select name="invite">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="accesunique">Est-ce un accès unique (avec mot de passe ?)
                    </label>
                    <select name="accesunique">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="auth">Un accès avec authentification ? (voucher, code d’accès temporaire, ..)
                    </label>
                    <select name="auth">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="ethernet">Avez-vous un réseau Ethernet ?
                    </label>
                    <select name="ethernet">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="sensible">Avez-vous des données sensibles ? (médicales, défenses, militaires)
                    </label>
                    <select name="sensible">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="vlan">Avez-vous un réseau segmenté en VLANs ?
                    </label>
                    <select name="vlan">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="dmz">Avec-vous une DMZ ?
                    </label>
                    <select name="dmz">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="waf"> Avez-vous mis en place un WAF ?
                    </label>
                    <select name="waf">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="adressage">Le plan d’adressage est-il tenu à jour ?
                    </label>
                    <select name="adressage">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>

                    <label for="ids">Etes-vous équipé d’un Système de Détection d’Intrusion (IDS)?
                    </label>
                    <select name="ids">
                        <option value=""></option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>





                    <div>
                        <input type="submit" value="Rechercher" name="submit">
                    </div>
                </div>





                <!-- // header("Location:list-mount.php"); -->





            </form>

        </header>

    </div>





    <!-- /*----------------------------Connexion BDD------------------------*/ -->




    <?php


    //On récupère les infos de la table 
    




    if (isset ($_POST["submit"])) {




        // Godefroy
        // Step 1
        // Pour chaque paramètre, on peut créé un boolean correspondant
        $itdedie = $_POST["itdedie"];
        // $haveDifficulty = false;
        $source = $_POST["source"];
        // $haveSource = false;
        $extension = $_POST["extension"];
        // $haveExtension = false;
        $faction = $_POST["faction"];
        // $haveFaction = false;
        $type = $_POST["type"];
        // $haveType = false;
        $i = 0;


        $sqlQuery = 'INSERT INTO t_joueur (J_Id, J_ADR, J_MDP, J_User) VALUES (?, ?, ?, ?)';


        // Godefroy
        // Step 2
        // On passe le boolean à True pour chaque critère utilisé.
        // if (!empty ($_POST['difficulty'])) // si une region à été choisie
        // {
        //     $where[] = ' MDI_Nom = ' . ':difficulty';
        //     $haveDifficulty = true;
        // }
        // if (!empty ($_POST['source'])) // si une region à été choisie
        // {
        //     $where[] = ' MO_Nom = ' . ':source';
        //     $haveSource = true;
        // }
        // if (!empty ($_POST['extension'])) // si une region à été choisie
        // {
        //     $where[] = ' ME_Nom = ' . ':extension';
        //     $haveExtension = true;
        // }
        // if (!empty ($_POST['faction'])) // si une region à été choisie
        // {
        //     $where[] = ' MFA_Nom = ' . ':faction';
        //     $haveFaction = true;
        // }
        // if (!empty ($_POST['type'])) // si une region à été choisie
        // {
        //     $where[] = ' MTY_Nom = ' . ':type';
        //     $haveType = true;
        // }
    



        // if (isset ($where)) {
        //     $sqlQuery .= " WHERE " . implode(' AND ', $where);
        // }
    


        // Godefroy
        // Step 3
        // Les IFs sont basiques, on peut les mettre chacun sur une ligne 
        // pour que ça soit plus facile à comprendre/lire
        $sth = $dbco->prepare($sqlQuery);
        // if ($haveFaction) {
        //     $sth->bindParam(':faction', $faction, PDO::PARAM_STR);
        // }
        // if ($haveExtension) {
        //     $sth->bindParam(':extension', $extension, PDO::PARAM_STR);
        // }
        // if ($haveSource) {
        //     $sth->bindParam(':source', $source, PDO::PARAM_STR);
        // }
        // if ($haveDifficulty) {
        //     $sth->bindParam(':difficulty', $difficulty, PDO::PARAM_STR);
        // }
        // if ($haveType) {
        //     $sth->bindParam(':type', $type, PDO::PARAM_STR);
        // }
    
        $sth->execute();

        //On affiche les infos de la table
        $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
        $keys = array_keys($resultat);
        // for ($i = 0; $i < count($resultat); $i++) {
    


        foreach ($resultat as $resultats) {
            $i++;
            ?>
            <div class="actu">
                <article class="article">
                    <div class="articleMount">
                        <div class="textMount">
                            <h3>
                                <?php echo $resultats['M_Nom'] ?>
                            </h3>

                            <div class="criteriaMount">


                                <div class="difficulty">

                                    <img src="./Assets/mounts/picto/star.png" class="picto">

                                    <?php if (!empty ($_POST['difficulty'])) {
                                        if ($difficulty === "Facile") {
                                            echo '<style> .difficulty {color:green;} </style>';
                                            echo $resultats['MDI_Nom'];
                                        }

                                        if ($difficulty === "Moyen") {
                                            echo '<style> .difficulty {color:brown;} </style>';
                                            echo $resultats['MDI_Nom'];
                                        }

                                        if ($difficulty === "Difficile") {
                                            echo '<style> .difficulty {color:brown;} </style>';
                                            echo $resultats['MDI_Nom'];
                                        }
                                        if ($difficulty === "Argent réel") {
                                            echo '<style> .difficulty {color:green;} </style>';
                                            echo $resultats['MDI_Nom'];
                                        }
                                    } else {
                                        echo $resultats['MDI_Nom'];
                                    } ?>

                                </div>


                                <div class="mountDetail">
                                    <?php echo $resultats['MO_Nom'] ?>
                                </div>
                                <div class="mountDetail">
                                    <?php echo $resultats['ME_Nom'] ?>
                                </div>
                                <div class="mountDetail">
                                    <?php echo $resultats['MFA_Nom'] ?>
                                </div>
                                <div class="mountDetail">
                                    <?php echo $resultats['MTY_Nom'] ?>
                                </div>

                            </div>
                            <button class="read" type="button">Ajouter à mon inventaire</button>


                        </div>
                        <img src="<?php echo $resultats['chemin_image'] ?>" class="photoMount" />
                    </div>
                </article>
            </div>
            </section>







            <?php
        }

        echo "<p class=count> Résultats : $i</p>";
    }



    ?>

</body>

</html>