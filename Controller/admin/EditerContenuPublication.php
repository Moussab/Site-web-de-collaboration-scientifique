$<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 17/01/2017
 * Time: 22:56
 */


include(dirname(__FILE__) . '/../../View/admin/EditerContenuPublication.php');
include(dirname(__FILE__) . '/../../Model/admin/EditerContenuPublication.php');


$connect = new db();
$bdd = $connect->connectDB();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $new = -1;
} else {
    $id = -1;
    $new = $_GET['new'];
}

$MDL = new EditerContenuPublicationMDL($bdd);
$View = new EditerContenuPublicationView($MDL);


$View->__EditPublication($id, $new);