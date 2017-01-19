<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 14/01/2017
 * Time: 23:27
 */
class TemplateVIEW
{

    private $model;

    /**
     * TemplateVIEW constructor.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }


    public function __Tabs()
    {
        return $this->model->__tab();
    }


    public function __showIframe()
    {
        echo "
            <iframe id='General' src=\"index.php?page=Accueil\" frameborder=\"0\" scrolling=\"no\" onload=\"resizeIframe(this)\" ></iframe>

        ";
    }


}