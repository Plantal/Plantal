<?php 
session_start();
 require_once("connect.php");  
 if(!isset($_SESSION['ativa'])){
     header('Location: login.php');
   
   }
 if(isset($_POST["idProjeto"]))  
 {  


 	$query = "DELETE FROM projeto_plantal WHERE projetoId = '".$_POST["idProjeto"]."'"; 

 	if(mysqli_query($connect, $query); ){

         
      $query2 = "DELETE FROM projeto WHERE idProjeto = '".$_POST["idProjeto"]."'";  
      mysqli_query($connect, $query2);  
      }
 }  
 ?>


 