<?php  
session_start();
 
if(!isset($_SESSION['ativa'])){
  header('Location: login.php');

}
 
$jsonData = file_get_contents('php://input');

//echo $jsonData;

$content = json_decode($jsonData, true);

require_once("connect.php"); 

$idPlanta = $content['idPlanta']; 
$latitude = $content['latitude']; 
$longitude = $content['longitude']; 



echo $idPlanta;


/*$verificar = "SELECT nome  FROM projeto WHERE nome='".$nomeProjeto."' ";
$result = mysqli_query($connect,$verificar);
if ($result->num_rows >0) { 
      echo "<h3>Esta projeto já está registado!</h3>";
      echo json_encode(false);
    }else{
    	$insert = "INSERT INTO projeto (nome, latitude, longitude, userId) VALUES
						('$nomeProjeto','$latitude','$longitude', '$orientador' )";
      echo $insert;
     
      if (mysqli_query($connect, $insert)) {
          echo $insert;

      }
      echo json_encode(true);
      
    }
*/
 ?>



 