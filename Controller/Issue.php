<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 17/01/2017
 * Time: 01:07
 */


include(dirname(__FILE__) . '/../View/Issue.php');
include(dirname(__FILE__) . '/../Model/Issue.php');
include_once 'config/db.php';


$connect = new db();
$bdd = $connect->connectDB();
$MDL = new IssueMDL($bdd);
$View = new IssueView($MDL);


if (isset($_GET['type'])) {
    $issue = $_GET['type'];

    switch ($issue) {
        case "bloquer":
            $View->__bloquer();
            break;

        case "radier";
            $View->__radier();
            break;

        case "inscrptionValider":
            $View->__validation();
            break;
    }
}