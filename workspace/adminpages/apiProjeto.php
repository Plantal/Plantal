<?php

$connect = new mysqli("127.0.0.1","root","root", "plantal");

    if ($connect->connect_errno) {
    printf("Connect failed: %s\n", $connect->connect_error);
    exit();
    }


$query = "SELECT * FROM projeto";




$return_arr = array();
$result = mysqli_query($connect, $query);

while ($row = mysqli_fetch_array($result) ) {
    $row_array['idProjeto'] = $row['idProjeto'];
    $row_array['nome'] = $row['nome'];
    $row_array['latitude'] = $row['latitude'];
    $row_array['longitude'] = $row['longitude'];
    $row_array['userId'] = $row['userId'];
    
   



    array_push($return_arr,$row_array);
}


echo json_encode($return_arr);








?>