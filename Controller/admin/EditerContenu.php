<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 15/01/2017
 * Time: 11:27
 */

include(dirname(__FILE__) . '/../../View/admin/EditerContenu.php');
include(dirname(__FILE__) . '/../../Model/admin/EditerContenu.php');


$connect = new db();
$bdd = $connect->connectDB();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $new = -1;
} else {
    $id = -1;
    $new = $_GET['new'];
}
$MDL = new EditerContenuMDL($bdd);
$View = new EditerContenuVIEW($MDL);


$View->__EditNews($id, $new);


