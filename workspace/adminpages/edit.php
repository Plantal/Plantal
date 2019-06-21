<?php 
session_start();


 if(!isset($_SESSION['ativa'])){
   header('Location: login.php');
 
 }


$jsonData = file_get_contents('php://input');

//echo $jsonData;

$content = json_decode($jsonData, true);

echo $content;


 require_once("connect.php");
       

    $nomeCientifico = $content['nomeCientifico'];
    $descricao = $content['descricao'];
    $tipofolha = $content['tipofolha']; 
    $utilizacao = $content['utilizacao']; 

    echo $nomeCientifico;
    echo "asdasdas";

      
            echo $nomeCientifico;

           $query = "
           UPDATE planta   
           SET 
           descricao = '$descricao',
           tipofolha = '$tipofolha',
           utilizacao = '$utilizacao'
           WHERE nomeCientifico = '$nomeCientifico'"; 

           echo $query;

          $result = mysqli_query($connect, $query); 
          echo $result; 
          echo json_encode(true);
      

   

?>