<?php 
session_start();
 require_once("connect.php");  
 if(!isset($_SESSION['ativa'])){
     header('Location: login.php');
   
   }


 if(isset($_POST["iduser"]))  
 {  
         $id = $_POST["iduser"];


      $query = "DELETE FROM users WHERE iduser = '$id'";  

      echo $query;
      $result = mysqli_query($connect, $query);  
      
 }  
 ?>


 