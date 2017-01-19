<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8"/>
    <title></title>
    <link rel="stylesheet" href="assets/css/menuHorizStyle.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/AccueilStyle.css" media="all" type="text/css"/>
    <link rel="stylesheet" href="assets/css/footerStyle.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/slidesShowStyle.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/btnSearch.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/NewsDetails.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/News.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/EventStyle.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/signeUpStyle.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/Chercheurs.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/publication.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/Journaux.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/Conferences.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/commentaire.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/Issue.css" type="text/css"/>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>

    <?php

    if (isset($_GET['page']) AND
        ($_GET['page'] == "Admin" OR
            $_GET['page'] == "Template" OR
            $_GET['page'] == "Contenu" OR
            $_GET['page'] == "User" OR
            $_GET['page'] == "Commentaire" OR
            $_GET['page'] == "EditerContenu" OR
            $_GET['page'] == "EditerContenuConference" OR
            $_GET['page'] == "EditerContenuEvent" OR
            $_GET['page'] == "EditerContenuJournal" OR
            $_GET['page'] == "EditerContenuPublication")
    ) {
        echo "<link rel=\"stylesheet\" href=\"assets/css/admin/admin.css\"  media=\"screen\" type=\"text/css\" />";
        echo "<link rel=\"stylesheet\" href=\"assets/css/admin/Template.css\" type=\"text/css\" />
                <script src='assets/js/admin/admin.js' type='application/javascript'></script>
                <script src='assets/js/admin/Template.js' type='application/javascript'></script>
                  <script src='assets/js/admin/jscolor.min.js' type='application/javascript'></script>";
    }

    $connect = new db();

    $bdd = $connect->connectDB();

    if (!$bdd) {
        echo "Connection failed: ";
        header('Location: ../index.php');
    }

    $req = $bdd->prepare("SELECT * from template");
    $req->execute();

    $res = $req->fetch();

    ?>

</head>

<body>

<div class="container">
    <nav>
        <?php

        if (isset($_SESSION['userORadmin']) && $_SESSION['userORadmin'] == 0) {
            $logo = (isset($_SESSION['bloquer']) && $_SESSION['bloquer']) ? "#" : "index.php?page=Accueil";
        } elseif (isset($_SESSION['userORadmin']) && $_SESSION['userORadmin'] == 1) {
            $logo = "index.php?page=Admin";
        } else
            $logo = "index.php?page=Accueil";

        echo "<a href=\"$logo\" ><img id=\"logo\" src=\"" . $res['logo'] . "\" width=\"30%\" height=\"150\"></a>";


        ?>

        <?php
        if (isset($_SESSION['nom'])) {
            echo "<div class=\"authentification\"  id=\"login\" >
                                <a id=\"logout-btn\" href=\"Model/Inscription.php?log=out\" value=\"Déconnexion\">Déconnexion</a>
                                <a id=\"profil-btn\" href=\"index.php?page=Profil\" value=\"Profil\">Profil</a>
                      </div>";
        } else {
            echo "<div class=\"authentification\">
                          <form action=\"Model/Inscription.php\" id=\"login\" method=\"post\">
                              <input id=\"UserName\" type=\"text\" placeholder=\"User Name\"  name=\"username\" />
                              <input id=\"Password\" type=\"password\" placeholder=\"*********\" name='password' />
                              <input id=\"login-btn\" type=\"submit\" value=\"Connexion\" />
                              <div class=\"inscrption\">
                                  <a href=\"#\" id=\"show_login\" class=\"inscripLink\"><span>S'inscrire</span></a><br>
                                  <a href=\"#\" id=\"show_pwdRecover\" class=\"inscripLink\"><span>Mot de passe oublié ? </span></a>
                              </div>
                          </form>
                      </div>";
        }
        ?>


        <div id="dolphincontainer">
            <div id="dolphinnav">

                <?php


                if (isset($_GET['page']) AND
                    ($_GET['page'] == "Admin" OR
                        $_GET['page'] == "Template" OR
                        $_GET['page'] == "Contenu" OR
                        $_GET['page'] == "User" OR
                        $_GET['page'] == "Commentaire" OR
                        $_GET['page'] == "EditerContenu" OR
                        $_GET['page'] == "EditerContenuConference" OR
                        $_GET['page'] == "EditerContenuEvent" OR
                        $_GET['page'] == "EditerContenuJournal" OR
                        $_GET['page'] == "EditerContenuPublication")
                ) {
                    echo "
                            <ul>
<li><a href=\"index.php?Admin\" id=Admin\"><span>Accueil</span></a></li>
                                <li><a href=\"index.php?page=Template\" id=\"template\"><span>Gestion Template</span></a></li>
                                <li><a href=\"index.php?page=Contenu\" id=\"contenu\"><span>Gestion De Contenu</span></a></li>
                                <li><a href=\"index.php?page=User\" id=\"utilisateur\"><span>Gestion Utilisateur</span></a></li>
                                <li><a href=\"index.php?page=Commentaire\" id=\"commentaire\"><span>Gestion Commentaire</span></a></li>
                            </ul>
                        ";
                } else {

                    $couleur = $res['couleurMenu'];
                    echo "<script type=\"application/javascript\">$('#dolphinnav,#dolphincontainer').css('background-color','#'+'$couleur');</script>";

                    $accueil = (isset($_SESSION['bloquer']) && $_SESSION['bloquer']) ? "#" : "index.php?page=Accueil";
                    $publications = (isset($_SESSION['bloquer']) && $_SESSION['bloquer']) ? "#" : "index.php?page=Publications";
                    $chercheurs = (isset($_SESSION['bloquer']) && $_SESSION['bloquer']) ? "#" : "index.php?page=Chercheurs";
                    $conferences = (isset($_SESSION['bloquer']) && $_SESSION['bloquer']) ? "#" : "index.php?page=Conferences";
                    $journaux = (isset($_SESSION['bloquer']) && $_SESSION['bloquer']) ? "#" : "index.php?page=Journaux";


                    echo "
                            <ul>
                                <li style='width: 10%'><a href=\"$accueil\" id=\"accueil\"><span>Accueil</span></a></li>
                                <li style='width: 10%'><a href=\"$publications\" id=\"pub\"><span>Publications</span></a></li>
                                <li style='width: 10%'><a href=\"$chercheurs\" id=\"chercheuur\"><span>Chercheurs</span></a></li>
                                <li style='width: 10%'><a href=\"$conferences\" id=\"conf\"><span>Conférences</span></a></li>
                                <li style='width: 10%'><a href=\"$journaux\" id=\"Journaux\"><span>Journaux</span></a></li>
                            </ul>
                        ";
                }
                ?>

            </div>
        </div>
    </nav>
