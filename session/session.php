<?php
        
if(!empty($_SESSION["email"])){
return false;
}
else{
    header("location:login.php");
}
?>