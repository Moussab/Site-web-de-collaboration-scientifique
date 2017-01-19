<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 17/01/2017
 * Time: 17:41
 */
class EditerContenuEventMDL
{
    private $bdd;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;

    }

    public function __GetEvent($id)
    {
        $req = $this->bdd->prepare("SELECT * from event WHERE id = $id");
        $req->execute();
        $res = $req->fetch();
        return $res;
    }
}