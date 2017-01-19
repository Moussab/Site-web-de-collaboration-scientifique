<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 04/01/2017
 * Time: 03:49
 */
class NewsVIEW
{
    private $model;

    /**
     * News constructor.
     */

    public function __construct($model)
    {
        $this->model = $model;
        $couleur = $this->model->recupCouleur();
        echo "<script type=\"application/javascript\">document.body.style.backgroundColor = '#'+'$couleur';</script>";
    }


    public function search()
    {
        echo "
        <div class=\"recherche\">

            <form action=\"/search\" id=\"searchthis\" method=\"\">
                <input id=\"search\" name=\"q\" type=\"text\" placeholder=\"Rechercher\" />
                <input id=\"search-btn\" type=\"submit\" value=\"Rechercher\" />
            </form>
        </div>
        ";
    }

    public function pagination()
    {
        $nbPage = (int)$this->model->nbPage() - 9;
        $nbPage = (($nbPage % 10) == 0) ? $nbPage / 10 : $nbPage / 10 + 1;
        $nbPage = (int)$nbPage;
        $str = "<<";
        for ($i = 0; $i < $nbPage; $i++) {
            $tmp = "<a href=\"index.php?page=News&i=" . ($i + 1) . "\"\">" . ($i + 1) . "</a>";
            if ($i == 0) $str = $str . " " . $tmp;
            else $str = $str . " - " . $tmp;
        }

        echo "<div class=\"pagination\"><p>" . $str . " >></p></div>";
    }

    public function news()
    {

        $i = 1;
        if (!empty($_GET['i'])) {
            $i = $_GET['i'];
        }
        echo $this->model->getNews($i);
    }

    public function SignUp()
    {
        $this->model->popUpSigneUp();
    }
}