<?php


namespace App\Models;


use App\Core\MVC\Model;

class MPlantal extends Model{

	
	 //____________________GETS ____________________

			
function check_login($user_id,$pass){
	$db=database();
    $data = array();

	$sql = "select * from users where username = :user_id and password = :pass";
	
	$statement = $db->prepare($sql);
    $statement->bindValue(':user_id', $user_id);
    $statement->bindValue(':pass', $pass);	
    $statement->execute();

	while($item = $statement->fetch(\PDO::FETCH_OBJ)){
		
		$obj = (Object)[
				"user_id"=>$item->iduser,
				"username"=>$item->username
				];
		
		array_push($data,$obj);	
		
	}
	
	echo json_encode($data);	
	
}

}