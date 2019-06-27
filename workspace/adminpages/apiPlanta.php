<?php

$connect = new mysqli("127.0.0.1","root","root", "plantal");

	if ($connect->connect_errno) {
    printf("Connect failed: %s\n", $connect->connect_error);
    exit();
	}


$query = "SELECT * FROM planta";




$return_arr = array();
$result = mysqli_query($connect, $query);

while ($row = mysqli_fetch_array($result) ) {
    $row_array['idPlanta'] = $row['idPlanta'];
    $row_array['nomeCientifico'] = $row['nomeCientifico'];
    $row_array['nomeComum'] = $row['nomeComum'];
    $row_array['especie'] = $row['especie'];
    $row_array['familia'] = $row['familia'];
    $row_array['ordem'] = $row['ordem'];
    $row_array['fotosURL'] = $row['fotosURL'];
    $row_array['qrcode'] = $row['qrcode'];
    $row_array['descricao'] = $row['descricao'];
    $row_array['tipofolha'] = $row['tipofolha'];
    $row_array['utilizacao'] = $row['utilizacao'];



    array_push($return_arr,$row_array);
}


echo json_encode($return_arr);








?>