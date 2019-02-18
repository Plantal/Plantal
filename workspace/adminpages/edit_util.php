<?php 
session_start();
 require_once("connect.php");

 if(!isset($_SESSION['ativa'])){
   header('Location: login.php');
 
 }
 if(isset($_POST["iduser"]))
 	{  
       
    
    $username = mysqli_real_escape_string($connect, $_POST["username"]);
    $password = mysqli_real_escape_string($connect, $_POST["password"]);
    
     echo $username;
     echo $_POST["iduser"];
      if($_POST["iduser"] != '')  
      {  
         echo("aqui");
           $query = "  
           UPDATE users   
           SET 
           username = '$username',
           password = '$password'
            
           WHERE iduser='".$_POST["iduser"]."'"; 

         
          $result = mysqli_query($connect, $query);
          echo $result;  
             
      }

   }

?>