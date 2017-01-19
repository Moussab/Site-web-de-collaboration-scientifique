<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 14/01/2017
 * Time: 23:30
 */
class CommentaireMDL
{

    private $bdd;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }


    public function __tab()
    {


        if (!$this->bdd) {
            echo "Connection failed: ";
            header('Location: ../index.php');
        }

        $req = $this->bdd->prepare("SELECT * from commentairenews");
        $req->execute();


        echo "
            <table id='userTab'>
                <tr>
                    <th colspan=\"11\">Commentaire :</th>
                </tr>
                <tr>
                    <td id='idcomment' >
                        <p> id </p>
                    </td>
                    <td id='Commentaire'>
                        <p>Commentaire</p>
                    </td>
                    <td id='idUser' >
                        <p>idUser</p>
                    </td>
                    <td id='idNews' >
                        <p>IDnews</p>
                    </td>
                    <td id='valider' >
                        <p>Valider</p>
                    </td>
                </tr>";
        while ($res = $req->fetch()) {
            $id = $res['id'];
            $comment = $res['commentaire'];
            $idUser = $res['idUser'];
            $idNews = $res['idNews'];
            $validation = $res['valider'];

            if (!$validation) {
                echo "<tr>
                    <td id='idcomment' >
                       <p> $id </p>
                    </td>
                    <td id='Commentaire'>
                        <p>$comment</p>
                    </td>
                    <td id='idUser' >
                        <p>$idUser</p>
                    </td>
                    <td id='idNews' >
                        <p>$idNews</p>
                    </td>
                    <td id='validation'>";

                echo "<a href=\"Model/admin/utils.php?validerComment=true&id=$id\" >Valider</a>";


                echo "</td>
                    </tr>";
            }
        }
        echo " </table><br><br>";
    }

}