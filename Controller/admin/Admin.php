<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 14/01/2017
 * Time: 22:53
 */


include(dirname(__FILE__) . '/../../View/admin/Admin.php');
include(dirname(__FILE__) . '/../../Model/admin/Admin.php');


$MDL = new AdminMDL();
$View = new AdminVIEW($MDL);


$View->__showTab();