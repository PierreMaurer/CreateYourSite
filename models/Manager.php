<?php


class Manager
{
    protected function dbConnect() {
        $db = new PDO('mysql:host=localhost;dbname=createyoursite;charset=utf8', 'USERDB', 'PASSWORD');
        return $db;
    }
}
