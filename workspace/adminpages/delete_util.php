<?php 
 require_once("connect.php");  
 if(!isset($_SESSION['ativa'])){
     header('Location: login.php');
   
   }
 if(isset($_POST["iduser"]))  
 {  
         
      $query = "DELETE FROM users WHERE iduser = '".$_POST["iduser"]."'";  
      $result = mysqli_query($connect, $query);  
      
 }  
 ?>


 