<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 15/01/2017
 * Time: 11:28
 */
class EditerContenuMDL
{
    private $bdd;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;

    }

    public function __GetNews($id)
    {
        $req = $this->bdd->prepare("SELECT * from news WHERE id = $id");
        $req->execute();
        $res = $req->fetch();
        return $res;
    }

}