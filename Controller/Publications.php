<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 04/01/2017
 * Time: 03:46
 */
include(dirname(__FILE__) . '/../View/Publications.php');
include(dirname(__FILE__) . '/../Model/Publications.php');
include_once 'config/db.php';


$connect = new db();
$bdd = $connect->connectDB();
$MDL = new PublicationsMDL($bdd);
$View = new PublicationsVIEW($MDL);


$View->SignUp();

$View->findPublication();

$View->Publications();

$View->pagination();


?>