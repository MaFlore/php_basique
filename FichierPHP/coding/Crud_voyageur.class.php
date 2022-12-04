<?php 
    class Crud_voyageur{

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

        public function update($table,$para=array(),$idVoyageur){
            $args = array();

            foreach ($para as $key => $value) {
                $args[] = "$key = '$value'"; 
            }

            $sql="UPDATE  $table SET " . implode(',', $args);

            $sql .=" WHERE $idVoyageur";

            $result = $this->mysqli->query($sql);
        }

        public function delete($table,$idVoyageur){
            $sql="DELETE FROM $table";
            $sql .=" WHERE $idVoyageur ";
            $sql;
            $result = $this->mysqli->query($sql);
        }

    }
?>