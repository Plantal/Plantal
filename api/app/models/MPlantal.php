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

function get_plant($q){
    
	$db=database();

    $data = array();

	$sql = "select * from planta where nomeCientifico = :q or nomeComum = :q1";

	
	$statement = $db->prepare($sql);

    $statement->bindValue(':q', $q);

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