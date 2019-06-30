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
     
     	if (mysqli_query($connect, $insert)) {
    $last_id = mysqli_insert_id($connect);
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $insert . "<br>" . mysqli_error($connect);
}
      
 ?>



 