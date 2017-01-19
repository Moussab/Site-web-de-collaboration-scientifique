<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 17/01/2017
 * Time: 22:55
 */
class EditerContenuPublicationMDL
{

    private $bdd;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;

    }

    public function __GetPublication($id)
    {
        $req = $this->bdd->prepare("SELECT * from publication WHERE id = $id");
        $req->execute();
        $res = $req->fetch();
        return $res;
    }

}