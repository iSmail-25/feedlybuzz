<?php include_once("database/connexion.php");


    class blog extends database{


        public $username;
        public $photo;
        public $function;
        
        public function showCat(){

            $query = "SELECT * FROM categorie" ;

            $result = $this->db_connect()->query($query);
            $row = array();
                while ($data = $result->fetch()) {
                        $row[] = $data;
                  }
                  return $row;
            }

    }
