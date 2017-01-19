<script type="text/javascript" src="assets/js/responsiveslides.min.js"></script>
<script type="text/javascript" src="assets/js/myScript.js"></script>
<script type="text/javascript" src="assets/js/login_effect.js"></script>
<footer>
    <?php
    if (isset($_GET['page']) AND
        ($_GET['page'] == "Admin" OR
            $_GET['page'] == "Template" OR
            $_GET['page'] == "Contenu" OR
            $_GET['page'] == "User" OR
            $_GET['page'] == "Commentaire")
    ) {

        echo "
                            <ul>
                                <li><a href=\"index.php?page=Template\" id=\"template\"><span>Gestion Template</span></a></li>
                                <li><a href=\"index.php?page=Contenu\" id=\"contenu\"><span>Gestion De Contenu</span></a></li>
                                <li><a href=\"index.php?page=User\" id=\"utilisateur\"><span>Gestion Utilisateur</span></a></li>
                                <li><a href=\"index.php?page=Commentaire\" id=\"commentaire\"><span>Gestion Commentaire</span></a></li>
                            </ul>
                        ";
    } else {


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
</footer>
</div>

</body>
</html>
