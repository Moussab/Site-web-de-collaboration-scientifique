<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 07/01/2017
 * Time: 06:12
 */

include(dirname(__FILE__) . '/../View/NewsDetail.php');
include(dirname(__FILE__) . '/../Model/NewsDetail.php');
include_once 'config/db.php';


$connect = new db();

$bdd = $connect->connectDB();

$MDL = new NewsDetailMDL($bdd);

$View = new NewsDetailView($MDL);


$View->SignUp();

$View->search();

$View->event();

$View->newDetail();

$View->__Commentaire();
