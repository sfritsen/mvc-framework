<?php defined('BASE_PATH') OR exit('No direct script access allowed');

class Model {

    protected $_db;
    protected $config = [];

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
            $this->_db = new PDO($dsn, $user, $pass, $options);
        } catch (PDOException $e) {
            echo 'Connection error: ' . $e->getMessage();
        }
    }

    // Runs provided query
    public function db_query($sql)
    {
        // $query = $this->_db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        // return $query;
        $stmt = $this->_db->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    // Fetches single row
    public function db_query_row($sql)
    {
        // $q = $this->_db->query($sql)->fetch(PDO::FETCH_ASSOC);    
        // return $q;
        $stmt = $this->_db->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
}