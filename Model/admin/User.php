<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 14/01/2017
 * Time: 23:29
 */
class UserMDL
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

        $req = $this->bdd->prepare("SELECT * from user");
        $req->execute();


        echo "
            <table id='userTab'>
                <tr>
                    <th colspan=\"11\">Utilisateur :</th>
                </tr>
                <tr>
                    <td id='iduser' >
                        <p> id </p>
                    </td>
                    <td id='nom' 
                        <p>Nom</p>
                    </td>
                    <td id='prenom' >
                        <p>Prenom</p>
                    </td>
                    <td id='bday' >
                        <p>Date de Naissance</p>
                    </td>
                    <td id='sexe' >
                        <p>Sexe</p>
                    </td>
                    <td id='mail' >
                        <p>E-mail</p>
                    </td>
                    <td id='NumTel' >
                        <p>NumTel</p>
                    </td>
                    <td id='Siteweb' >
                        <p>Site web'</p>
                    </td>
                    <td id='inscrptionValider' >
                        <p>Validation</p>
                    </td>
                    <td id='Radier' >
                        <p>Radier</p>
                    </td>
                    <td id='block' >
                        <p>Bloquer</p>
                    </td>
                </tr>";
        while ($res = $req->fetch()) {
            $id = $res['id'];
            echo "<tr>
                        
                    <td id='iduser'>
                        <p>" . $res['id'] . "</p>
                    </td>
                    <td id='nom' >
                        <p>" . $res['nom'] . "</p>
                    </td>
                    <td id='prenom' >
                        <p>" . $res['prenom'] . "</p>
                    </td>
                    <td id='bday' >
                        <p>" . $res['bday'] . "</p>
                    </td>
                    <td id='sexe' >
                        <p>" . $res['sexe'] . "</p>
                    </td>
                    <td id='mail' >
                        <p>" . $res['mail'] . "</p>
                    </td>
                    <td id='NumTel' >
                        <p>" . $res['NumTel'] . "</p>
                    </td>
                    <td id='Siteweb' >
                        <p>" . $res['Siteweb'] . "</p>
                    </td>
                    <td id='inscrptionValider' >";

            if ($res['inscrptionValider']) {
                echo "<a href=\"Model/admin/utils.php?valider=true&id=$id\" >Valider</a>";
            } else {
                echo "<a href=\"Model/admin/utils.php?valider=false&id=$id\" >Supprimer</a>";
            }
            echo "</td>
                    <td id='edit' >";
            if (!$res['radier']) {
                echo "<a href=\"Model/admin/utils.php?radier=true&id=$id\" >Radier</a>";
            } else {
                echo "<a href=\"Model/admin/utils.php?radier=false&id=$id\" >Stop Radier</a>";
            }

            echo "</td>
                    <td id='del' >";

            if (!$res['bloquer']) {
                echo "<a href=\"Model/admin/utils.php?block=true&id=$id\">Bloquer</a>";
            } else {
                echo "<a href=\"Model/admin/utils.php?block=false&id=$id\">Débloquer</a>";
            }

            echo "</td>
                    </tr>";
        }
        echo " </table><br><br>";
    }

}

