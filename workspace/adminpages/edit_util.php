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
    $email = mysqli_real_escape_string($connect, $_POST["email"]);
    

      if($_POST["iduser"] != '')  
      {  
        
           $query = "  
           UPDATE users   
           SET 
           username = '$username',
           password = '$password',
           email = '$email'
            
           WHERE iduser='".$_POST["iduser"]."'"; 

         
          $result = mysqli_query($connect, $query);
          echo json_encode(true);
             
      }

   }

?>