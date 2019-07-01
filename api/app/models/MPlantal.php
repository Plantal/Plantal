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

				"username"=>$item->username,
				"admin" =>$item->admin

				];

		array_push($data,$obj);	

	}

	echo json_encode($data);	

}

function get_account($user){

	$db=database();

    $data = array();

	$sql = "select * from users where iduser = :user";

	
	$statement = $db->prepare($sql);

    $statement->bindValue(':user', $user);	

    $statement->execute();



	while($item = $statement->fetch(\PDO::FETCH_OBJ)){

		

		$obj = (Object)[

     			"username"=>$item->username,
				"password" =>$item->password,
				"email" =>$item->email,
				"nome" =>$item->nome,
				"tipo" =>$item->tipo,
				"ano" =>$item->ano,
				"turma" =>$item->turma,
				"data_nascimento" =>$item->data_nascimento


				];

		array_push($data,$obj);	

	}

	echo json_encode($data);	

}

function get_stats(){
	$db=database();

    $data = array();

	$sql = "SELECT p.nome,count(1) AS 'n_plantas' FROM projeto p JOIN projeto_planta pp ON pp.projetoId = p.idProjeto GROUP BY p.nome";

	
	$statement = $db->prepare($sql);
	

    $statement->execute();



	while($item = $statement->fetch(\PDO::FETCH_OBJ)){

		

		$obj = (Object)[

     			"nome"=>$item->nome,
				"n_plantas" =>$item->n_plantas
				];

		array_push($data,$obj);	

	}

	echo json_encode($data);	

}


function get_project(){

	$db=database();

    $data = array();

	$sql = "SELECT p.idProjeto, p.nome, p.latitude, p.longitude, pl.nomeCientifico, pl.nomeComum, g.latitude as 'lat_plant', g.longitude as 'lon_plant' FROM projeto p left join projeto_plantal pp on pp.projetoId = p.idProjeto left join geolocal g on g.idGeolocal = pp.geocodeId left join planta pl on pl.idPlanta = pp.plantaId";

	
	$statement = $db->prepare($sql);
	

    $statement->execute();



	while($item = $statement->fetch(\PDO::FETCH_OBJ)){

		

		$obj = (Object)[

     			"idProjeto"=>$item->idProjeto,
				"nome" =>$item->nome,
				"latitude" =>$item->latitude,
				"longitude" =>$item->longitude,
				"nomeCientifico" =>$item->nomeCientifico,
				"nomeComum" =>$item->nomeComum,
				"lat_plant" =>$item->lat_plant,
				"lon_plant" =>$item->lon_plant


				];

		array_push($data,$obj);	

	}

	echo json_encode($data);	
}


function get_plant($q){
    
	$db=database();

    $data = array();

	$sql = "select * from planta where nomeCientifico like :query or nomeComum = :q1";
	$query = "%".$q."%";
	
	$statement = $db->prepare($sql);

    $statement->bindValue(':query', $query);

    $statement->bindValue(':q1', $q);	

    $statement->execute();



	while($item = $statement->fetch(\PDO::FETCH_OBJ)){

		

		$obj = (Object)[

			"nomeCientifico" => $item->nomeCientifico,
			"nomeComum" => $item->nomeComum,
			"especie" => $item->especie,
			"familia" => $item->familia,
			"ordem" => $item->ordem,
			"fotosURL" => $item->fotosURL,
			"qrcode" => $item->qrcode,
			"descricao" => $item->descricao

				];
	 array_push($data,$obj);

	}

	echo json_encode($data);	
  }



function register($body){
    $db=database();
	$json = json_decode($body);



	
    
    $sql = "insert into users(username,password,email,nome,tipo,ano,turma,data_nascimento,admin) values(:username,:password,:email,:nome,:tipo,:ano,:turma,:data_nascimento,:admin)";
	$statement = $db->prepare($sql);
	$statement->bindValue(':username', $json->username);
	$statement->bindValue(':password',$json->password);
	$statement->bindValue(':email', $json->email);
	$statement->bindValue(':nome', $json->nome);
	$statement->bindValue(':tipo', $json->tipo);
	$statement->bindValue(':ano', $json->ano);
	$statement->bindValue(':turma', $json->turma);
	$statement->bindValue(':data_nascimento', $json->data_nascimento);
	$statement->bindValue(':admin',  $json->admin);
    $statement->execute();
  

    $obj =(Object)["ok"=>1];
	
	echo json_encode($obj);
}

function del_account($user){
	$db=database();
	$sql = "DELETE FROM USERS WHERE iduser=:user";
	$statement = $db->prepare($sql);
	$statement->bindValue(':user', $user);
	$statement->execute();
  

    $obj =(Object)["ok"=>1];
	
	echo json_encode($obj);
}

////

function set_account($body){
    $db=database();
	$json = json_decode($body);



	
    
	$sql = "update users set password = :password,email = :email,nome=:nome,ano = :ano, turma=:turma, data_nascimento = :data_nascimento where iduser = :iduser";
	
	$statement = $db->prepare($sql);
	$statement->bindValue(':iduser',  $json->iduser);
	$statement->bindValue(':password',$json->password);
	$statement->bindValue(':email', $json->email);
	$statement->bindValue(':nome', $json->nome);
	$statement->bindValue(':ano', $json->ano);
	$statement->bindValue(':turma', $json->turma);
	$statement->bindValue(':data_nascimento', $json->data_nascimento);
	
    $statement->execute();
  

    $obj =(Object)["ok"=>1];
	
	echo json_encode($obj);
}

/////

function addPlant($body){
    $db=database();
	$json = json_decode($body);


    $sql = "insert into planta(nomeCientifico,nomeComum,especie,familia,ordem,fotosURL,qrcode,descricao) values(:nomeCientifico,:nomeComum,:especie,:familia,:ordem,:fotosURL,:qrcode,:descricao)";
	$statement = $db->prepare($sql);
	$statement->bindValue(':nomeCientifico', $json->nomeCientifico);
	$statement->bindValue(':nomeComum',$json->nomeComum);
	$statement->bindValue(':especie', $json->especie);
	$statement->bindValue(':familia', $json->familia);
	$statement->bindValue(':ordem', $json->ordem);
	$statement->bindValue(':fotosURL', $json->fotosURL);

	$statement->bindValue(':qrcode', $json->qrcode);
	$statement->bindValue(':descricao',  $json->descricao);
    $statement->execute();
  

    $obj =(Object)["ok"=>1];
	
	echo json_encode($obj);
}
}