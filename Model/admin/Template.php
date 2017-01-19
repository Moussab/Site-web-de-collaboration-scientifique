<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 14/01/2017
 * Time: 23:28
 */
class TemplateMDL
{

    /**
     * TemplateMDL constructor.
     */
    public function __construct()
    {
    }


    public function __tab()
    {


        echo "
            <div id=\"outils\">
                <h3>Gestion de template :</h3>
                <div id='divContainer'>
                    <div id='GestLogo'><br><br>
                        <a href='Model/admin/utils.php?supprLogo=true' id='suppLogo' >Supprimer le logo</a><br><br>
                        <span class='text-logo'>Modifier Logo : </span><br>
                        <form method='post' action='Model/admin/utils.php' enctype=\"multipart/form-data\">
                            <input type='file'  name='nLogo' accept=\"image/*\" value='Modifier le logo'><br><br>
                            <input type='submit' name='submit'  value='Confirmer' /><br>
                        </form><br>
                        <span class='text-logo'>Ajouter un logo : </span><br>
                        <form method='post' action='Model/admin/utils.php' enctype=\"multipart/form-data\">
                            <input type='file'  name='nLogo' accept=\"image/*\" value='Modifier le logo'><br><br>
                            <input type='submit' name='submit'  value='Confirmer' /><br>
                        </form>
                    </div>
                    
                    <div id='GestCouleur' class='flex-center'>
                    <div class='flex-center'><br><br><br><br>
                        <span class='text-logo'>Choisir La page que vous voulez changés ça couleur <br>du fond :</span><br>
                        <form method='post' action='Model/admin/utils.php'\">
                            <select id='pageColor' name='pageColor'>
                                <option value=\"Selectionner\" selected>Selectionner</option>
                                <option >Accueil</option>
                                <option >Chercheurs</option>
                                <option >Conferences</option>
                                <option >Journaux</option>
                                <option >News</option>
                                <option >Publications</option>
                            </select>
                        <br><br>
                        <span class='text-logo'>Choisir la couleur :</span><br>
                        <input class=\"jscolor\" name='jscolor' value=\"ab2567\"><br><br>
                        <input type='submit' name='submit1' id='submit1' value='Confirmer' ><br>
                        </form>
                        </div>
                    </div>
                    <div id='GestMenu' >
                        <div class='flex-center'><br><br><br><br>
                        <span class='text-logo'>Choisir La page que vous voulez changés <br>son menu :</span><br>
                          <form method='post' action='Model/admin/utils.php'\">
                            <select id='pageColor1' name='pageColor'>
                                <option value=\"Selectionner\" selected>Selectionner</option>
                                <option >Accueil</option>
                                <option >Chercheurs</option>
                                <option >Conferences</option>
                                <option >Journaux</option>
                                <option >Publications</option>
                            </select>
                         <br><br>
                            <span class='text-logo'>Choisir la couleur :</span><br>
                            <input class=\"jscolor\" name='jscolor' value=\"ab2567\"><br><br>
                            <input type='submit' name='submit2' id='submit2' value='Confirmer' ><br>
                            </form>
                         <br><br><br><br>
                        </div>
                    </div>
                </div>
            </div>
        ";
    }


}