<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 17/01/2017
 * Time: 21:13
 */
class EditerContenuJournalVIEW
{

    private $model;


    public function __construct($model)
    {
        $this->model = $model;
    }


    public function __EditJournal($id, $new)
    {

        if ($id != -1) {
            $res = $this->model->__GetJournal($id);

            $titre = $res['titre'];
            $ISBN = $res['ISBN'];
            $editeur = $res['editeur'];
            $impactFactor = $res['impactFactor'];
            $theme = $res['theme'];
            $urImag = $res['urlImg'];
            $siteWeb = $res['siteWeb'];
        } else {
            $id = $titre = $ISBN = $editeur = $impactFactor = $theme = $urImag = $siteWeb = "";
        }


        echo "
            <div id=\"editNews\">
             
                <form method='post' action='Model/admin/utils.php' enctype=\"multipart/form-data\">
                    <input type='hidden' name='imgUrl' id='imgUrl' value=\"$urImag\">
                    <input type='hidden' name='new' id='new' value=\"$new\">
                    <input type='hidden' name='id' id='id' value=\"$id\">
                    <span>ID Journal :" . $id . "</span>
                    <br><br><br>
                    <span>Titre : </span><br>
                    <input type='text' name='titre' id='titre' width='150px' value=\"$titre\">
                    <br><br>
                    <span>ISBN : </span><br>
                    <input type='text' name='ISBN' id='ISBN' width='150px' value=\"$ISBN\">
                    <br><br>
                    <span>Editeur : </span><br>
                    <input type='text' name='Editeur' id='Editeur' width='150px' value=\"$editeur\">
                    <br><br>
                    <span>Impact Factor : </span><br>
                    <input type='text' name='impactFactor' id='impactFactor' width='150px' value=\"$impactFactor\">
                    <br><br>
                    <span>Theme : </span><br>
                    <input type='text' name='theme' id='theme' width='150px' value=\"$theme\">
                    <br><br>
                    <span>Image : </span><br>
                    ";
        if ($new == -1) {
            echo "  <img src=\"$urImag\" id='urlImg' width='200px' height='200px'>";
        } else
            echo "<input type='file' id='urlImg' name='imageNews'>";
        echo "
                    <br><br>
                    <span>Lien du journal :</span><br>
                    <input type='url' id='siteWeb' value=\"$siteWeb\" name='siteWeb'>
                    <br><br>
                    <input type='submit' id='SubmitEditJournal' name='SubmitEditJournal' value='Envoyer'>
                    <input type='button' id='retourner' value='Retourner'>
                </form>   
             </div>
        ";
    }


}