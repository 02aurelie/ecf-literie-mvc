<?php

class Database {
    protected $bdd;
    
    public function __construct()
    {
        try {
            $this->bdd = new PDO('mysql:host=localhost;dbname=literie3000;
                charset=utf8', 'root', '');
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }
}