<?php

class Database{
    public function connect(){
        $db = new mysqli('localhost','root','', 'tiendamaster');

        $db->query("SET NAMES 'UTF8");
        return $db;

    }
}