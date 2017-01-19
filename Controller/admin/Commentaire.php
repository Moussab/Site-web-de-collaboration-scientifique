<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 14/01/2017
 * Time: 23:30
 */

include(dirname(__FILE__) . '/../../View/admin/Commentaire.php');
include(dirname(__FILE__) . '/../../Model/admin/Commentaire.php');


$connect = new db();
$bdd = $connect->connectDB();


$MDL = new CommentaireMDL($bdd);
$View = new CommentaireVIEW($MDL);


$View->__Tabs();