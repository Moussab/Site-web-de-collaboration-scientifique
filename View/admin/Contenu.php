<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 14/01/2017
 * Time: 23:28
 */
class ContenuVIEW
{

    private $model;


    public function __construct($model)
    {
        $this->model = $model;
    }


    public function __Tabs()
    {
        return $this->model->__tab();
    }


}