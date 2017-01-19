<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 08/01/2017
 * Time: 00:37
 */
class ChercheurDetailMDL
{


    private $db;

    /**
     * ChercheurDetailMDL constructor.
     */
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getChercheurDetails()
    {

        if (!empty($_GET['id']) && isset($_GET['id'])) {
            $query = "SELECT t.* FROM user t WHERE id = " . $_GET['id'];
            $results = $this->db->query($query);
            $results->setFetchMode(PDO::FETCH_ASSOC);
            $result = $results->fetch();
        }

        $img = "assets/image/chercheur.jpg";
        $tmp = "
            <div class=\"ChercheurDetails\">
                <div class=\"ChercheurImg\">
                    <img src=\"" . ($result['imgUrl'] ? $result['imgUrl'] : $img) . "\" alt=\"\" />
                </div>
                <div id=\"ChercheurDetailsparagraphe\">
                    <span>Nom : " . ($result['nom'] ? $result['nom'] : '') . "</span><br><br>
                    <span>Prenom : " . ($result['prenom'] ? $result['prenom'] : '') . "</span><br><br>
                    <span>Date de naissance : " . ($result['bday'] ? $result['bday'] : '') . "</span><br><br>
                    <span>Sexe : " . ($result['sexe'] ? $result['sexe'] : '') . "</span><br><br>
                    <span>Pays : " . ($result['pays'] ? $result['pays'] : '') . "</span><br><br>";
        if (isset($_SESSION['nom'])) {
            $tmp .= "<span>Adresse : " . ($result['adr'] ? $result['adr'] : '') . "</span><br><br>";
        };
        $tmp .= "<span>Travail : " . ($result['Travail'] ? $result['Travail'] : '') . "</span><br><br>
                    <span>Grade : " . ($result['Grade'] ? $result['Grade'] : '') . "</span><br><br>
                    <span>Structure d’affiliation : " . ($result['affiliation'] ? $result['affiliation'] : '') . "</span><br><br>
                    <span>Thématiques de recherche : " . ($result['Themarecherche'] ? $result['Themarecherche'] : '') . "</span><br><br>";

        if (isset($_SESSION['nom'])) {
            $tmp .= "<span>Mon CV : <a href='" . ($result['cv'] ? $result['cv'] : '#') . "'>Cliquez ici !</a></span><br><br>
                        <span>E-mail : " . ($result['mail'] ? $result['mail'] : '') . "</span><br><br>
                        <span>Num Tel : " . ($result['NumTel'] ? $result['NumTel'] : '') . "</span><br><br>
                        <span>Site web : " . ($result['Siteweb'] ? $result['Siteweb'] : '') . "</span><br><br>";
        };

        $tmp .= "<div class='bioPub'>Bibliographie : <br>" . ($result['Bibliographie'] ? $result['Bibliographie'] : '') . "</div><br>
                    <div class='bioPub'>Publication : <br>" . ($result['Publication'] ? $result['Publication'] : '') . "</div><br>
                    </div><br><br></div><br><br>";

        echo $tmp;
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
}