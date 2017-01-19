<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 15/01/2017
 * Time: 14:12
 */

include_once '../config/db.php';

$connect = new db();

$bdd = $connect->connectDB();

if (!$bdd) {
    echo "Connection failed: ";
    header('Location: ../index.php');
}


if (isset($_POST['submitComment'])) {
    $idUser = $_POST['iduser'];
    $idNews = $_POST['idnews'];
    $comment = $_POST['commentaire'];


    echo $idNews . "  " . $idUser . " " . $comment;


    $req = $bdd->prepare("INSERT INTO commentairenews (commentaire, idUser, idNews) 
              VALUE (:commentaire,:idUser,:idNews)");


    $req->execute(array(
        'commentaire' => $comment,
        'idUser' => $idUser,
        'idNews' => $idNews

    ));

    header('Location: ../index.php?page=NewsDetail&id=' . $idNews);

}