<?php
    class Zoo{
        // database connection and table name
        private $conn;
        private $table_name = "zoo";
    
        // object properties
    
        public function __construct($db){
            $this->conn = $db;
        }
    
        // used by select drop-down list
        function read(){
            //select all data
            $query = "SELECT
                        *
                    FROM
                        " . $this->table_name . "
                    ORDER BY
                        zoo_seq";  
    
            $stmt = $this->conn->prepare( $query );
            $stmt->execute();
    
            return $stmt;
        }
    }
?>