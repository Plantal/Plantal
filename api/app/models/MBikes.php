<?php


namespace App\Models;


use App\Core\MVC\Model;

class MBikes extends Model{

	
	 //____________________GETS ROUTES____________________

			//--------BIKES--------
function GetBikes($date){
	$db=database();
    $data = array();

	$sql = "select * from bikes where update_date >=:date";
	
	$statement = $db->prepare($sql);
	$statement->bindValue(':date', $date);	
    $statement->execute();

	while($item = $statement->fetch(\PDO::FETCH_OBJ)){
		
		$obj = (Object)[
				"bike_id"=>$item->bike_id,
				"brand"=>$item->brand,
				"model"=>$item->model,
				"create_date"=>$item->create_date,
				"update_date"=>$item->update_date
				];
		
		array_push($data,$obj);	
		
	}
	$bikes["Bikes"] = $data;
	echo json_encode($data);	
	
}

			//--------USERS--------
function GetUsers($date){
	$db=database();
    $data = array();

	$sql = "select * from users where isAdmin = :admin and update_date >= :date ";
	
	$statement = $db->prepare($sql);
	$statement->bindValue(':date', $date);
	$statement->bindValue(':admin', '1');
    $statement->execute();

	while($item = $statement->fetch(\PDO::FETCH_OBJ)){
		
		$obj = (Object)[
				"user_id"=>$item->user_id,
				"name"=>$item->nome,
				"morada"=>$item->morada,
				"contato"=>$item->contato,
				"data_nascimento"=>$item->data_nascimento,
				"isAdmin"=>$item->isAdmin,
				"create_date"=>$item->create_date,
				"update_date"=>$item->update_date
				];
		
		array_push($data,$obj);	
		
	}
//	$users["Users"] = $data;
	echo json_encode($data);	
	
}

			//--------RENTS--------
function GetRents($user_id,$date){
	$db=database();
    $data = array();

	$sql = "select * from rents where user_id = :user_id and update_date >= :date ";
	
	$statement = $db->prepare($sql);
	$statement->bindValue(':date', $date);
	$statement->bindValue(':user_id', $user_id);

    $statement->execute();

	while($item = $statement->fetch(\PDO::FETCH_OBJ)){
		
		$obj = (Object)[
				"rent_id"=>$item->rent_id,
				"user_id"=>$item->user_id,
				"bike_id"=>$item->bike_id,
				"distancia"=>$item->distancia,
				"create_date"=>$item->create_date,
				"update_date"=>$item->update_date
				];
		
		array_push($data,$obj);	
		
	}
	//$rents["rents"] = $data;
	echo json_encode($data);	
	
}

			//--------ROUTES--------
function GetRoutes($user_id,$date){
	$db=database();
    $data = array();

	$sql = "select * from routes r INNER JOIN rents rt ON r.rout_id =rt.rent_id where rt.user_id = :user_id AND r.update_date >= :date ";
	
	$statement = $db->prepare($sql);
	$statement->bindValue(':date', $date);
	$statement->bindValue(':user_id', $user_id);

    $statement->execute();

	while($item = $statement->fetch(\PDO::FETCH_OBJ)){
		
		$obj = (Object)[
				"rout_id"=>$item->rout_id,
				"rent_id"=>$item->rent_id,
				"latitude"=>$item->latitude,
				"longitude"=>$item->longitude,
				"create_date"=>$item->create_date,
				"update_date"=>$item->update_date
				];
		
		array_push($data,$obj);	
		
	}
	//$routes["routes"] = $data;
	echo json_encode($data);	
}

			//--------REMOVED--------
function GetRemoved($user_id,$date){
	$db=database();
    $data = array();

	$sql = "select * from removed_rows where user_id = :user_id and create_date >= :date ";
	
	$statement = $db->prepare($sql);
	$statement->bindValue(':date', $date);
	$statement->bindValue(':user_id', $user_id);

    $statement->execute();

	while($item = $statement->fetch(\PDO::FETCH_OBJ)){
		
		$obj = (Object)[
				"row_id"=>$item->row_id,
				"table"=>$item->table,
				"user_id"=>$item->user_id,
				"remove_id"=>$item->remove_id,
				"create_date"=>$item->create_date
				];
		
		array_push($data,$obj);	
		
	}
	//$removed["removed"] = $data;
	echo json_encode($data);	
	
}



  //____________________POSTS ROUTES____________________

		

			//--------USERS--------
function SetUsers(){
	$app=instance();
	date_default_timezone_set("UTC");
	$db=database();
	$data = array();
	

	$json = $app->request->getBody();
	$user = json_decode($json, true); 
	foreach ($user as $value) {
		$user_id = $value['sync_id'];
		$nome = $value['name'];
		$morada = $value['morada'];
		//$contato = $value['contato'];
		$data_nascimento = $value['data_nascimento'];
		$isAdmin = $value['isAdmin'];
		$update_date = $value['update_date'];
		$create_date =$value['create_date'];

		$sql = "insert into users (user_id,nome,morada,data_nascimento,isAdmin,update_date,create_date) 
		values(:user_id,:nome,:morada,:data_nascimento,:isAdmin,:update_date,:create_date)
		ON DUPLICATE KEY UPDATE nome = :nome ,morada=:morada,data_nascimento=:data_nascimento,isAdmin=:isAdmin,update_date=:update_date,
		create_date = :create_date";
		
		$statement = $db->prepare($sql);
		$statement->bindValue(':user_id', $user_id);
		$statement->bindValue(':nome', $nome);
		$statement->bindValue(':morada', $morada);
	//	$statement->bindValue(':contato', $contato);
		$statement->bindValue(':data_nascimento', $data_nascimento);
		$statement->bindValue(':isAdmin', $isAdmin);
		$statement->bindValue(':update_date', $update_date);
		$statement->bindValue(':create_date', $create_date);	
		$statement->execute();
	}
	

	
	$obj =[];
	
	echo json_encode($obj);	
	
}

			//--------RENTS--------
function SetRents(){
	$app=instance();
	date_default_timezone_set("UTC");
	$db=database();
	$data = array();
	

	$json = $app->request->getBody();
    $bike = json_decode($json, true); 
	$brand = $rent_id[0]['rent_id'];
	$model = $user_id[0]['user_id'];
	$model = $bike_id[0]['bike_id'];
	$model = $distancia[0]['distancia'];
	$update_date = time();
	$create_date = $update_date;

	$sql = "insert into routes (rent_id,user_id,bike_id,distancia,update_date,create_date) values(:rent_id,:user_id,:bike_id,:distancia,:update_date,:create_date)";
	
	$statement = $db->prepare($sql);
	$statement->bindValue(':rent_id', $rent_id);
	$statement->bindValue(':user_id', $user_id);
	$statement->bindValue(':bike_id', $bike_id);
	$statement->bindValue(':distancia', $distancia);
	$statement->bindValue(':update_date', $update_date);
	$statement->bindValue(':create_date', $create_date);	
    $statement->execute();

	
	$obj =[];
	
	echo json_encode($obj);	
	
}

			//--------ROUTES--------
function SetRoutes(){
	$app=instance();
	date_default_timezone_set("UTC");
	$db=database();
	$data = array();
	

	$json = $app->request->getBody();
    $bike = json_decode($json, true); 
	$brand = $rout_id[0]['rout_id'];
	$model = $rent_id[0]['rent_id'];
	$model = $latitude[0]['latitude'];
	$model = $longitude[0]['longitude'];
	$update_date = time();
	$create_date = $update_date;

	$sql = "insert into routes (rout_id,rent_id,latitude,longitude,update_date,create_date) values(:rout_id,:rent_id,:latitude,:longitude,:update_date,:create_date)";
	
	$statement = $db->prepare($sql);
	$statement->bindValue(':rout_id', $rout_id);
	$statement->bindValue(':rent_id', $rent_id);
	$statement->bindValue(':latitude', $latitude);
	$statement->bindValue(':longitude', $longitude);
	$statement->bindValue(':update_date', $update_date);
	$statement->bindValue(':create_date', $create_date);	
    $statement->execute();

	
	$obj =[];
	
	echo json_encode($obj);	
	
}

			//--------REMOVED--------
function SetRemoved(){
	$app=instance();
	date_default_timezone_set("UTC");
	$db=database();
	$data = array();
	

	$json = $app->request->getBody();
    $bike = json_decode($json, true); 
	$brand = $row_id[0]['row_id'];
	$model = $table[0]['table'];
	$model = $user_id[0]['user_id'];
	$model = $remove_id[0]['remove_id'];
	$create_date = $update_date;

	$sql = "insert into removed_rows (row_id,table,user_id,remove_id,create_date) values(:row_id,:table,:user_id,:remove_id,:create_date)";
	
	$statement = $db->prepare($sql);
	$statement->bindValue(':row_id', $row_id);
	$statement->bindValue(':table', $table);
	$statement->bindValue(':user_id', $user_id);
	$statement->bindValue(':remove_id', $remove_id);
	$statement->bindValue(':create_date', $create_date);	
    $statement->execute();

	
	$obj =[];
	
	echo json_encode($obj);	
	
}

function xpto(){

	/*
		{
			"Bikes": [
				{
					"id": "1",
					"brand": "Scott",
					"model": "spark"
				},
				{
					"id": "5",
					"brand": "Scott",
					"model": "spark1"
				}
			]
		}

	*/
}




}
 