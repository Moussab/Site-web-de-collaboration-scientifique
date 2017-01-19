<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 04/01/2017
 * Time: 03:48
 */
class AccueilVIEW
{
    private $model;

    /**
     * Accueil constructor.
     */
    public function __construct($model)
    {
        $this->model = $model;

        $couleur = $this->model->recupCouleur();
        echo "<script type=\"application/javascript\">document.body.style.backgroundColor = '#'+'$couleur';</script>";


    }


    public function slider()
    {
        echo $this->model->getSlider();
    }

    public function getSection()
    {
        echo "<br>
        <section>
            <article id=\"Presntation\">
                <h2>Presntation :</h2>
                <p>
                    Collaborer est une longue tradition dans la recherche. Une mise en commun des cultures,
                    des techniques, des compétences et des moyens qui permet à l’IRSN d’enrichir son approche
                    scientifique des risques. Elles constituent une composante importante de la recherche de
                    l’IRSN en stimulant une recherche efficace et inventive.<br>
                </p>
            </article>
            <br>
            <article id=\"objective\">
                <h2>Objective :</h2>
                <p>
                    Collaborer est une longue tradition dans la recherche. Une mise en commun des cultures,
                    des techniques, des compétences et des moyens qui permet à l’IRSN d’enrichir son approche
                    scientifique des risques. Elles constituent une composante importante de la recherche de
                    l’IRSN en stimulant une recherche efficace et inventive.<br><br>
                    Les moyens mis en oeuvre et les résultats obtenus, discutés et confrontés avec les pairs,
                    alimentent le dialogue avec la communauté scientifique et participent ainsi au développement
                    de réseaux. Pour les chercheurs de l'IRSN, ces collaborations sont de plus l’une des voies de
                    leur reconnaissance par la communauté scientifique. La complexité et l’amplitude des recherches
                    en sûreté nucléaire et en radioprotection allant grandissant, l’IRSN conçoit ses collaborations
                    de plus en plus au niveau européen.<br>
                <p>Pour plus d'informations veillez voir notre page <a href=\"Accueil.php?page=Objectif\">Objectif</a>, merci.</p>
                </p>
            </article>
        </section>";
    }


    public function news()
    {
        echo $this->model->getNews();

    }


    public function event()
    {
        echo $this->model->getEvent();
    }


    public function search()
    {
        echo "
        <div class=\"recherche_p\">

            <form action=\"/search\" id=\"searchthis\" method=\"\">
                <input id=\"search\" name=\"q\" type=\"text\" placeholder=\"Rechercher\" />
                <input id=\"search-btn\" type=\"submit\" value=\"Rechercher\" />
            </form>
        </div>
        ";
    }

    public function SignUp()
    {
        $this->model->popUpSigneUp();
    }


}