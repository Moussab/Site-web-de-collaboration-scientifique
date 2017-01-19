<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 14/01/2017
 * Time: 23:28
 */

include(dirname(__FILE__) . '/../../View/admin/Contenu.php');
include(dirname(__FILE__) . '/../../Model/admin/Contenu.php');


$connect = new db();
$bdd = $connect->connectDB();


$MDL = new ContenuMDL($bdd);
$View = new ContenuVIEW($MDL);


$View->__Tabs();

