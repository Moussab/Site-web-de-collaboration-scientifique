<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 17/01/2017
 * Time: 08:20
 */

include(dirname(__FILE__) . '/../../View/admin/EditerContenuConference.php');
include(dirname(__FILE__) . '/../../Model/admin/EditerContenuConference.php');


$connect = new db();
$bdd = $connect->connectDB();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $new = -1;
} else {
    $id = -1;
    $new = $_GET['new'];
}

$MDL = new EditerContenuConferenceMDL($bdd);
$View = new EditerContenuConferenceVIEW($MDL);


$View->__EditConference($id, $new);