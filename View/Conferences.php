<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 04/01/2017
 * Time: 17:26
 */
class ConferencesVIEW
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
        $couleur = $this->model->recupCouleur();
        echo "<script type=\"application/javascript\">document.body.style.backgroundColor = '#'+'$couleur';</script>";
    }


    public function findConference()
    {
        echo $this->model->getSection();
    }


    public function pagination()
    {
        $nbPage = (int)$this->model->nbPage("SELECT COUNT(*) total FROM conference");
        $nbPage = (($nbPage % 10) == 0) ? $nbPage / 10 : $nbPage / 10 + 1;
        $nbPage = (int)$nbPage;
        $str = "<<";
        for ($i = 0; $i < $nbPage; $i++) {
            $tmp = "<a href=\"index.php?page=Conferences&i=" . ($i + 1) . "\"\">" . ($i + 1) . "</a>";
            if ($i == 0) $str = $str . " " . $tmp;
            else $str = $str . " - " . $tmp;
        }

        echo "<div class=\"pagination\"><p>" . $str . " >></p></div>";
    }

    public function Conferences()
    {

        $i = 1;
        if (!empty($_GET['i'])) {
            $i = $_GET['i'];
        }
        echo $this->model->getConferences($i);
    }


    public function SignUp()
    {
        $this->model->popUpSigneUp();
    }
}