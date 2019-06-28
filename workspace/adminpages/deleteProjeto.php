<?php 
session_start();
 require_once("connect.php");  
 if(!isset($_SESSION['ativa'])){
     header('Location: login.php');
   
   }
 if(isset($_POST["idProjeto"]))  
 {  
         
      $query = "DELETE FROM projeto WHERE idProjeto = '".$_POST["idProjeto"]."'";  
      $result = mysqli_query($connect, $query);  
      
 }  
 ?>


 