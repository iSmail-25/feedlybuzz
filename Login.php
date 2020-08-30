<?php include "includes/header.php"?>

<?php include "includes/menu.php"?>
<?php

include('classes/classUser.php');



  $users = new users();

      function valid($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

      }

    if(isset($_POST["email"]) && isset($_POST["password"]))
    {

        $email = valid($_POST["email"]);
        $password = valid($_POST["password"]);




        if(isset($_POST["valide"])) {


          $users->login($email,$password);



        }

    }


?>
    <div id="login-card" class="card">
    <div class="card-body">
        <h2 class="text-center">Sign in <a class="navbar-brand" href="index.php">Feedly<span>Buzz<i class="#"></i></span></a> </h2>
    <br>
    <form method="post">
        <div class="form-group">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
        <input type="password" class="form-control" id="email" placeholder="Enter password" name="password">
        </div>
        <button type="submit" id="button" class="btn btn-primary deep-purple btn-block" name="valide">Submit</button>
    </form>

    <br><br>
    
        <div id="btn" class="text-center">
    <button type="button" class="btn btn-primary btn-circle btn-sm"><i class="fa fa-facebook"></i></button>
    <button type="button" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-instagram"></i></button>
    <button type="button" class="btn btn-info btn-circle btn-sm"><i class="fa fa-twitter"></i></button>
    </div>

    
    <p class="text-center lost"><a href="#">Forgot your password?</a></p>
    <a href="Signup.php"><button type="submit" id="buttonn" class="btn btn-primary deep-purple btn-block ">Create New Account</button></a>
    </div>
    <div>