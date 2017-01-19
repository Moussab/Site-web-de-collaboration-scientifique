<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 17/01/2017
 * Time: 20:29
 */

include(dirname(__FILE__) . '/../../View/admin/EditerContenuEvent.php');
include(dirname(__FILE__) . '/../../Model/admin/EditerContenuEvent.php');


$connect = new db();
$bdd = $connect->connectDB();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $new = -1;
} else {
    $id = -1;
    $new = $_GET['new'];
}

$MDL = new EditerContenuEventMDL($bdd);
$View = new EditerContenuEventVIEW($MDL);


$View->__EditEvent($id, $new);