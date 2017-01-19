<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 04/01/2017
 * Time: 02:50
 */


include(dirname(__FILE__) . '/../View/News.php');
include(dirname(__FILE__) . '/../Model/News.php');
include_once 'config/db.php';


$connect = new db();
$bdd = $connect->connectDB();
$newsModel = new NewsMDL($bdd);

$newsView = new NewsVIEW($newsModel);


$newsView->SignUp();

$newsView->search();

$newsView->news();

$newsView->pagination();

?>