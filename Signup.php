<?php include "includes/header.php"?>
<?php include "includes/menu.php"?>


<?php

include('classes/classUser.php');

  $users = new users();

  

      if(isset($_POST["firstname"]) && isset($_POST["lastname"]) &&  isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["photo"])){
          $firstname = $_POST["firstname"] ;
          $lastname = $_POST["lastname"] ;
          $email = $_POST["email"] ;
          $password = $_POST["password"];
          $photo = $_POST["photo"];

         
        if(isset($_POST["valide"])) {
          $users->register($firstname,$lastname,$email,$password,$photo);
        }

    }


 ?>
    <div id="login-card" class="card">
    <div class="card-body">
    <h2 class="text-center">Sign Up <br><a class="navbar-brand" href="index.php">Feedly<span>Buzz<i class="#"></i></span></a> </h2>
    <br>
    <form method="post">
        <div class="form-group"> 
        <input type="name" class="form-control" placeholder="Enter name" name="firstname">
        </div>
        <div class="form-group"> 
            <input type="name" class="form-control" placeholder="Enter Username" name="lastname">
        </div>
        <div class="form-group"> 
        <input type="email" class="form-control" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
        <input type="password" class="form-control" placeholder="password" name="password">
        </div>
        <div class="form-group">
        <input type="text" class="form-control" placeholder="image" name="photo">
        </div>
        <button type="submit" id="button" class="btn btn-primary deep-purple btn-block " name="valide">Submit</button>
        <br><br>

        <div id="btn" class="text-center">
            <button type="button" class="btn btn-primary btn-circle btn-sm"><i class="fa fa-facebook"></i></button>
            <button type="button" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-instagram"></i></button>
            <button type="button" class="btn btn-info btn-circle btn-sm"><i class="fa fa-twitter"></i></button>
        </div>

    </form>
    <p class="text-center lost">Already a member?<a href="Login.php">Log in.</a></p>
    </div>
    <div>