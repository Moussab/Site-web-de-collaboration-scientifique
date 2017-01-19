<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 17/01/2017
 * Time: 17:43
 */
class EditerContenuEventVIEW
{

    private $model;


    public function __construct($model)
    {
        $this->model = $model;
    }


    public function __EditEvent($id, $new)
    {

        if ($id != -1) {
            $res = $this->model->__GetEvent($id);

            $contain = $res['contain'];
            $urlEvent = $res['urlEvent'];
            $imgUrl = $res['imgUrl'];
            $titre = $res['titre'];
        } else {
            $id = $titre = $contain = $imgUrl = $urlEvent = "";
        }


        echo "
            <div id=\"editNews\">
             
                <form method='post' action='Model/admin/utils.php' enctype=\"multipart/form-data\">
                    <input type='hidden' name='imgUrl' id='imgUrl' value=\"$imgUrl\">
                    <input type='hidden' name='new' id='new' value=\"$new\">
                    <input type='hidden' name='id' id='id' value=\"$id\">
                    <span>ID Evenement :" . $id . "</span>
                    <br><br><br>
                    <span>Titre : </span><br>
                    <input type='text' name='titre' id='titre' width='150px' value=\"$titre\">
                    <br><br>
                    <span>Contenu</span><br>
                    <textarea name='desc' id='desc' rows='15px' cols='60px'>$contain</textarea>
                    <br><br>
                    <span>Image : </span><br>
                    ";
        if ($new == -1) {
            echo "  <img src=\"$imgUrl\" id='img' width='200px' height='200px'>";
        } else
            echo "<input type='file' id='newImage' name='newImage'>";
        echo "
                    <br><br>
                    <span>Lien de l'evenement :</span><br>
                    <input type='url' id='url' value=\"$urlEvent\" name='url'>
                    <br><br>
                    <input type='submit' id='SubmitEditEvent' name='SubmitEditEvent' value='Envoyer'>
                    <input type='button' id='retourner' value='Retourner'>
                </form>   
             </div>
        ";
    }


}