<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 15/01/2017
 * Time: 03:01
 */
include_once '../../config/db.php';


if (isset($_GET['supprLogo'])) {
    if ($_GET['supprLogo'] == "true") {
        $connect = new db();
        $bdd = $connect->connectDB();
        if (!$bdd) {
            echo "Connection failed: ";
            header('Location: ../../index.php');
        }
        $req = $bdd->prepare("UPDATE template SET logo = '' WHERE id=1");
        $req->execute();
        header('Location: ../../index.php?page=Template');
    }
}

if (isset($_POST["submit"])) {
    $extension_upload = strtolower(substr(strrchr($_FILES['nLogo']['name'], '.'), 1));
    $path = "../../";
    $target_dir = "assets/image/logo1." . $extension_upload;
    $target_file = $path . $target_dir . basename($_FILES["nLogo"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($path . $target_file, PATHINFO_EXTENSION);

    $resultat = move_uploaded_file($_FILES['nLogo']['tmp_name'], $path . $target_dir);
    if ($resultat) echo "Transfert réussi";
    else echo "Transfert réussi 0";

    $connect = new db();
    $bdd = $connect->connectDB();
    if (!$bdd) {
        echo "Connection failed: ";
        header('Location: ../../index.php');
    }
    $req = $bdd->prepare("UPDATE template SET logo = '$target_dir' WHERE id=1");
    $req->execute();
    header('Location: ../../index.php?page=Template');
}

if (isset($_POST['submit2'])) {

    $connect = new db();
    $bdd = $connect->connectDB();
    if (!$bdd) {
        echo "Connection failed: ";
        header('Location: ../../index.php');
    }
    echo "ok" . $_POST['pageColor'] . $_POST['jscolor'];
    $page = $_POST['pageColor'];
    $color = $_POST['jscolor'];

    $req = $bdd->prepare("UPDATE template SET couleurMenu = '$color' WHERE id=1");
    $req->execute();
    header('Location: ../../index.php?page=Template');
}

if (isset($_POST['submit1'])) {

    $connect = new db();
    $bdd = $connect->connectDB();
    if (!$bdd) {
        echo "Connection failed: ";
        header('Location: ../../index.php');
    }
    $page = $_POST['pageColor'];
    $color = $_POST['jscolor'];
    switch ($page) {
        case 'Accueil':
            $req = $bdd->prepare("UPDATE template SET couleurAccueil = '$color' WHERE id=1");
            break;

        case 'Chercheurs':
            $req = $bdd->prepare("UPDATE template SET couleurChercheur = '$color' WHERE id=1");
            break;

        case 'Conferences':
            $req = $bdd->prepare("UPDATE template SET couleurConference = '$color' WHERE id=1");
            break;

        case 'Journaux':
            $req = $bdd->prepare("UPDATE template SET couleurJourneaux = '$color' WHERE id=1");
            break;

        case 'News':
            $req = $bdd->prepare("UPDATE template SET couleurNews = '$color' WHERE id=1");
            break;

        case 'Publications':
            $req = $bdd->prepare("UPDATE template SET couleurPublication = '$color' WHERE id=1");
            break;
        default:
            return;
    }
    $req->execute();
    header('Location: ../../index.php?page=Template');
}

if (isset($_GET['valider'])) {
    echo "ok";
    $id = $_GET['id'];
    $connect = new db();
    $bdd = $connect->connectDB();
    if (!$bdd) {
        echo "Connection failed: ";
        header('Location: ../../index.php?page=User');
    }

    if ($_GET['valider'] == "true") {
        $_SESSION['bloquer'] = 0;
        $req = $bdd->prepare("UPDATE user SET inscrptionValider = 0 WHERE id= $id");
    } elseif ($_GET['valider'] == "false") {
        $req = $bdd->prepare("DELETE FROM user WHERE id= $id");
    }
    $req->execute();
    header('Location: ../../index.php?page=User');
}

if (isset($_GET['block'])) {
    echo "ok";
    $id = $_GET['id'];
    $connect = new db();
    $bdd = $connect->connectDB();
    if (!$bdd) {
        echo "Connection failed: ";
        header('Location: ../../index.php?page=User');
    }

    if ($_GET['block'] == "true") {
        $req = $bdd->prepare("UPDATE user SET bloquer = 1 WHERE id= $id");
    } elseif ($_GET['block'] == "false") {
        $req = $bdd->prepare("UPDATE user SET bloquer = 0 WHERE id= $id");
    }
    $req->execute();
    header('Location: ../../index.php?page=User');
}

if (isset($_GET['radier'])) {
    $id = $_GET['id'];
    $connect = new db();
    $bdd = $connect->connectDB();
    if (!$bdd) {
        echo "Connection failed: ";
        header('Location: ../../index.php?page=User');
    }
    if ($_GET['radier'] == "true") {
        $req = $bdd->prepare("UPDATE user SET radier = 1 WHERE id= $id");
    } elseif ($_GET['radier'] == "false") {
        $req = $bdd->prepare("UPDATE user SET radier = 0 WHERE id= $id");
    }
    $req->execute();
    header('Location: ../../index.php?page=User');
}

if (isset($_GET['supprContenu'])) {
    $id = $_GET['id'];
    $table = $_GET['table'];
    $connect = new db();
    $bdd = $connect->connectDB();
    if (!$bdd) {
        echo "Connection failed: ";
        header('Location: ../../index.php?page=User');
    }

    $req = $bdd->prepare("DELETE FROM $table WHERE id= $id");

    $req->execute();
    header('Location: ../../index.php?page=Contenu');
}

if (isset($_GET['validerComment'])) {
    $id = $_GET['id'];
    $connect = new db();
    $bdd = $connect->connectDB();
    if (!$bdd) {
        echo "Connection failed: ";
        header('Location: ../../index.php?page=User');
    }

    $req = $bdd->prepare("UPDATE commentairenews SET valider = 1 WHERE id= $id");

    $req->execute();

    header('Location: ../../index.php?page=Commentaire');

}

if (isset($_POST['SubmitEditNews'])) {
    var_dump($_POST);
    $id = $_POST['id'];
    $titre = $_POST['titre'];
    $content = $_POST['content'];
    $url = $_POST['url'];
    $n = intval($_POST['new']);
    echo $n . $id . $titre . $content . $url;

    $connect = new db();
    $bdd = $connect->connectDB();


    if ($n == -1) {
        $req = $bdd->prepare("UPDATE news SET titre = '$titre',
                                         url = '$url',
                                         content = '$content'
                                          WHERE id= '$id'");
    } elseif ($n == 1) {

        $req = $bdd->prepare("SELECT id from news ORDER BY id DESC ");
        $req->execute();
        $res = $req->fetch();

        if (isset($_FILES['img'])) {
            $extension_upload = strtolower(substr(strrchr($_FILES['img']['name'], '.'), 1));
            $path = "../../";
            $target_dir = "assets/image/news/news" . ($res['id'] + 1) . "." . $extension_upload;
            $target_file = $path . $target_dir . basename($_FILES["img"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($path . $target_file, PATHINFO_EXTENSION);

            $resultat = move_uploaded_file($_FILES['img']['tmp_name'], $path . $target_dir);
            if ($resultat) echo "Transfert réussi";
            else echo "Transfert réussi 0";
        } else $target_dir = "assets/image/img.jpg";


        $req = $bdd->prepare("INSERT INTO news (titre,content,imageUrl,url) 
                              VALUE ('$titre','$content','$target_dir','$url')");

    }


    $req->execute();
    header('Location: ../../index.php?page=Contenu');
}


if (isset($_POST['SubmitEditConference'])) {

    $id = $_POST['id'];
    $titre = $_POST['titre'];
    $desc = $_POST['desc'];
    $imgUrl = $_POST['imgUrl'];
    $url = $_POST['url'];
    $n = intval($_POST['new']);
    $annee = $_POST['annee'];
    $dateSoumission = $_POST['dateSoumission'];
    $dateDeroulement = $_POST['dateDeroulement'];


    $connect = new db();
    $bdd = $connect->connectDB();
    echo $url;
    echo $n;

    if ($n == -1) {
        $req = $bdd->prepare("UPDATE conference SET titre = '$titre',
                                         description = '$desc',
                                         imgUrl = '$imgUrl',
                                         UrlConf = '$url',
                                         annee = '$annee',
                                         dateSoumission = '$dateSoumission',
                                         dateDeroulement = '$dateDeroulement'
                                          WHERE id= '$id'");
    } elseif ($n == 1) {

        $req = $bdd->prepare("SELECT id from conference ORDER BY id DESC ");
        $req->execute();
        $res = $req->fetch();

        if (isset($_FILES['imageNews'])) {
            $extension_upload = strtolower(substr(strrchr($_FILES['imageNews']['name'], '.'), 1));
            $path = "../../";
            $target_dir = "assets/image/conference/conference" . ($res['id'] + 1) . "." . $extension_upload;
            $target_file = $path . $target_dir . basename($_FILES["imageNews"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($path . $target_file, PATHINFO_EXTENSION);

            $resultat = move_uploaded_file($_FILES['imageNews']['tmp_name'], $path . $target_dir);
            if ($resultat) echo "Transfert réussi";
            else echo "Transfert réussi 0";
        } else $target_dir = "assets/image/img.jpg";


        $req = $bdd->prepare("INSERT INTO conference (titre,description,imgUrl,UrlConf,annee,dateSoumission,dateDeroulement) 
                              VALUE ('$titre','$desc','$target_dir','$url','$annee','$dateSoumission','$dateDeroulement')");

    }


    $req->execute();


    header('Location: ../../index.php?page=Contenu');
}


if (isset($_POST['SubmitEditEvent'])) {

    echo "klhmj";
    $id = $_POST['id'];
    $titre = $_POST['titre'];
    $desc = $_POST['desc'];
    $imgUrl = $_POST['imgUrl'];
    $url = $_POST['url'];
    $n = intval($_POST['new']);

    $connect = new db();
    $bdd = $connect->connectDB();
    echo $url;
    echo $n;

    if ($n == -1) {
        $req = $bdd->prepare("UPDATE event SET titre = '$titre',
                                         contain = '$desc',
                                         imgUrl = '$imgUrl',
                                         urlEvent = '$url'
                                          WHERE id= '$id'");
    } elseif ($n == 1) {


        $req = $bdd->prepare("SELECT id from event ORDER BY id DESC ");
        $req->execute();
        $res = $req->fetch();

        if (isset($_FILES['newImage'])) {
            echo 'ok';
            $extension_upload = strtolower(substr(strrchr($_FILES['newImage']['name'], '.'), 1));
            $path = "../../";
            $target_dir = "assets/image/evenement/evenement" . ($res['id'] + 1) . "." . $extension_upload;
            $target_file = $path . $target_dir . basename($_FILES["newImage"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($path . $target_file, PATHINFO_EXTENSION);

            $resultat = move_uploaded_file($_FILES['newImage']['tmp_name'], $path . $target_dir);
            if ($resultat) echo "Transfert réussi";
            else echo "Transfert réussi 0";
        } else $target_dir = "assets/image/img.jpg";


        $req = $bdd->prepare("INSERT INTO event (titre,contain,imgUrl,urlEvent) 
                              VALUE ('$titre','$desc','$target_dir','$url')");

    }


    $req->execute();


    header('Location: ../../index.php?page=Contenu');
}

if (isset($_POST['SubmitEditJournal'])) {
    $id = $_POST['id'];
    $titre = $_POST['titre'];
    $ISBN = $_POST['ISBN'];
    $editeur = $_POST['Editeur'];
    $impactFactor = $_POST['impactFactor'];
    $theme = $_POST['theme'];
    $urlImg = $_POST['imgUrl'];
    $siteWeb = $_POST['siteWeb'];
    $n = intval($_POST['new']);

    $connect = new db();
    $bdd = $connect->connectDB();

    if ($n == -1) {
        $req = $bdd->prepare("UPDATE journal SET titre = '$titre',
                                         ISBN = '$ISBN',
                                         editeur = '$editeur',
                                         impactFactor = '$impactFactor',
                                         theme = '$theme',
                                         urlImg = '$urlImg',
                                         siteWeb = '$siteWeb'
                                          WHERE id= '$id'");
    } elseif ($n == 1) {


        $req = $bdd->prepare("SELECT id from journal ORDER BY id DESC ");
        $req->execute();
        $res = $req->fetch();

        if (isset($_FILES['imageNews'])) {
            echo 'ok';
            $extension_upload = strtolower(substr(strrchr($_FILES['imageNews']['name'], '.'), 1));
            $path = "../../";
            $target_dir = "assets/image/journal/journal" . ($res['id'] + 1) . "." . $extension_upload;
            $target_file = $path . $target_dir . basename($_FILES["imageNews"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($path . $target_file, PATHINFO_EXTENSION);

            $resultat = move_uploaded_file($_FILES['imageNews']['tmp_name'], $path . $target_dir);
            if ($resultat) echo "Transfert réussi";
            else echo "Transfert réussi 0";
        } else $target_dir = "assets/image/img.jpg";


        $req = $bdd->prepare("INSERT INTO journal (titre,ISBN,editeur,impactFactor,theme,urlImg,siteWeb) 
                              VALUE ('$titre','$ISBN','$editeur','$impactFactor','$theme','$target_dir','$siteWeb')");

    }


    $req->execute();


    header('Location: ../../index.php?page=Contenu');
}

if (isset($_POST['SubmitEditPublication'])) {
    $id = $_POST['id'];
    $titre = $_POST['titre'];
    $contain = $_POST['contain'];
    $annee = $_POST['annee'];
    $domaineSearch = $_POST['domaineSearch'];
    $urlImg = $_POST['imgUrl'];
    $n = intval($_POST['new']);

    $connect = new db();
    $bdd = $connect->connectDB();

    if ($n == -1) {
        $req = $bdd->prepare("UPDATE publication SET titre = '$titre',
                                         contain = '$contain',
                                         annee = '$annee',
                                         domaineSearch = '$domaineSearch',
                                         urlImg = '$urlImg'
                                          WHERE id= '$id'");
    } elseif ($n == 1) {

        $req = $bdd->prepare("SELECT id from publication ORDER BY id DESC ");
        $req->execute();
        $res = $req->fetch();

        if (isset($_FILES['imageNews'])) {
            echo 'ok';
            $extension_upload = strtolower(substr(strrchr($_FILES['imageNews']['name'], '.'), 1));
            $path = "../../";
            $target_dir = "assets/image/publication/publication" . ($res['id'] + 1) . "." . $extension_upload;
            $target_file = $path . $target_dir . basename($_FILES["imageNews"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($path . $target_file, PATHINFO_EXTENSION);

            $resultat = move_uploaded_file($_FILES['imageNews']['tmp_name'], $path . $target_dir);
            if ($resultat) echo "Transfert réussi";
            else echo "Transfert réussi 0";
        } else $target_dir = "assets/image/img.jpg";

        $req = $bdd->prepare("INSERT INTO publication (titre,contain,annee,domaineSearch,urlImg) 
                              VALUE ('$titre','$contain','$annee','$domaineSearch','$target_dir')");

    }


    $req->execute();


    header('Location: ../../index.php?page=Contenu');
}


