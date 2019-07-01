<?php  
session_start();
 //fetch.php
 require_once("connect.php");  
 if(!isset($_SESSION['ativa'])){
     header('Location: login.php');
   
   }

echo $_POST['id'];

 if(isset($_POST["id"]))  
 {  
      $query = "SELECT geolocal.latitude, geolocal.longitude, nomeCientifico FROM projeto_plantal, geolocal, planta WHERE projeto_plantal.geocodeId = geolocal.idGeolocal AND projeto_plantal.plantaId = planta.idPlanta AND id = '".$_POST["id"]."' ";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>
 