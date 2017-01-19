<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 04/01/2017
 * Time: 17:27
 */

include(dirname(__FILE__) . '/../View/Journaux.php');
include(dirname(__FILE__) . '/../Model/Journaux.php');
include_once 'config/db.php';


$connect = new db();
$bdd = $connect->connectDB();
$MDL = new JournauxMDL($bdd);
$View = new JournauxVIEW($MDL);


$View->SignUp();


$View->findJournal();

$View->Journaux();

$View->pagination();


?>