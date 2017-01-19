<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 17/01/2017
 * Time: 21:11
 */
class EditerContenuJournauxMDL
{
    private $bdd;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;

    }

    public function __GetJournal($id)
    {
        $req = $this->bdd->prepare("SELECT * from journal WHERE id = $id");
        $req->execute();
        $res = $req->fetch();
        return $res;
    }
}