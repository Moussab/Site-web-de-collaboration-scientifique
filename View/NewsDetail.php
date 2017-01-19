<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 07/01/2017
 * Time: 06:11
 */
class NewsDetailView
{

    private $model;

    /**
     * News constructor.
     */

    public function __construct($model)
    {
        $this->model = $model;
    }


    public function event()
    {
        echo $this->model->getEvent();
    }


    public function search()
    {
        echo "<br><div class=\"containerNews\">
        <div class=\"recherche_p\">

            <form action=\"/search\" id=\"searchthis\" method=\"\">
                <input id=\"search\" name=\"q\" type=\"text\" placeholder=\"Rechercher\" />
                <input id=\"search-btn\" type=\"submit\" value=\"Rechercher\" />
            </form>
        </div>
        ";
    }


    public function newDetail()
    {
        echo $this->model->getNewDetails();
    }

    public function SignUp()
    {
        $this->model->popUpSigneUp();
    }


    public function __Commentaire()
    {


        echo "
                <div id='sectionCommentaire'>";
        if (isset($_SESSION['nom'])) {
            echo "<form method=\"post\" action=\"Model/GestionCommentaire.php\">
                        <input type='hidden' value=\"" . $_SESSION['id'] . "\" name='iduser'>
                        <input type='hidden' value=\"" . $this->model->__getID() . "\" name='idnews'>
                        <p>Pseudo : <input type=\"text\" name=\"pseudo\" value=\"" . $_SESSION['nom'] . "\" /></p>
                        <p>Votre commentaire :<br />
                            <textarea name=\"commentaire\" rows=\"5\" cols=\"70\"></textarea>
                        </p>
                        <input type='submit' name='submitComment' valeur ='commenter'>
                    </form><br><br><hr width='100%'>";
        }

        $reselts = $this->model->__Commentaire($this->model->__getID());

        echo "<br>
                    <div id='commentaireShow'>";
        $cpt = 0;

        while ($res = $reselts->fetch()) {
            $cpt++;
            if ($res['valider']) {
                $user = $this->model->__user($res['idUser'], 'nom');
                echo "
                        <div id='oneComment'>
                            <span>" . $user . " : </span>
                            <p>" . $res['commentaire'] . "</p>
                        </div>
                    ";
            }
        }

        if ($cpt == 0)
            echo "<p id='noComment'>Aucun commentaire pour l'instant.</p>";

        echo
        "  </div></div></div>
            ";

    }


}