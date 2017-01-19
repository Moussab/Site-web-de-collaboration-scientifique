<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 17/01/2017
 * Time: 22:55
 */
class EditerContenuPublicationView
{

    private $model;


    public function __construct($model)
    {
        $this->model = $model;
    }


    public function __EditPublication($id, $new)
    {

        if ($id != -1) {
            $res = $this->model->__GetPublication($id);

            $titre = $res['titre'];
            $contain = $res['contain'];
            $urlImag = $res['urlImg'];
            $annee = $res['annee'];
            $domaineSearch = $res['domaineSearch'];
        } else {
            $id = $titre = $contain = $urlImag = $annee = $domaineSearch = "";
        }


        echo "
            <div id=\"editNews\">
             
                <form  method='post' action='Model/admin/utils.php' enctype=\"multipart/form-data\">
                    <input type='hidden' name='imgUrl' id='imgUrl' value=\"$urlImag\">
                    <input type='hidden' name='new' id='new' value=\"$new\">
                    <input type='hidden' name='id' id='id' value=\"$id\">
                    <span>ID Publication :" . $id . "</span>
                    <br><br><br>
                    <span>Titre : </span><br>
                    <input type='text' name='titre' id='titre' width='150px' value=\"$titre\">
                    <br><br>
                    <span>Contenu : </span><br>
                    <textarea name='contain' id='contain' rows='15px' cols='60px'>$contain</textarea>
                    <br><br>
                    <span>Année : </span><br>
                    <input type='text' name='annee' id='annee' width='150px' value=\"$annee\">
                    <br><br>
                    <span>Domaine de Recherche : </span><br>
                    <input type='text' name='domaineSearch' id='domaineSearch' width='150px' value=\"$domaineSearch\">
                    <br><br>
                    <span>Image : </span><br>
                    ";
        if ($new == -1) {
            echo "  <img src=\"$urlImag\" id='urlImg' width='200px' height='200px'>";
        } else
            echo "<input type='file' id='urlImg' name='imageNews'>";
        echo "
                    <br><br>
                   
                    <input type='submit' value='Envoyer' id='SubmitEditPublication' name='SubmitEditPublication'>
                    <input type='button' id='retourner' value='Retourner'>
                </form>   
             </div>
        ";
    }

}