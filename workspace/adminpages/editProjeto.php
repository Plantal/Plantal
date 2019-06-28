<?php 
session_start();


 if(!isset($_SESSION['ativa'])){
   header('Location: login.php');
 
 }


$jsonData = file_get_contents('php://input');


$content = json_decode($jsonData, true);

echo $content;
 
 require_once("connect.php");
       
    $idProjeto = $content['idProjeto'];
    $nome = $content['nome'];
    $latitude = $content['latitude'];
    $longitude = $content['longitude']; 
    $orientador = $content['userId']; 

    echo $idProjeto;


      if($idProjeto != '')  
      {  
          
          $query = "
           UPDATE projeto   
           SET 
           nome = '$nome',
           latitude = '$latitude',
           longitude = '$longitude',
           userId = '$orientador'
           WHERE idProjeto = '$idProjeto'"; 

           $result = mysqli_query($connect, $query);  
          echo json_encode(true);
      }

   

?>