<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 04/01/2017
 * Time: 17:25
 */
class ChercheursMDL
{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getSection()
    {

        echo "<br><div id='pubAnnu'>
        <section>
            <article id=\"findChercheur\">
                <form>
                    <h2>Rechercher par :</h2>
                    <h4>Continents : </h4>
                            <select name=\"continents\" id='continents' >
                                <option value=\"Selectionner\" selected>Selectionner</option>
                                " . $this->__Continents() . "
                            </select><br>
                       
                    <h4>Pays : </h4>
                            <select name=\"pays\" id='pays' >
                                <option value=\"Selectionner\" selected>Selectionner</option>
                                " . $this->__PaysChercheur() . "
                            </select><br>
                            
                    <h4>Domaine de recherche : </h4>
                            <select name=\"domainerecherche\" id='domainerecherche' >
                                <option value=\"Selectionner\" selected>Selectionner</option>
                                " . $this->__DOMRecherche() . "
                            </select><br>
                            
                    <button  id = \"doSearch\" >Rechercher</button>
                </form>
            </article>
        </section>";
    }

    private function __Continents()
    {

        $str = "";
        $query = "SELECT DISTINCT t.continant FROM user LEFT JOIN (
          SELECT pays.pays, continant.continant
          FROM pays LEFT JOIN continant ON pays.idContinant = continant.id) as t
          ON t.pays = user.pays ORDER BY t.continant ASC";

        $results = $this->db->query($query);


        $results->setFetchMode(PDO::FETCH_ASSOC);

        while ($result = $results->fetch()) {
            $tmp = "<option>" . utf8_decode($result["continant"]) . "</option>";
            $str = $str . $tmp;
        }
        return $str;
    }

    private function __PaysChercheur()
    {

        $str = "";

        $query = "SELECT DISTINCT t.pays FROM user LEFT JOIN (
          SELECT pays.pays, continant.continant
          FROM pays LEFT JOIN continant ON pays.idContinant = continant.id) as t
          ON t.pays = user.pays ORDER BY t.pays ASC";
        $results = $this->db->query($query);
        $results->setFetchMode(PDO::FETCH_ASSOC);

        while ($result = $results->fetch()) {
            $tmp = "<option>" . utf8_decode($result["pays"]) . "</option>";
            $str = $str . $tmp;
        }
        return $str;
    }

    private function __DOMRecherche()
    {

        $str = "";
        $query = "SELECT DISTINCT user.Themarecherche FROM user LEFT JOIN (
          SELECT pays.pays, continant.continant
          FROM pays LEFT JOIN continant ON pays.idContinant = continant.id) as t
          ON t.pays = user.pays ORDER BY user.Themarecherche ASC";
        $results = $this->db->query($query);


        $results->setFetchMode(PDO::FETCH_ASSOC);

        while ($result = $results->fetch()) {
            $tmp = "<option>" . utf8_decode($result["Themarecherche"]) . "</option>";
            $str = $str . $tmp;
        }
        return $str;
    }

    public function getChercheurs($j)
    {


        if (!isset($_GET['continent']) && !isset($_GET['pays']) && !isset($_GET['domaine'])) {
            $this->__SimpleDisplay($j);
        } else {
            $this->__CustDisplay();
        }

    }

    private function __SimpleDisplay($j)
    {

        $str = "";
        $tab = array();
        $cpt = 0;

        $query = "SELECT * FROM user ORDER BY nom ASC";
        $results = $this->db->query($query);
        $results->setFetchMode(PDO::FETCH_ASSOC);

        while ($result = $results->fetch()) {
            array_push($tab, $result);
            $cpt++;
        }

        for ($i = ($j - 1) * 10; $i < $cpt && $i < $j * 10; $i++) {
            if (isset($_SESSION['id']))
                $id = $_SESSION['id'];
            else
                $id = -1;
            if ($id != $tab[$i]['id']) {

                if ($tab[$i]['imgUrl']) {
                    $img = $tab[$i]['imgUrl'];
                } else
                    $img = "assets/image/img.jpg";

                $tmp = "<div class=\"the-Chercheur\">
                    <h2><a href=\"index.php?page=ChercheurDetail&id=" . $tab[$i]['id'] . " \">" . $tab[$i]['nom'] . " " . $tab[$i]['prenom'] . " :</a></h2>
                    <div class=\"img\">
                    <img src=\"" . $img . "\" alt=\"\" width=\"150px\" height=\"150px\"/>
                    </div>
                    <p>" . utf8_encode($tab[$i]['Bibliographie']) . "</p>
                   </div>
                <br />";
                $str = $str . "" . $tmp;
            }
        }

        echo "<br><div class=\"all-Chercheur\">" . $str . "</div></div><br>";

    }

    private function __CustDisplay()
    {

        $str = "";
        $tab = array();
        $cpt = 0;

        $query = "SELECT * FROM user 
                  LEFT JOIN ( SELECT pays.pays, continant.continant FROM pays 
                  LEFT JOIN continant ON pays.idContinant = continant.id) as t 
                  ON t.pays = user.pays";
        $results = $this->db->query($query);
        $results->setFetchMode(PDO::FETCH_ASSOC);

        while ($result = $results->fetch()) {
            if (isset($_GET['continent']) && isset($_GET['pays']) && isset($_GET['domaine']) &&
                $_GET['continent'] == $result['continant'] && $_GET['domaine'] == $result['Themarecherche']
                && $_GET['pays'] == $result['pays']
            ) {
                array_push($tab, $result);
                $cpt++;
            } elseif (!empty($_GET['continent']) && empty($_GET['pays']) && empty($_GET['domaine'])
                && $_GET['continent'] == $result['continant']
            ) {
                array_push($tab, $result);
                $cpt++;
            } elseif (empty($_GET['continent']) && !empty($_GET['pays']) && empty($_GET['domaine'])
                && $_GET['pays'] == $result['pays']
            ) {
                array_push($tab, $result);
                $cpt++;
            } elseif (empty($_GET['continent']) && empty($_GET['pays']) && !empty($_GET['domaine'])
                && $_GET['domaine'] == $result['Themarecherche']
            ) {
                array_push($tab, $result);
                $cpt++;
            } elseif (!empty($_GET['continent']) && !empty($_GET['pays']) && empty($_GET['domaine'])
                && $_GET['continent'] == $result['continant'] && $_GET['pays'] == $result['pays']
            ) {
                array_push($tab, $result);
                $cpt++;
            } elseif (!empty($_GET['continent']) && empty($_GET['pays']) && !empty($_GET['domaine'])
                && $_GET['continent'] == $result['continant'] && $_GET['domaine'] == $result['Themarecherche']
            ) {
                array_push($tab, $result);
                $cpt++;
            } elseif (empty($_GET['continent']) && !empty($_GET['pays']) && !empty($_GET['domaine'])
                && $_GET['pays'] == $result['pays'] && $_GET['domaine'] == $result['Themarecherche']
            ) {
                array_push($tab, $result);
                $cpt++;
            } elseif (!empty($_GET['continent']) && !empty($_GET['pays']) && !empty($_GET['domaine'])
                && $_GET['continent'] == $result['continant'] && $_GET['pays'] == $result['pays']
                && $_GET['domaine'] == $result['Themarecherche']
            ) {
                array_push($tab, $result);
                $cpt++;
            }
        }

        for ($i = 0; $i < $cpt; $i++) {
            if ($tab[$i]['imgUrl']) {
                $img = $tab[$i]['imgUrl'];
            } else
                $img = "assets/image/img.jpg";

            $tmp = "<div class=\"the-Chercheur\">
                    <h2><a href=\"index.php?page=ChercheurDetail&id=" . $tab[$i]['id'] . " \">" . $tab[$i]['nom'] . " " . $tab[$i]['prenom'] . " :</a></h2>
                    <div class=\"img\">
                    <img src=\"" . $img . "\" alt=\"\" width=\"150px\" height=\"150px\"/>
                    </div>
                    <p>" . utf8_encode($tab[$i]['Bibliographie']) . "</p>
                   </div>
                <br />";
            $str = $str . "" . $tmp;
        }

        if ($cpt == 0) {
            $tmp = "<div class=\"the-Chercheur\">
                    <h3><a href=\"#\">Resultat de votre Recherche :</a></h3>
                    <div class=\"img\">
                    <img src=\"\" alt=\"\" width=\"150px\" height=\"150px\"/>
                    </div>
                    <p>On s'excuse de ne pas trouver une publication selon vos choix.</p>
                    </div>
                    <br />";
            $str = $str . "" . $tmp;
        }

        echo "<br><div class=\"all-Chercheur\">" . $str . "</div></div><br>";

    }

    public function popUpSigneUp()
    {

        $tmp = "
            <center>
                 <div id = \"loginform\">
                   <input  type = \"image\" id = \"close_login\" src = \"assets/image/close.png\">
                  <form method = \"post\" action = \"Model/Inscription.php\">
                   <p>Inscrivez vous !!</p>
                   <div class=\"left-side-inscription\">
                        <input type = \"text\" id = \"name\" placeholder = \"Votre Nom\" name = \"uname\" required><br>
                        <input type = \"text\" id = \"prenom\" placeholder = \"Votre Prénom\" name = \"uprenom\" required><br>
                        <div class='info'>
                            <span>Votre date de naissance : </span><input id='bday' type=\"date\" name=\"bday\" required><br>
                        </div>
                        <div class='info'>
                            <span>Votre Sexe : </span>
                            <select name=\"sexe\" id='sexe'  name='sexe' required>
                                <option value=\"male\" selected>Selectionner</option>
                                <option value=\"male\" >Male</option>
                                <option value=\"femele\">femele</option>
                            </select><br>
                        </div>
                        <input type = \"text\" id = \"email\" placeholder = \"Votre Email\" name = \"uemail\" required><br>
                        <input type = \"password\" id = \"pwd\" name = \"upass\" placeholder = \"********\" required><br>
                        <input type = \"tel\" id = \"tel\" placeholder = \"(+213)555 49 76 87\" name = \"uTel\" required ><br>
                        <input type = \"url\" id = \"usiteweb\" placeholder = \"Votre Site Web\" name = \"usiteweb\" required><br>
                        <input type = \"text\" id = \"job\" placeholder = \"Votre Travail\" name = \"ujob\" required><br>
                        <div class='info uPays' >
                                 <span>Votre Pays : </span>
                                 <select id = \"upays\"  name = \"uPays\" required>
                                      <option selected>Selectionner</option>
                                      " . $this->__Pays() . "                                      
                                 </select><br>
                            </div>
                        <input type = \"text\" id = \"adr\" placeholder = \"Votre Adresse\" name = \"adr\" required><br>
                        <div class='info' >
                            <span>Votre photo : </span><input type = \"file\" id = \"picture\" name = \"uIMG\" accept=\"image/*\" required><br>                            
                        </div>
                        </div><br>
                        <div class=\"right-side-inscription\">
                            <input type = \"text\" id = \"grade\" placeholder = \"Votre Grade\" name = \"grade\" required><br>
                            <input type = \"text\" id = \"affiliation\" placeholder = \"Votre Structure d'affiliation\" name = \"affiliation\" required><br>
                            <div class='info infos' >
                                 <span>Thématiques de recherche : </span>
                                 <select id='thematique' name=\"thématiquesrecherche\" required>
                                      <option selected>Selectionner</option>
                                      <option >Innovations agroécologiques appliquées à l’agriculture</option>
                                      <option >Les réseaux alimentaires locaux et systèmes alimentaires durables</option>
                                 </select><br>
                            </div>
                            <div class='info infos' >
                                 <span>Votre CV : </span><input type = \"file\" id = \"pdfCV\" name = \"cvPDF\" accept=\"application/pdf\" required><br>                            
                            </div>
                            <textarea id=\"Bibliographie\" name=\"Bibliographie\" rows=\"7\" cols=\"30\" required>Votre Bibliographie</textarea><br>
                            <textarea id=\"publication\" name=\"publication\" rows=\"7\" cols=\"30\" required>Votre publication</textarea><br>
                            <input type = \"submit\" id = \"dologin\" value = \"Login\">
                       </div><br>
                      </form>
                 </div>
            </center>
        ";

        echo $tmp;
    }

    private function __Pays()
    {

        $str = "";
        $query_pays = "SELECT t.* FROM pays t ORDER BY pays ASC, id DESC";
        $result_pays = $this->db->query($query_pays);


        $result_pays->setFetchMode(PDO::FETCH_ASSOC);

        while ($result = $result_pays->fetch()) {
            $tmp = "<option>" . utf8_decode($result["pays"]) . "</option>";
            $str = $str . $tmp;
        }
        return $str;
    }

    public function nbPage($query)
    {
        $query_nbPage = $query;
        $result_nbPage = $this->db->query($query_nbPage);
        $result_nbPage->setFetchMode(PDO::FETCH_ASSOC);
        $result = $result_nbPage->fetch();
        return $result['total'];
    }

    public function recupCouleur()
    {
        $query = "SELECT t.* FROM template t";
        $result = $this->db->query($query);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $result->setFetchMode(PDO::FETCH_ASSOC);
        $res = $result->fetch();

        return $res['couleurChercheur'];
    }
}