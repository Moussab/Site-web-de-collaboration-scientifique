<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 03/01/2017
 * Time: 13:48
 */
include(dirname(__FILE__) . '/../View/Accueil.php');
include(dirname(__FILE__) . '/../Model/Accueil.php');
include_once 'config/db.php';


$connect = new db();
$bdd = $connect->connectDB();
$accueilModel = new AccueilMDL($bdd);
$accueilView = new AccueilVIEW($accueilModel);


$accueilView->SignUp();

$accueilView->slider();

$accueilView->search();

$accueilView->event();

$accueilView->getSection();

$accueilView->news();


?>