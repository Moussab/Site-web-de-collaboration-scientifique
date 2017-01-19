<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 17/01/2017
 * Time: 08:20
 */
class EditerContenuConferenceMDL
{
    private $bdd;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;

    }

    public function __GetConference($id)
    {
        $req = $this->bdd->prepare("SELECT * from conference WHERE id = $id");
        $req->execute();
        $res = $req->fetch();
        return $res;
    }
}