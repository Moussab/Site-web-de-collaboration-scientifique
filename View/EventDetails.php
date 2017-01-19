<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 07/01/2017
 * Time: 18:09
 */
class EventDetailsView
{


    private $model;

    /**
     * EventDetailsView constructor.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    public function eventDetail()
    {
        echo $this->model->getEventDetails();
    }

    public function SignUp()
    {
        $this->model->popUpSigneUp();
    }
}