<?php
class Bdd
{
    private $bdd;
    private $serveur = "localhost" ;
    private $nomBdd = "gestion_stock" ;
    private $username = "root";
    private $password = "";


    public function __construct()
    {
        $this->bdd =  new PDO('mysql:host='.$this->serveur.';dbname='.$this->nomBdd, $this->username, $this->password);
    }

    public function getBdd(){
       return $this->bdd;
    }




}