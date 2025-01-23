<?php
abstract class AbstractManager {
    protected PDO $db;

    public function __construct() {
        $this->db = new PDO(
            'mysql:host=localhost;dbname=ilhamechemmakh_crud_mvc;charset=utf8', 
            'root', 
            '', 
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
        );
    }
}