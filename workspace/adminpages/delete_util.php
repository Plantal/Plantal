<?php 
session_start();
 require_once("connect.php");  
 if(!isset($_SESSION['ativa'])){
     header('Location: login.php');
   
   }


 if(isset($_POST["iduser"]))  
 {  
         echo $_POST["iduser"];


      $query = "DELETE FROM users WHERE iduser = '".$_POST["iduser"]."'";  

      echo $query;
      $result = mysqli_query($connect, $query);  
      
 }  
 ?>


 