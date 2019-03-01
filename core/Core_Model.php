<?php

class Core_Model
{
    protected $db = NULL;

    public function __construct() {
        // Connect to databse 1 time
        if ($this->db === NULL) {
            // Load database configs
            $config = require BASE_PATH . '/config/database.php';

            $dbms = $config['dbms'];
            $host = $config['host'];
            $username = $config['username'];
            $password = $config['password'];
            $dbname = $config['dbname'];
            // Connect to database
            try {
                $this->db = new PDO("{$dbms}:host={$host};dbname={$dbname}", $username, $password, null);
                // Set the PDO error mode to exception (details visit http://php.net/manual/en/pdo.setattribute.php)
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // Encode UTF-8
                $this->db->exec("set names utf8");
            } catch(PDOException $e) {
                exit ("Connection failed: " . $e->getMessage());
            }
        }
    }
}

?>