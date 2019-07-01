<?php  
session_start();
 //fetch.php
 require_once("connect.php");  
 if(!isset($_SESSION['ativa'])){
     header('Location: login.php');
   
   }
 if(isset($_POST["id"]))  
 {  
      $query = "SELECT  latitude, longitude, nomeCientifico FROM projeto_plantal, geolocal WHERE projeto_plantal.geocodeId = geolocal.idGeolocal AND  id = '".$_POST["id"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>
 