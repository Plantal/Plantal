<?php  
session_start();
 
 if(!isset($_SESSION['ativa'])){
  header('Location: login.php');

}
 
$jsonData = file_get_contents('php://input');

//echo $jsonData;

$obj = json_decode($jsonData, true);

//echo $phpData;

require_once("connect.php"); 



foreach($obj as $item) {
$insert_value = "INSERT INTO planta (nomeCientifico, nomeComum, especie, familia, ordem, fotosURL, qrcode, descricao, tipofolha, utilizacao) VALUES
('".$item['nomeCientifico']."', '".$item['nomeComum']."', '".$item['especie']."', '".$item['familia']."', '".$item['ordem']."', '".$item['fotosURL']."', '".$item['qrcode']."', '".$item['descricao']."', '".$item['tipofolha']."', '".$item['utilizacao']."')";
if ($connect->query($insert_value ) === TRUE) {
echo "Record added Successfully<br>";
}
}




/*
    $verificar = "SELECT nomeCientifico  FROM planta WHERE nomeCientifico='".$nomeCientifico."' ";
    $result = mysqli_query($connect,$verificar);
    if ($result->num_rows >0) { 
      echo "<h3>Esta planta já está registada!</h3>";
      echo json_encode(false);
    }else{
      $insert = "INSERT INTO planta (nomeCientifico, nomeComum, especie, familia, ordem, fotosURL, qrcode, descricao, tipofolha, utilizacao) VALUES ('$nomeCientifico','$nomeComum','$especie', '$familia', '$ordem', '$fotosUrl', '$qrcode', '$descricao','$tipofolha','$utilizacao' )";
    
     
      if (mysqli_query($connect, $insert)) {
          

      }
      echo json_encode(true);
      
    }*/

?>



 