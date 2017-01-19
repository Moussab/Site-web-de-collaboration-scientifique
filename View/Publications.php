<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 04/01/2017
 * Time: 03:52
 */
class PublicationsVIEW
{

    /**
     * PublicationsVIEW constructor.
     */
    private $model;

    public function __construct($model)
    {
        $this->model = $model;

        $couleur = $this->model->recupCouleur();
        echo "<script type=\"application/javascript\">document.body.style.backgroundColor = '#'+'$couleur';</script>";
    }

    public function findPublication()
    {
        echo $this->model->getSection();
    }


    public function pagination()
    {
        $nbPage = (int)$this->model->nbPage();
        $nbPage = (($nbPage % 10) == 0) ? $nbPage / 10 : $nbPage / 10 + 1;
        $nbPage = (int)$nbPage;
        $str = "<<";
        for ($i = 0; $i < $nbPage; $i++) {
            $tmp = "<a href=\"index.php?page=Publications&i=" . ($i + 1) . "\"\">" . ($i + 1) . "</a>";
            if ($i == 0) $str = $str . " " . $tmp;
            else $str = $str . " - " . $tmp;
        }

        echo "<div class=\"pagination\"><p>" . $str . " >></p></div>";
    }

    public function Publications()
    {

        $i = 1;
        if (!empty($_GET['i'])) {
            $i = $_GET['i'];
        }
        echo $this->model->getPublications($i);
    }

    public function SignUp()
    {
        $this->model->popUpSigneUp();
    }

}