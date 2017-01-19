<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 17/01/2017
 * Time: 08:21
 */
class EditerContenuConferenceVIEW
{

    private $model;


    public function __construct($model)
    {
        $this->model = $model;
    }


    public function __EditConference($id, $new)
    {

        if ($id != -1) {
            $res = $this->model->__GetConference($id);

            $titre = $res['titre'];
            $desc = $res['description'];
            $imgUrl = $res['imgUrl'];
            $UrlConf = $res['UrlConf'];
            $annee = $res['annee'];
            $dateSoumission = $res['dateSoumission'];
            $dateDeroulement = $res['dateDeroulement'];
        } else {
            $id = $titre = $desc = $imgUrl = $UrlConf = $annee = $dateSoumission = $dateDeroulement = "";
        }


        echo "
            <div id=\"editNews\">
             
                <form method='post' action='Model/admin/utils.php' enctype=\"multipart/form-data\">
                    <input type='hidden' name='imgUrl' id='imgUrl' value=\"$imgUrl\">
                    <input type='hidden' name='new' id='new' value=\"$new\">
                    <input type='hidden' name='id' id='id' value=\"$id\">
                    <span>ID Conference :" . $id . "</span>
                    <br><br><br>
                    <span>Titre : </span><br>
                    <input type='text' name='titre' id='titre' width='150px' value=\"$titre\">
                    <br><br>
                    <span>Contenu</span><br>
                    <textarea name='desc' id='desc' rows='15px' cols='60px'>$desc</textarea>
                    <br><br>
                    <span>Image : </span><br>
                    ";
        if ($new == -1) {
            echo "  <img src=\"$imgUrl\" id='img' width='200px' height='200px'>";
        } else
            echo "<input type='file' id='newImage' name='imageNews'>";
        echo "
                    <br><br>
                    <span>Lien de la conference :</span><br>
                    <input type='url' id='url' value=\"$UrlConf\" name='url'>
                    <br><br>
                    <span>Année : </span><br>
                    <input type='text' name='annee' id='annee' width='150px' value=\"$annee\">
                    <br><br>
                    <span>Date de Soumission : </span><br>
                    <input type='date' name='dateSoumission' id='dateSoumission' width='150px' value=\"$dateSoumission\">
                    <br><br>
                    <span>Date de Deroulement : </span><br>
                    <input type='date' name='dateDeroulement' id='dateDeroulement' width='150px' value=\"$dateDeroulement\">
                    <br><br>
                    <input type='submit' id='SubmitEditConference' name='SubmitEditConference' value='Envoyer'>
                    <input type='button' id='retourner' value='Retourner'>
                </form>   
             </div>
        ";
    }


}