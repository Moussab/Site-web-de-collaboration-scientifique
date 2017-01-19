<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 14/01/2017
 * Time: 23:28
 */

include(dirname(__FILE__) . '/../../View/admin/Template.php');
include(dirname(__FILE__) . '/../../Model/admin/Template.php');


$MDL = new TemplateMDL();
$View = new TemplateVIEW($MDL);


$View->__Tabs();

$View->__showIframe();
