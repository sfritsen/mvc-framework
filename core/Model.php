<?php

class Model {

    protected $db;
    // protected $config;

    public function __construct() 
    {
        // Get users database information
        require('./config/database.php');
        $host       = $config['database']['hostname'];
        $user       = $config['database']['username'];
        $pass       = $config['database']['password'];
        $dbname     = $config['database']['dbname'];
        $charset    = $config['database']['charset'];

        $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $this->db = new PDO($dsn, $user, $pass, $options);
        } catch (PDOException $e) {
            echo 'Connection error: ' . $e->getMessage();
        }
    }

    // Runs provided query
    public function db_query($sql)
    {
        $q = $this->db->query($sql);
        return $q;
    }

    // Fetches single row
    public function db_query_row($sql)
    {
        // $q = $this->db->query($sql)->fetch(PDO::FETCH_OBJ);
        $q = $this->db->query($sql)->fetch(PDO::FETCH_ASSOC);    

        return $q;
    }
}