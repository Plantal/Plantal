<?php


namespace App\Models;


use App\Core\MVC\Model;

class Mteste extends Model{
	
function teste2($args){
    $db=database();
    $obj = (object) [
		
		"root"=>(object)["price" =>""]
];
$datas = stripcslashes($args);
    
    $sql = "select * from pecas where Id in ($datas)";
    $total=0;
	$i=0;
    foreach ($db->query($sql) as $row) {
	$total +=$row['Price'];
      $data = (object)[
		 "root"=>(object)array("price"=>$total)
		];
      $i++;
    }
	
	echo json_encode($data);
	
}
function teste1($args){
    $db=database();
    $obj = (object) [
		
		"root"=>(object)["price" =>""]
];
$datas = stripcslashes($args);
    $arr=explode(",",$args);
    
    $total=0;
	
	
	
    for($j=0;j<count($arr);$j++) {
		$sql = "select * from pecas where Id = $arr[$j]";
		$row = $db->query($sql);
		$total +=$row['Price'];
		  $data = (object)[
			 "root"=>(object)array("price"=>$total)
			];
		  
    }
	
	echo json_encode($data);
	
}

function teste($args){
    $db=database();
    $obj = (object) [
"root"=>(object)["price" =>""]
];
$datas = stripcslashes($args);
    $arr = explode(",",$args);
	$total=0;
	for($i=0;$i<count($arr);$i++){
    $sql = "select Price from pecas where Id =".$arr[$i];
	$row = $db->prepare($sql);
	$row->execute();
	$item = $row->fetch(\PDO::FETCH_OBJ);
	$total+=$item->Price;
	}
   $data = (object)[
"root"=>(object)array("price"=>$total)
];

   
echo json_encode($data);
}
}
 