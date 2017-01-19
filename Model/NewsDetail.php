<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 07/01/2017
 * Time: 06:12
 */
class NewsDetailMDL
{

    private $id;
    private $db;

    /**
     * NewsDetailMDL constructor.
     */
    public function __construct($db)
    {
        $this->db = $db;
        $this->id = $_GET['id'];
    }


    public function getEvent()
    {
        $query_event = "SELECT t.* FROM event t";
        $result_event = $this->db->query($query_event);

        $result_event->setFetchMode(PDO::FETCH_ASSOC);

        $str = "";
        for ($i = 0; $i < 4; $i++) {
            $result_event->setFetchMode(PDO::FETCH_ASSOC);
            $result = $result_event->fetch();
            if ($result) {
                $tmp = "<div class=\"event\">
                    <h2><a href=\"index.php?page=EventDetails&id=" . $result['id'] . " \">" . utf8_encode($result['titre']) . ":</a></h2>
                    <p>" . utf8_encode(substr($result['contain'], 0, 70)) . "....</p>
                    <p class=\"date\">
                    <img src=\"assets/image/more.gif\" alt=\"\" /><a href=\"index.php?page=EventDetails&id=" . $result['id'] . " \">lire plus</a>
                    </p>
                    </div>";
                $str = $str . "" . $tmp;
            } else {
                $i--;
            }

        }
        echo "<div class=\"events_n\">" . $str . "</div>";
    }

    public function __getID()
    {
        return $this->id;
    }

    public function getNewDetails()
    {

        $query_new = "SELECT t.* FROM news t WHERE id = $this->id";
        $result_new = $this->db->query($query_new);

        $result_new->setFetchMode(PDO::FETCH_ASSOC);
        $result = $result_new->fetch();
        if ($result) {
            if ($result['imageUrl']) {
                $img = $result['imageUrl'];
            } else
                $img = "assets/image/img.jpg";
        }
        $tmp = "<div id='comment'>
            <div class=\"para\">
                <div class=\"imgNews\">
                    <img src=\"" . $img . "\" alt=\"\"   width=\"150px\" height=\"150px\" />
                </div>
                <div id=\"paragraphNewDetail\">
                    <h2><a href=\"" . $result['url'] . "\">" . utf8_encode($result['titre']) . " : </a></h2>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . utf8_encode($result['content']) . "</p>
            </div>
            <br><br>
            </div>
        
        
        ";


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


    public function __Commentaire($idNews)
    {
        $query = "SELECT t.* FROM commentairenews t WHERE idNews = $idNews";
        $result = $this->db->query($query);


        $result->setFetchMode(PDO::FETCH_ASSOC);

        return $result;
    }

    public function __user($id, $nom)
    {
        $query = "SELECT t.* FROM user t WHERE id= $id AND nom = $nom";
        $result = $this->db->query($query);


        $result->setFetchMode(PDO::FETCH_ASSOC);

        $res = $result->fetch();
        return $res[$nom];
    }

}




