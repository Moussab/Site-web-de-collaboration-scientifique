<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Conference <?PHP if ($_GET['page'] == "Conferences") echo $_GET['id']; ?></title>
    <link type="text/css" rel="stylesheet" href="../../assets/css/ConferencesSiteWebSimplePage/Conference.css">
</head>
<body onload="initialize()">
<div class="container">

    <?php

    include_once '../../config/db.php';


    $connect = new db();
    $bdd = $connect->connectDB();

    $query = "SELECT * FROM conference WHERE id = " . $_GET['id'];
    $results = $bdd->query($query);
    $results->setFetchMode(PDO::FETCH_ASSOC);
    $result = $results->fetch();

    ?>


    <header>
        <h1><?PHP if ($_GET['page'] == "Conferences") echo utf8_decode($result['titre']); ?></h1>
        <div id="slideshow">
            <div id="slideshow-container">
                <img src="../../assets/image/ConferencesSiteWebSimplePage/conference1.jpg" class="image-slide"
                     title="ENIRMA Shop" alt="ENIRMA Shop vous souhaite la bienvenu" width="100%">
                <img src="../../assets/image/ConferencesSiteWebSimplePage/conference2.jpg" class="image-slide"
                     title="ENIRMA Shop" alt="ENIRMA Shop vous souhaite la bienvenu" width="100%">
                <img src="../../assets/image/ConferencesSiteWebSimplePage/conference3.jpg" class="image-slide"
                     title="ENIRMA Shop" alt="ENIRMA Shop vous souhaite la bienvenu" width="100%">
                <img src="../../assets/image/ConferencesSiteWebSimplePage/conference4.jpg" class="image-slide"
                     title="ENIRMA Shop" alt="ENIRMA Shop vous souhaite la bienvenu" width="100%">
            </div>
        </div>
    </header>

    <div class="menu">
        <button class="menu-elem" id="btn-appel-com">Appel à communication</button>
        <button class="menu-elem" id="btn-dates-importante">Dates importantes</button>
        <button class="menu-elem" id="btn-procedure-soumission">procédure de soumission</button>
        <button class="menu-elem" id="btn-comite-lec-org">Comités de lecture et d’organisation</button>
        <button class="menu-elem" id="btn-prog-conf">Programme de la conférence</button>
    </div>


    <div id="my-pop-up-1" class="pop-up">
        <div class="pop-up-content">
            <div class="pop-up-header">
                <span class="Fermer">&times;</span>
                <h2>Appel à communication</h2>
            </div>
            <div class="pop-up-body">
                <p>
                    Num tel : 0213-555555555<br>
                    E-mail : <a
                        href="mailto:dm_arine@esi.com">conference<?PHP if ($_GET['page'] == "Conferences") echo $_GET['id']; ?>
                        @conference<?PHP if ($_GET['page'] == "Conferences") echo $_GET['id']; ?>.com</a><br>
                    Line d'inscription : <a href="#">Cliquez ici !</a><br>
                </p>
            </div>
            <div class="pop-up-footer">
                <h3>Copyright ESI 2017/2018</h3>
            </div>
        </div>
    </div>

    <div id="my-pop-up-2" class="pop-up">
        <div class="pop-up-content">
            <div class="pop-up-header">
                <span class="Fermer">&times;</span>
                <h2>Appel à communication</h2>
            </div>
            <div class="pop-up-body">
                <p>
                    DDL d'inscription : 31 / 01 / 2017<br>
                    Date de la Conference : 05 / 02 / 2017<br><br>
                </p>
            </div>
            <div class="pop-up-footer">
                <h3>Copyright ESI 2017/2018</h3>
            </div>
        </div>
    </div>

    <div id="my-pop-up-3" class="pop-up">
        <div class="pop-up-content">
            <div class="pop-up-header">
                <span class="Fermer">&times;</span>
                <h2>procédure de soumission</h2>
            </div>
            <div class="pop-up-body">
                <p>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li>Fusce sit amet sem nec lacus semper placerat id a dolor.</li>
                    <li>Sed cursus tortor ultricies turpis aliquam, bibendum aliquet turpis tempus.</li>
                    <li>Morbi pulvinar lacus nec augue faucibus, quis commodo eros euismod.</li>
                </ul>
                </p>
            </div>
            <div class="pop-up-footer">
                <h3>Copyright ESI 2017/2018</h3>
            </div>
        </div>
    </div>

    <div id="my-pop-up-4" class="pop-up">
        <div class="pop-up-content">
            <div class="pop-up-header">
                <span class="Fermer">&times;</span>
                <h2>Comités de lecture et d’organisationon</h2>
            </div>
            <div class="pop-up-body">
                <ul>
                    <li>Lorem ipsum</li>
                    <li>Fusce sit</li>
                    <li>Sed cursus</li>
                    <li>Morbi pulvinar</li>
                </ul>
            </div>
            <div class="pop-up-footer">
                <h3>Copyright ESI 2017/2018</h3>
            </div>
        </div>
    </div>

    <div id="my-pop-up-5" class="pop-up">
        <div class="pop-up-content">
            <div class="pop-up-header">
                <span class="Fermer">&times;</span>
                <h2>Programme de la conférence</h2>
            </div>
            <div class="pop-up-body">
                <p>
                <ul>
                    <li>Lorem ipsum</li>
                    <li>Fusce sit</li>
                    <li>Sed cursus</li>
                    <li>Morbi pulvinar</li>
                </ul>
                <br>
                </p>
            </div>
            <div class="pop-up-footer">
                <h3>Copyright ESI 2017/2018</h3>
            </div>
        </div>
    </div>


    <section>
        <h2>Presentation de la Conference :</h2>
        <article><?PHP if ($_GET['page'] == "Conferences") echo utf8_decode($result['description']); ?></article>
        <h2>Liste des éditions précédentes :</h2>
        <article>
            <ul>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li>Fusce sit amet sem nec lacus semper placerat id a dolor.</li>
                <li>Sed cursus tortor ultricies turpis aliquam, bibendum aliquet turpis tempus.</li>
                <li>Morbi pulvinar lacus nec augue faucibus, quis commodo eros euismod.</li>
            </ul>
        </article>
    </section>


    <div id="mapping">
        <div id="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25592.072929629318!2d3.1807669293310217!3d36.69831883096584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128e522f3f317461%3A0x215c157a5406653c!2sEcole+Nationale+Sup%C3%A9rieure+d&#39;Informatique!5e0!3m2!1sfr!2sdz!4v1484717486668"
                width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>


</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script src="http:/maps.google.com/maps?file=api&v=2&key=AIzaSyAVGSNNEu4hu9eeh7IIosM8IVIgcVQxNNo"
        type="text/javascript"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script type="application/javascript" src="../../assets/js/ConferencesSiteWebSimplePage/Conference.js"></script>
<script type="application/javascript" src="../../assets/js/ConferencesSiteWebSimplePage/itineraire.js"></script>

</body>
</html>