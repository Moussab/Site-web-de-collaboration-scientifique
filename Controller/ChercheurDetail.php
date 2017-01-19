<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 08/01/2017
 * Time: 00:36
 */

include(dirname(__FILE__) . '/../View/ChercheurDetail.php');
include(dirname(__FILE__) . '/../Model/ChercheurDetail.php');
include_once 'config/db.php';


$connect = new db();
$bdd = $connect->connectDB();
$MDL = new ChercheurDetailMDL($bdd);
$View = new ChercheurDetailVIEW($MDL);


$View->SignUp();

$View->ChercheurDetails();

