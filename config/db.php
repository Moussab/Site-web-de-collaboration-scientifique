<?php

/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 08/01/2017
 * Time: 07:15
 */
class db
{

    private $DB_HOST,
        $DB_NAME,
        $DB_USER,
        $DB_PASSWORD;

    private $db = null;

    /**
     * db constructor.
     */
    public function __construct()
    {
        $this->DB_HOST = '127.0.0.1';
        $this->DB_NAME = 'ptdw';
        $this->DB_USER = 'USER';
        $this->DB_PASSWORD = 'MDP';
    }


    /**
     * @return null|PDO
     */
    public function connectDB()
    {
        try {
            $this->db = new PDO("mysql:host=" . $this->DB_HOST . ";dbname=" . $this->DB_NAME, $this->DB_USER, $this->DB_PASSWORD);

            if (!$this->db) {
                die("Connection failed: " . mysqli_connect_error());
            } else {
                return $this->db;
            }
        } catch (PDOException $e) {
            $_GET['page'] = "Accueil";
        }
        return null;
    }


}