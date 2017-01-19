<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 17/01/2017
 * Time: 01:07
 */
class IssueView
{

    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }


    public function __bloquer()
    {
        echo "
            
            <div class=\"issue_b\">
                <span id=\"alert_b\"> BLOQUER :</span>
                <div id='msgBloquer_b'>
                    Vous êtes été bloqué a cause de quelque réclamation faite par nos membre.<br><br>
                    Vous serez débloqués prochainement
                </div>
                
                <a id=\"logout-btn\" href=\"Model/Inscription.php?log=out\" value=\"Déconnexion\">Déconnexion</a>

            </div>
        
        ";
    }


    public function __radier()
    {
        echo "
            
            <div class=\"issue\">
                <span id='alert'> RADIER :</span>
                <div id='msgBloquer'>
                    Vous êtes été radié a cause de quelque commentaire faite par vous.<br><br>
                    Vous serez libérer prochainement.
                </div>
                <footer>
                    <a id=\"logout-btn\" href=\"Model/Inscription.php?log=out\" value=\"Déconnexion\">Déconnexion</a>
                </footer>
            </div>
        
        ";
    }

    public function __validation()
    {
        echo "
            
            <div class=\"issue\">
                <span id='alert_v'> Inscription en cours de traitement :</span>
                <div id='msgBloquer_v'>
                    On vous remerviez d'avoir inscriver sur notre site, votre demande est en cours de traitement<br><br>
                    vous serez notifier le plus rapidement possible, merci
                </div>
                <footer>
                    <a id=\"logout-btn_v\" href=\"Model/Inscription.php?log=out\" value=\"Déconnexion\">Déconnexion</a>
                </footer>
            </div>
        
        ";
    }
}