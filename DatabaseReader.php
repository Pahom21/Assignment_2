<?php
    class DatabaseReader {
        private $db;

        public function __construct($db) {
            $this->db = $db;
        }

        public function fetchData() {
            // Query to fetch data from the database (assuming your table is named "USERS")
            $query = "SELECT Name, Email FROM USERS";

            // Prepare the query
            $stmt = $this->db->prepare($query);

            if (!$stmt) {
                echo "Error preparing query: " . $this->db->errorInfo();
                return [];
            }

            // Execute the query
            if ($stmt->execute()) {
                // Fetch data and return it as an associative array
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $data;
            } else {
                echo "Error executing query: " . $stmt->errorInfo();
                return [];
            }
        }
    }
?>