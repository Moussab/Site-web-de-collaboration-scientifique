<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 04/01/2017
 * Time: 17:26
 */

include(dirname(__FILE__) . '/../View/Conferences.php');
include(dirname(__FILE__) . '/../Model/Conferences.php');
include_once 'config/db.php';


$connect = new db();
$bdd = $connect->connectDB();
$MDL = new ConferencesMDL($bdd);
$View = new ConferencesVIEW($MDL);


$View->SignUp();


$View->findConference();

$View->Conferences();

$View->pagination();

?>