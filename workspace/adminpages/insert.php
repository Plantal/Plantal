<?php  
session_start();
 
if(!isset($_SESSION['ativa'])){
  header('Location: login.php');

}
 
$jsonData = file_get_contents('php://input');

//echo $jsonData;

$content = json_decode($jsonData, true);

require_once("connect.php"); 

$nomeCientifico = $content['nomeCientifico']; 
$nomeComum = $content['nomeComum']; 
$especie = $content['especie']; 
$familia = $content['familia']; 
$ordem = $content['ordem']; 
$fotosUrl = $content['fotosUrl']; 
$qrcode = $content['qrcode']; 
$descricao = $content['descricao']; 
$tipofolha = $content['tipofolha']; 
$utilizacao = $content['utilizacao']; 


echo $nomeCientifico;

$verificar = "SELECT nomeCientifico  FROM planta WHERE nomeCientifico='".$nomeCientifico."' ";
$result = mysqli_query($connect,$verificar);
if ($result->num_rows >0) { 
      echo "<h3>Esta planta já está registada!</h3>";
      echo json_encode(false);
    }else{
    	$insert = "INSERT INTO planta (nomeCientifico, nomeComum, especie, familia, ordem, fotosURL, qrcode, descricao, tipofolha, utilizacao) VALUES
						('$nomeCientifico','$nomeComum','$especie', '$familia', '$ordem', '$fotosUrl', '$qrcode', '$descricao','$tipofolha','$utilizacao' )";
    
     
      if (mysqli_query($connect, $insert)) {
          

      }
      echo json_encode(true);
      
    }

 ?>



 