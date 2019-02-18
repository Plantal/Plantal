<?php 
 require_once("connect.php");

 if(!isset($_SESSION['ativa'])){
   header('Location: login.php');
 
 }
 if(isset($_POST["nomeCientifico"]))
 	{  
       
    
    $descricao = mysqli_real_escape_string($connect, $_POST["descricao"]);
    $tipofolha = mysqli_real_escape_string($connect, $_POST["tipofolha"]);  
    $utilizacao = mysqli_real_escape_string($connect, $_POST["utilizacao"]);    
      if($_POST["nomeCientifico"] != '')  
      {  
           $query = "  
           UPDATE planta   
           SET 
           descricao = '$descricao',
           tipofolha = '$tipofolha',
           utilizacao = '$utilizacao'
           WHERE nomeCientifico='".$_POST["nomeCientifico"]."'"; 

          $result = mysqli_query($connect, $query);  
             
      }

   }

?>