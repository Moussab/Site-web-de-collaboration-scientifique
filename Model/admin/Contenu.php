<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 14/01/2017
 * Time: 23:28
 */
class ContenuMDL
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

        $req = $this->bdd->prepare("SELECT * from news");
        $req->execute();


        echo "
            <table>
                <tr>
                    <th colspan=\"2\">News :</th>
                    <th colspan=\"2\"><a href='index.php?page=EditerContenu&new=1' class='add-article' id='addNews'>Ajouter News</a></th>
                </tr>";
        while ($res = $req->fetch()) {
            echo "<tr>
                    <td id='id'>
                        <p>" . $res['id'] . "</p>
                    </td>
                    <td id='titre'>
                        <p>" . $res['titre'] . "</p>
                    </td>
                    <td id='edit'>
                        <a href=\"index.php?page=EditerContenu&id=" . $res['id'] . "\">Editer</a>
                    </td>
                    <td id='del'>
                        <a href=\"Model/admin/utils.php?supprContenu=true&table=news&id=" . $res['id'] . "\">Supprimer</a>
                    </td>
                </tr>";
        }
        echo " </table><br><br>";


        $req = $this->bdd->prepare("SELECT * from conference");
        $req->execute();


        echo "
            <table>
                <tr>
                    <th colspan=\"2\">Conference :</th>
                    <th colspan=\"2\"><a href='index.php?page=EditerContenuConference&new=1' class='add-article' id='addConference'>Ajouter Conference</a></th>
                </tr>";
        while ($res = $req->fetch()) {
            echo "<tr>
                    <td id='id'>
                        <p>" . $res['id'] . "</p>
                    </td>
                    <td id='titre'>
                        <p>" . $res['titre'] . "</p>
                    </td>
                    <td id='edit'>
                        <a href=\"index.php?page=EditerContenuConference&id=" . $res['id'] . "\">Editer</a>
                    </td>
                    <td id='del'>
                        <a href=\"Model/admin/utils.php?supprContenu=true&table=conference&id=" . $res['id'] . "\">Supprimer</a>
                    </td>
                </tr>";
        }
        echo " </table><br><br>";

        $req = $this->bdd->prepare("SELECT * from event");
        $req->execute();


        echo "
            <table>
                <tr>
                    <th colspan=\"2\">Evenement :</th>
                    <th colspan=\"2\"><a href='index.php?page=EditerContenuEvent&new=1' class='add-article' id='addEvenement'>Ajouter Evenement</a></th>
                </tr>";
        while ($res = $req->fetch()) {
            echo "<tr>
                    <td id='id'>
                        <p>" . $res['id'] . "</p>
                    </td>
                    <td id='titre'>
                        <p>" . $res['titre'] . "</p>
                    </td>
                    <td id='edit'>
                        <a href=\"index.php?page=EditerContenuEvent&id=" . $res['id'] . "\">Editer</a>
                    </td>
                    <td id='del'>
                        <a href=\"Model/admin/utils.php?supprContenu=true&table=event&id=" . $res['id'] . "\">Supprimer</a>
                    </td>
                </tr>";
        }
        echo " </table><br><br>";

        $req = $this->bdd->prepare("SELECT * from journal");
        $req->execute();


        echo "
            <table>
                <tr>
                    <th colspan=\"2\">Journaux :</th>
                    <th colspan=\"2\"><a href='index.php?page=EditerContenuJournal&new=1' class='add-article' id='addJournaux'>Ajouter un Journal</a></th>
                </tr>";
        while ($res = $req->fetch()) {
            echo "<tr>
                    <td id='id'>
                        <p>" . $res['id'] . "</p>
                    </td>
                    <td id='titre'>
                        <p>" . $res['titre'] . "</p>
                    </td>
                    <td id='edit'>
                        <a href=\"index.php?page=EditerContenuJournal&id=" . $res['id'] . "\">Editer</a>
                    </td>
                    <td id='del'>
                        <a href=\"Model/admin/utils.php?supprContenu=true&table=journal&id=" . $res['id'] . "\">Supprimer</a>
                    </td>
                </tr>";
        }
        echo " </table><br><br>";


        $req = $this->bdd->prepare("SELECT * from publication");
        $req->execute();


        echo "
            <table>
                <tr>
                    <th colspan=\"2\">Publication :</th>
                     <th colspan=\"2\"><a href='index.php?page=EditerContenuPublication&new=1' class='add-article' id='addPublication'>Ajouter Publication</a></th>
                </tr>";
        while ($res = $req->fetch()) {
            echo "<tr>
                    <td id='id'>
                        <p>" . $res['id'] . "</p>
                    </td>
                    <td id='titre'>
                        <p>" . $res['titre'] . "</p>
                    </td>
                    <td id='edit'>
                        <a href=\"index.php?page=EditerContenuPublication&id=" . $res['id'] . "\">Editer</a>
                    </td>
                    <td id='del'>
                        <a href=\"Model/admin/utils.php?supprContenu=true&table=publication&id=" . $res['id'] . "\">Supprimer</a>
                    </td>
                </tr>";
        }
        echo " </table><br><br>";

    }

}