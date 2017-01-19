<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 03/01/2017
 * Time: 13:45
 */

session_start();

include_once 'config/db.php';

    $connect = new db();
    $bdd = $connect->connectDB();
    if (!$bdd) {
        echo "Connection failed: " ;
        header('Location: ../index.php');
    }
    $req =$bdd->prepare("SELECT * from template");
    $req->execute();
    $res = $req->fetch();

    include_once 'View/header.php';

    if(!empty($_GET['page']) AND (is_file('Controller/'.$_GET['page'].'.php') OR is_file('Controller/admin/'.$_GET['page'].'.php'))){
        if(is_file('Controller/'.$_GET['page'].'.php'))
            include('Controller/'.$_GET['page'].'.php');
        else
            include('Controller/admin/'.$_GET['page'].'.php');
    }else{
        include('Controller/Accueil.php');
    }

    include_once 'View/footer.php';