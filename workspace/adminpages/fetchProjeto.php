<?php  
session_start();
 //fetch.php
 require_once("connect.php");  
 if(!isset($_SESSION['ativa'])){
     header('Location: login.php');
   
   }
 if(isset($_POST["idProjeto"]))  
 {  
      $query = "SELECT projeto.nome, latitude, longitude, username FROM projeto, users WHERE projeto.userId = users.iduser AND  idProjeto = '".$_POST["idProjeto"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>
 