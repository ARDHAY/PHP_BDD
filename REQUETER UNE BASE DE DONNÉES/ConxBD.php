

<?php
/**
 * Created by PhpStorm.
 * User: H'BIBA
 * Date: 22/11/2018
 * Time: 23:01
 */

class ConxBD
{
    private const BDNAME = "select_test";
    private const ROOT = "root";
    private const PDW = "";
    private const HOST = "localhost";
    private $cnnxBD;

    public function __construct()
    {
        try {
            $this->cnnxBD =  new PDO("mysql:host=" . self::HOST . ";dbname=" . self::BDNAME  , self::ROOT, self::PDW );
            echo 'good';
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
    public function getConnxBD(){
        return $this->cnnxBD;
    }
}