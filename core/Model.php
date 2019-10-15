<?php defined('BASE_PATH') OR exit('No direct script access allowed');

class Model {

    private $_db;
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

    private function close_db_connection()
    {
        $this->_db = null;
    }

    /**
     * Runs provided query
     * @param string sql statement
     * @return array
     */
    protected function db_query($sql)
    {
        $stmt = $this->_db->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Close the connection
        $this->close_db_connection();

        // Return the results
        return $data;
    }

    /**
     * Fetches single table row
     * @param string sql statement
     * @return array
     */
    protected function db_query_row($sql)
    {
        $stmt = $this->_db->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        // Close the connection
        $this->close_db_connection();

        // Return the results
        return $data;
    }
}