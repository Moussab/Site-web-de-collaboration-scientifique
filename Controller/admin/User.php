<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 14/01/2017
 * Time: 23:29
 */

include(dirname(__FILE__) . '/../../View/admin/User.php');
include(dirname(__FILE__) . '/../../Model/admin/User.php');


$connect = new db();
$bdd = $connect->connectDB();


$MDL = new UserMDL($bdd);
$View = new UserVIEW($MDL);


$View->__Tabs();