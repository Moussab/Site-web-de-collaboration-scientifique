<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 17/01/2017
 * Time: 21:14
 */

include(dirname(__FILE__) . '/../../View/admin/EditerContenuJournal.php');
include(dirname(__FILE__) . '/../../Model/admin/EditerContenuJournaux.php');


$connect = new db();
$bdd = $connect->connectDB();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $new = -1;
} else {
    $id = -1;
    $new = $_GET['new'];
}

$MDL = new EditerContenuJournauxMDL($bdd);
$View = new EditerContenuJournalVIEW($MDL);


$View->__EditJournal($id, $new);