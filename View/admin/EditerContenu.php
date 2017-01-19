<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 15/01/2017
 * Time: 11:28
 */
class EditerContenuVIEW
{

    private $model;


    public function __construct($model)
    {
        $this->model = $model;
    }


    public function __EditNews($id, $new)
    {

        if ($id != -1) {
            $res = $this->model->__GetNews($id);

            $titre = $res['titre'];
            $content = $res['content'];
            $imageUrl = $res['imageUrl'];
            $url = $res['url'];
            $id = $res['id'];
        } else {
            $titre = $content = $imageUrl = $url = $id = "";
        }


        echo "
            <div id=\"editNews\">
             
                <form method='post' action='Model/admin/utils.php' enctype=\"multipart/form-data\">
                    <input type='hidden' name='new' id='new' value=\"$new\">
                    <input type='hidden' name='id' id='id' value=\"$id\">
                    <span>ID News :" . $id . "</span>
                    <br><br><br>
                    <span>Titre : </span><br>
                    <input type='text' name='titre' id='titre' width='150px' value=\"$titre\">
                    <br><br>
                    <span>Contenu</span><br>
                    <textarea name='content' id='content' rows='15px' cols='60px'>$content</textarea>
                    <br><br>";

        if ($new == -1) {
            echo "  <span>Image : </span><br>
                                <img src=\"$imageUrl\" id='img' width='200px'  name='img' height='200px'><br>
                                <span>Choisir Une autre Image :</span> 
                                <input type='file' id='img' accept=\"image/*\" name='img'>";
        } else
            echo "<span>Choisir Une Image :</span> 
                                <input type='file' id='img' accept=\"image/*\" name='img'>";
        echo "
                    <br><br>
                    <span>Lien Original :</span><br>
                    <input type='url' id='url' value=\"$url\" name='url'>
                    <br><br>
                    <input type='submit' id='SubmitEditNews' name='SubmitEditNews' value='Envoyer'>
                    <input type='button' id='retourner' value='Retourner'>
                </form>   
             </div>
        ";
    }


}