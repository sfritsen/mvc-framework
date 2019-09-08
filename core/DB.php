<?php

class DB {

    public function __construct() 
    {
        $hosename = 'localhost';
        $username = 'root';
        $password = '616461';
        $dbname = 'framework';

        try {

            $this->db = new PDO('mysql:host=' . $hosename . ';dbname=' . $dbname, $username, $password);

            $this->db->query('SET NAMES utf8');
            $this->db->query('SET CHARACTER_SET utf8_unicode_ci');
            
            // TODO: Remove for production
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {

            echo 'Connection error: ' . $e->getMessage();

        }
    }

    public function query1($statement)
    {
        $q = $this->db->query($statement);
        return $q;
    }
}