<?php include_once("database/connexion.php");


      class users extends database{


          public $username;
          public $photo;
          public $function;

          public function userProfile(){

            $query = "SELECT * FROM users where id_user like ".$_SESSION['id_user'];

            $result = $this->db_connect()->query($query);
            $row = array();
                while ($data = $result->fetch()) {
                        $row[] = $data;
                  }
                  return $row;
          }



          public function login($email,$password){


            $query = "SELECT * FROM `users`";

            $result = $this->db_connect()->query($query);
            $data = $result->fetchAll();

            for ($i=0; $i<count($data);$i++) {

                if($email == $data[$i]["email"] && $password == $data[$i]["password"]){


                  $_SESSION["id_user"] = $data[$i]["id_user"];
                   $_SESSION["photo"] = $data[$i]["photo"];
                  $_SESSION["email"] = $email;
                 header('location:index.php');
                 exit();
                }
                else{

                  echo "login Failed .......";
                  header('location:login.php');

             }
            }


          }

          public function register($firstname,$lastname,$email,$password,$photo){

            $query="INSERT into users values(null,'".$firstname."','".$lastname."','".$email."','".$password."','".$photo."')";

            $stmt = $this->db_connect()->query($query);
            $stmt->execute();
            header('location:login.php');
            exit();
          }


      }








?>