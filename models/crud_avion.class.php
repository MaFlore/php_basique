<?php 
    class crud_avion{
        
        private $servername='localhost';
        private $username='root';
        private $password='';
        private $dbname='projet';
        private $result=array();
        private $mysqli='';

        public function __construct(){
            $this->mysqli = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
        }
        public function insert($table,$para=array()){
            $table_columns = implode(',', array_keys($para));
            $table_value = implode("','", $para);

            $sql="INSERT INTO $table($table_columns) VALUES('$table_value')";

            $result = $this->mysqli->query($sql);
        }
        public function delete($table,$idAvion){
            $sql="DELETE FROM $table";
            $sql .=" WHERE $idAvion ";
            $sql;
            $result = $this->mysqli->query($sql);
        }

    }
?>