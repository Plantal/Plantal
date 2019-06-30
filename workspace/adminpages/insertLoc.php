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
						('$latitude','$longitude')";
     
     	if (mysqli_query($connect, $insert)) {
    $last_id = mysqli_insert_id($connect);

    $insert2 = "INSERT INTO projeto_plantal (geocodeId, plantaId, projetoId) VALUES
						('$last_id','$idPlanta','$idProjeto')";
						echo $insert2;
					mysqli_query($connect, $insert2);

   
} else {
    echo "Error: " . $insert . "<br>" . mysqli_error($connect);
		}
      
 ?>



 