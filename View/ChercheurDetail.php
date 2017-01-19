<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 08/01/2017
 * Time: 00:37
 */
class ChercheurDetailVIEW
{

    private $model;

    /**
     * ChercheurDetailVIEW constructor.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }


    public function ChercheurDetails()
    {
        echo $this->model->getChercheurDetails();
    }

    public function SignUp()
    {
        $this->model->popUpSigneUp();
    }

}