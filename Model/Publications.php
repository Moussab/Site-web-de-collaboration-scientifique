<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 04/01/2017
 * Time: 03:46
 */
class PublicationsMDL
{

    private $db;

    /**
     * Publications constructor.
     */
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getSection()
    {

        echo "<br><div id='pubAnnu'>
        <section>
            <article id=\"findPublication\">
                <form>
                    <input type=\"hidden\" name=\"page\" value=\"Publications\">
                    <h2>Rechercher par :</h2>
                    <h4>Année de publiction : </h4>
                            <select name=\"anneePub\" id='anneePub' >
                                <option value=\"Selectionner\" selected>Selectionner</option>
                                " . $this->__Years() . "
                            </select><br>
                       
                    <h4>Domaine de recherche : </h4>
                            <select name=\"searchDomine\" id='searchDomine' >
                                <option value=\"Selectionner\" selected>Selectionner</option>
                                " . $this->__DOMRecherche() . "
                            </select><br>
                            
                    <button id = \"doSearchPub\" value = \"Rechercher\">Rechercher</button>
                </form>
            </article>
        </section>";
    }

    private function __Years()
    {

        $str = "";
        $query = "SELECT DISTINCT t.annee FROM publication t";
        $results = $this->db->query($query);
        $results->setFetchMode(PDO::FETCH_ASSOC);


        while ($result = $results->fetch()) {
            $tmp = "<option>" . utf8_decode($result["annee"]) . "</option>";
            $str = $str . $tmp;
        }
        return $str;
    }

    private function __DOMRecherche()
    {

        $str = "";
        $query = "SELECT DISTINCT t.domaineSearch FROM publication t";
        $results = $this->db->query($query);
        $results->setFetchMode(PDO::FETCH_ASSOC);

        while ($result = $results->fetch()) {
            $tmp = "<option>" . utf8_decode($result["domaineSearch"]) . "</option>";
            $str = $str . $tmp;
        }
        return $str;
    }

    public function getPublications($j)
    {
        if (!isset($_GET['annee']) && !isset($_GET['domaine'])) {
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

        $query_pub = "SELECT t.* FROM publication t 
                      WHERE (id >= 1*$j) AND (id < 10*$j) 
                      ORDER BY t.annee AND t.domaineSearch";
        $result_pub = $this->db->query($query_pub);
        $result_pub->setFetchMode(PDO::FETCH_ASSOC);

        while ($result = $result_pub->fetch()) {
            array_push($tab, $result);
            $cpt++;
        }

        for ($i = 0; $i < $cpt; $i++) {
            if ($tab[$i]['urlImg']) {
                $img = $tab[$i]['urlImg'];
            } else
                $img = "assets/image/img.jpg";
            $tmp = "<div class=\"the-Pub\">
                    <h3><a href=\"#\">" . $tab[$i]['titre'] . " :</a></h3>
                    <div class=\"img\">
                    <img src=\"" . $img . "\" alt=\"\" width=\"150px\" height=\"150px\"/>
                    </div>
                    <p>" . utf8_encode($tab[$i]['contain']) . "</p>
                    </div>
                    <br />";
            $str = $str . "" . $tmp;
        }

        echo "<br><div id=\"publication\" class=\"all-Chercheur\">" . $str . "</div></div><br>";

    }

    private function __CustDisplay()
    {

        $str = "";
        $tab = array();
        $cpt = 0;

        $query_pub = "SELECT t.* FROM publication t";
        $result_pub = $this->db->query($query_pub);
        $result_pub->setFetchMode(PDO::FETCH_ASSOC);

        while ($result = $result_pub->fetch()) {
            if (isset($_GET['annee']) && isset($_GET['domaine']) &&
                $_GET['annee'] == $result['annee'] && $_GET['domaine'] == $result['domaineSearch']
            ) {
                array_push($tab, $result);
                $cpt++;
            } elseif (!empty($_GET['annee']) && empty($_GET['domaine'])
                && $_GET['annee'] == $result['annee']
            ) {
                array_push($tab, $result);
                $cpt++;
            } elseif (!empty($_GET['domaine']) && empty($_GET['annee']) &&
                $_GET['domaine'] == $result['domaineSearch']
            ) {
                array_push($tab, $result);
                $cpt++;
            }
        }

        for ($i = 0; $i < $cpt; $i++) {
            if ($tab[$i]['urlImg']) {
                $img = $tab[$i]['urlImg'];
            } else
                $img = "assets/image/img.jpg";
            $tmp = "<div class=\"the-Pub\">
                    <h3><a href=\"#\">" . $tab[$i]['titre'] . " :</a></h3>
                    <div class=\"img\">
                    <img src=\"" . $img . "\" alt=\"\" width=\"150px\" height=\"150px\"/>
                    </div>
                    <p>" . utf8_encode($tab[$i]['contain']) . "</p>
                    </div>
                    <br />";
            $str = $str . "" . $tmp;
        }


        if ($cpt == 0) {
            $tmp = "<div class=\"the-Pub\">
                    <h3><a href=\"#\">Resultat de votre Recherche :</a></h3>
                    <div class=\"img\">
                    <img src=\"\" alt=\"\" width=\"150px\" height=\"150px\"/>
                    </div>
                    <p>On s'excuse de ne pas trouver une publication selon vos choix.</p>
                    </div>
                    <br />";
            $str = $str . "" . $tmp;
        }

        echo "<br><div id=\"publication\" class=\"all-Chercheur\">" . $str . "</div></div><br>";

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
            $tmp = "<option>" . $result["pays"] . "</option>";
            $str = $str . $tmp;
        }
        return $str;
    }

    public function nbPage()
    {
        $query_nbPage = "SELECT COUNT(*) total FROM publication";
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

        return $res['couleurPublication'];
    }
}