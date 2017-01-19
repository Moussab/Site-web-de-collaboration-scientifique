<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 08/01/2017
 * Time: 15:19
 */
session_start();
include_once '../config/db.php';


if (isset($_GET['log'])) {
    if ($_GET['log'] == "out") {
        session_destroy();
        header('Location: ../index.php');
    }
}

if (isset($_POST['username']) && isset($_POST['password'])) {

    $bool = true;

    $connect = new db();

    $bdd = $connect->connectDB();

    if (!$bdd) {
        echo "Connection failed: ";
        header('Location: ../index.php');
    }

    $req = $bdd->prepare("SELECT * from user ");
    $req->execute();

    while ($res = $req->fetch()) {
        if (($_POST['password'] == $res['password']) && (strtolower($res['nom']) == strtolower($_POST['username']))) {
            $bool = false;
            $_SESSION['id'] = $res['id'];
            $_SESSION['nom'] = $_POST['username'];
            $_SESSION['userORadmin'] = 0;
            if ($res['bloquer']) {
                $_SESSION['bloquer'] = 1;
                header('Location: ../index.php?page=Issue&type=bloquer');
            } elseif ($res['radier']) {
                $_SESSION['bloquer'] = 1;
                header('Location: ../index.php?page=Issue&type=radier');
            } elseif ($res['inscrptionValider']) {
                $_SESSION['bloquer'] = 1;
                header('Location: ../index.php?page=Issue&type=inscrptionValider');
            } else {
                header('Location: ../index.php');
            }
        }
    }

    $req = $bdd->prepare("SELECT * from admin ");
    $req->execute();

    if ($bool) {
        while ($res = $req->fetch()) {
            if (($_POST['password'] == $res['password']) && (strtolower($res['username']) == strtolower($_POST['username']))) {
                $_SESSION['userORadmin'] = 1;
                $_SESSION['nom'] = $_POST['username'];
                header('Location: ../index.php?page=Admin');
            }
        }
    }


}


if (!empty($_POST['uname']) AND
    !empty($_POST['uprenom']) AND
    !empty($_POST['bday']) AND
    !empty($_POST['sexe']) AND
    !empty($_POST['uemail']) AND
    !empty($_POST['upass']) AND
    !empty($_POST['uTel']) AND
    !empty($_POST['usiteweb']) AND
    !empty($_POST['uPays']) AND
    !empty($_POST['adr']) AND
    !empty($_POST['grade']) AND
    !empty($_POST['affiliation']) AND
    !empty($_POST['thématiquesrecherche']) AND
    !empty($_POST['Bibliographie']) AND
    !empty($_POST['publication']) AND
    !empty($_POST['ujob'])
) {

    $connect = new db();

    $bdd = $connect->connectDB();

    if (!$bdd) {
        echo "Connection failed: ";
        //header('Location: ../index.php');
    } else {

    }


    $req = $bdd->prepare("SELECT id from user ORDER BY id DESC ");
    $req->execute();
    $res = $req->fetch();

    if (isset($_FILES['uIMG'])) {
        echo 'ok';
        $extension_upload = strtolower(substr(strrchr($_FILES['uIMG']['name'], '.'), 1));
        $path = "../";
        $target_dir_img = "assets/image/users/userIMG" . ($res['id'] + 1) . "." . $extension_upload;
        $target_file = $path . $target_dir_img . basename($_FILES["uIMG"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($path . $target_file, PATHINFO_EXTENSION);

        $resultat = move_uploaded_file($_FILES['uIMG']['tmp_name'], $path . $target_dir_img);
        if ($resultat) echo "Transfert réussi";
        else echo "Transfert réussi 01";
    } else $target_dir_img = "assets/image/img.jpg";


    if (isset($_FILES['cvPDF'])) {
        echo 'ok';
        $extension_upload = strtolower(substr(strrchr($_FILES['cvPDF']['name'], '.'), 1));
        $path = "../";
        $target_dir_pdf = "assets/image/users/userCVPDF" . ($res['id'] + 1) . "." . $extension_upload;
        $target_file = $path . $target_dir_pdf . basename($_FILES["cvPDF"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($path . $target_file, PATHINFO_EXTENSION);

        $resultat = move_uploaded_file($_FILES['cvPDF']['tmp_name'], $path . $target_dir_pdf);
        if ($resultat) echo "Transfert réussi";
        else echo "Transfert réussi 02";
    } else $target_dir_pdf = "assets/image/img.jpg";


    $ajou = $bdd->prepare('INSERT INTO user(nom, prenom, bday, sexe, Travail, Grade, affiliation,Themarecherche, cv , mail, NumTel, Siteweb, Bibliographie,Publication, pays, adr, password, imgUrl, inscrptionValider  )
                                    VALUES(:nom, :prenom, :bday, :sexe, :Travail, :Grade, :affiliation, :Themarecherche, :cv, :mail, :NumTel, :Siteweb, :Bibliographie, :Publication, :pays, :adr, :password, :imgUrl, :inscrptionValider)');
    try {
        $ajou->execute(array(
            'nom' => $_POST['uname'],
            'prenom' => $_POST['uprenom'],
            'bday' => $_POST['bday'],
            'sexe' => $_POST['sexe'],
            'Travail' => $_POST['ujob'],
            'Grade' => $_POST['grade'],
            'affiliation' => $_POST['affiliation'],
            'Bibliographie' => $_POST['Bibliographie'],
            'Publication' => $_POST['publication'],
            'Themarecherche' => $_POST['thématiquesrecherche'],
            'mail' => $_POST['uemail'],
            'cv' => $target_dir_pdf,
            'NumTel' => $_POST['uTel'],
            'Siteweb' => $_POST['usiteweb'],
            'pays' => $_POST['uPays'],
            'adr' => $_POST['adr'],
            'imgUrl' => $target_dir_img,
            'password' => $_POST['upass'],
            'inscrptionValider' => 1
        ));

        //session_start();
        $_SESSION['nom'] = $_POST['uname'];
        $_SESSION['bloquer'] = 1;
        echo 'succc';


        header('Location: ../index.php?page=Issue&type=inscrptionValider');

    } catch (Exception $e) {
        echo 'echec';
        header('Location: ../index.php');
        exit($e->getMessage());
    }


}


//$pass_hache = sha1($_POST['pwd']);


