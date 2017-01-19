<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 04/01/2017
 * Time: 17:25
 */


include(dirname(__FILE__) . '/../View/Chercheurs.php');
include(dirname(__FILE__) . '/../Model/Chercheurs.php');
include_once 'config/db.php';


$connect = new db();
$bdd = $connect->connectDB();
$MDL = new ChercheursMDL($bdd);
$View = new ChercheursVIEW($MDL);


$View->SignUp();


$View->findChercheur();

if (isset($_GET['i'])) {
    $j = $_GET['i'];
    $View->Chercheurs($j);
} else
    $View->Chercheurs(1);


$View->pagination();



