<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 04/01/2017
 * Time: 03:48
 */
class AccueilMDL
{


    private $db;
    private $cpt = 0;

    /**
     * Accueil constructor.
     */
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getSlider()
    {

        $query_news = "SELECT t.* FROM news t";
        $result_news = $this->db->query($query_news);

        $result_news->setFetchMode(PDO::FETCH_ASSOC);

        $str = "";
        for ($i = 0; $i < 4; $i++) {
            $result = $result_news->fetch();
            $this->cpt++;
            if ($result) {
                $tmp = "<li>
                    <a href=\"" . $result['url'] . "\">
                        <img src=\"" . $result['imageUrl'] . "\" alt=\"\" width=\"100%\" height=\"300\" />
                    </a>
                    <div class=\"imgNewsDesc\">
                        <h3>" . utf8_encode($result['titre']) . "</h3>
                        <p>" . utf8_encode(substr($result['content'], 0, 40)) . "....</p>
                        <a class=\"readbtn\" href=\"" . $result['url'] . " \">PLUS</a>
                    </div>
                </li>";
                $str = $str . "" . $tmp;
            } else {
                $i--;
            }

        }

        echo "<div class=\"slideshow\"><ul>" . $str . "</ul></div>";
    }


    public function getNews()
    {

        $query_news = "SELECT t.* FROM news t";
        $result_news = $this->db->query($query_news);

        $result_news->setFetchMode(PDO::FETCH_ASSOC);
        for ($j = 0; $j < $this->cpt; $j++)
            $result = $result_news->fetch();


        $str = "";
        for ($i = 0; $i < 5; $i++) {
            $result = $result_news->fetch();
            if ($result) {
                if ($result['imageUrl']) {
                    $img = $result['imageUrl'];
                } else
                    $img = "assets/image/img.jpg";
                $tmp = "<div class=\"new\">
                            <h3><a href=\"index.php?page=NewsDetail&id=" . $result['id'] . " \">" . utf8_encode($result['titre']) . " :</a></h3>
                            <div class=\"img\">
                            <img src=\"" . $img . "\" alt=\"\"   width=\"150px\" height=\"150px\"/>
                            </div>
                            <p>" . utf8_encode(substr($result['content'], 0, 200)) . "....</p>
                            <p class=\"date\">
                            Posted by me <img src=\"assets/image/more.gif\" alt=\"\" /><a href=\"index.php?page=NewsDetail&id=" . $result['id'] . " \">lire plus</a>
                            <img src=\"assets/image/comment.gif\" alt=\"\" /><a href=\"index.php?page=NewsDetail&id=" . $result['id'] . " \">commentaire</a>.
                            </p>
                            </div>
                            <br />";
                $str = $str . "" . $tmp;
            } else {
                $i--;
            }

        }

        echo "<div class=\"left_side\">" . $str . "<a class=\"newsbtn\" href=\"index.php?page=News\">PLUS</a></div>";
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
        echo "<div class=\"events\">" . $str . "</div>";
    }


    public function popUpSigneUp()
    {

        $tmp = "
            <center>
                 <div id = \"loginform\">
                   <input  type = \"image\" id = \"close_login\" src = \"assets/image/close.png\">
                  <form method = \"post\" action = \"Model/Inscription.php\" enctype=\"multipart/form-data\">
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
                            <span>Votre photo : </span><input type='file' id='picture' name='uIMG' accept='image/*' required><br>                            
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
                                 <span>Votre CV : </span><input type='file' id ='pdfCV' name ='cvPDF' accept='application/pdf' required ><br>                            
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


    public function recupCouleur()
    {
        $query = "SELECT t.* FROM template t";
        $result = $this->db->query($query);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $result->setFetchMode(PDO::FETCH_ASSOC);
        $res = $result->fetch();

        return $res['couleurAccueil'];
    }
}




