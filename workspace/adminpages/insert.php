<?php  
session_start();
 require_once("connect.php"); 
 if(!isset($_SESSION['ativa'])){
  header('Location: login.php');

}
 if(!empty($_POST)){

    $nomeCientifico = mysqli_real_escape_string($connect, $_POST["nomeCientifico"]);
    $nomeComum = mysqli_real_escape_string($connect, $_POST["nomeComum"]);
    $especie = mysqli_real_escape_string($connect, $_POST["especie"]);
    $familia = mysqli_real_escape_string($connect, $_POST["familia"]);
    $ordem = mysqli_real_escape_string($connect, $_POST["ordem"]);
    $fotosUrl = mysqli_real_escape_string($connect, $_POST["fotosUrl"]);
    $qrcode = mysqli_real_escape_string($connect, $_POST["qrcode"]);
    $descricao = mysqli_real_escape_string($connect, $_POST["descricao"]);
    $tipofolha = mysqli_real_escape_string($connect, $_POST["tipofolha"]);
    $utilizacao = mysqli_real_escape_string($connect, $_POST["utilizacao"]);
    echo $_POST["tipofolha"];
    echo $descricao;
    echo $tipofolha;
    echo $utilizacao; 
    $verificar = "SELECT nomeCientifico  FROM planta WHERE nomeCientifico='".$nomeCientifico."' ";
    $result = mysqli_query($connect,$verificar);
    if ($result->num_rows >0) { 
      echo "<h3>Esta planta já está registada!</h3>";
    }else{
      $insert = "INSERT INTO planta (nomeCientifico, nomeComum, especie, familia, ordem, fotosURL, qrcode, descricao, tipofolha, utilizacao) VALUES ('$nomeCientifico','$nomeComum','$especie', '$familia', 
                                              '$ordem', '$fotosUrl', '$qrcode', '$descricao','$tipofolha','$utilizacao' )";
    
     
      if (mysqli_query($connect, $insert)) {
          

      }
    }
}
?>



 