<?php


namespace App\Models;


use App\Core\MVC\Model;

class MInsertPoint extends Model{
	
function InsertPoint($nome,$latitude,$longitude){
    $db=database();
    
    $sql = "insert into poligono(Nome) values(:nome)";
	$statement = $db->prepare($sql);
	$statement->bindValue(':nome', $nome);
    $statement->execute();
	$id = $db->lastInsertId();
	$sql = "insert into pontos(latitude,longitude,IdPoligono) values(:latitude,:longitude,:id)";
	$statement = $db->prepare($sql);
	$statement->bindValue(':longitude', $longitude);
	$statement->bindValue(':latitude', $latitude);
	$statement->bindValue(':id', $id);
    $statement->execute();

    $obj =[];
	
	echo json_encode($obj);
}

function GetMarker(){
	$db=database();
    $data = array();

    $sql = "select * from pontos p left join poligono pg on p.IdPoligono = pg.ID";
	$row = $db->prepare($sql);
	$row->execute();
	while($item = $row->fetch(\PDO::FETCH_OBJ)){
		
		$obj = (Object)[
				"latitude"=>$item->latitude,
				"longitude"=>$item->longitude,
				"nome"=>$item->Nome,
				"data"=>$item->data
				];
		
		array_push($data,$obj);	
		
	}
$marker["Markers"] = $data;
	echo json_encode($marker);	
	
}

}
 