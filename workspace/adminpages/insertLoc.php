<?php  
session_start();
 
if(!isset($_SESSION['ativa'])){
  header('Location: login.php');

}
 
$jsonData = file_get_contents('php://input');

//echo $jsonData;

$content = json_decode($jsonData, true);

require_once("connect.php"); 


$idProjeto = $content['idProjeto'];
$idPlanta = $content['idPlanta']; 
$latitude = $content['latitude']; 
$longitude = $content['longitude']; 







    	$insert = "INSERT INTO geolocal (latitude, longitude) VALUES
						($latitude','$longitude')";
     
     	$result = mysqli_query($connect, $insert);
     	echo $insert;
      if ($result->num_rows >0) {
          	$last_id = mysqli_insert_id($connect);
   			 echo "New record created successfully. Last inserted ID is: " . $last_id;

      }
      
 ?>



 