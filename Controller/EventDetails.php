<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 07/01/2017
 * Time: 18:10
 */

include(dirname(__FILE__) . '/../View/EventDetails.php');
include(dirname(__FILE__) . '/../Model/EventDetails.php');
include_once 'config/db.php';


$connect = new db();
$bdd = $connect->connectDB();
$MDL = new EventDetailsMDL($bdd);

$View = new EventDetailsView($MDL);


$View->SignUp();


$View->eventDetail();
