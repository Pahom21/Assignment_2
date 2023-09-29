<?php
    class dbconnection{
        private $connection;
        private $db_type;
        private $db_host;
        private $db_name;
        private $db_user;
        private $db_pass;

        public function __construct($DB_TYPE,$DB_HOST,$DB_NAME,$DB_USER,$DB_PASS){
            $this->db_type      = $DB_TYPE;
            $this->db_host      = $DB_HOST;
            $this->db_name      = $DB_NAME;
            $this->db_user      = $DB_USER;
            $this->db_pass      = $DB_PASS;
            $this->connection($DB_TYPE,$DB_HOST,$DB_NAME,$DB_USER,$DB_PASS);
        }

        public function connection($DB_TYPE,$DB_HOST,$DB_NAME,$DB_USER,$DB_PASS){
            switch ($DB_TYPE){
                case 'MySQLi':
                    $this->connection = new mysqli($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
                    if($this->connection->connect_error){
                        return "Connection To Database Failed";
                    }
                    break;
                case 'PDO':
                    try{
                    $this->connection = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS) ;
                    // set the PDO error mode to exception
                    $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    }
                    catch(PDOException $e){
                        die("Connection failed: " . $e->getMessage());  
                    }
                    break;

            }
        }
        public function getConnection() {
            return $this->connection;
        }
        
        public function prepare($sql) {
            return $this->connection->prepare($sql);
        }
    }
?>