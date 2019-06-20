<?php 
session_start();


 if(!isset($_SESSION['ativa'])){
   header('Location: login.php');
 
 }
$jsonData = file_get_contents('php://input');

//echo $jsonData;

$content = json_decode($jsonData, true);

 require_once("connect.php");
       
    /*
    $descricao = mysqli_real_escape_string($connect, $_POST["descricao"]);
    $tipofolha = mysqli_real_escape_string($connect, $_POST["tipofolha"]);  
    $utilizacao = mysqli_real_escape_string($connect, $_POST["utilizacao"]);  
*/

    $nomeCientifico = $content['nomeCientifico'];
    $descricao = $content['descricao'];
    $tipofolha = $content['tipofolha']; 
    $utilizacao = $content['utilizacao']; 

    echo $nomeCientifico;


      if($nomeCientifico != '')  
      {  
            echo $nomeCientifico;

           $query = "  
           UPDATE planta   
           SET 
           descricao = '$descricao',
           tipofolha = '$tipofolha',
           utilizacao = '$utilizacao'
           WHERE nomeCientifico='".$nomeCientifico."'"; 

          $result = mysqli_query($connect, $query);  
          echo json_encode(true);
      }

   

?>