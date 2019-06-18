<?php


namespace App\Controllers;

use App\Core\MVC\Controller;

use App\Models\MInsertPoint;

class CInsertPoint extends Controller {

    //construct
    function onInit(){}

  function InsertPoint($nome,$latitude,$longitude){
	  echo $nome;
	  //TODO validar parametros
      $db=new MInsertPoint();
      $db->InsertPoint($nome,$latitude,$longitude);
  }
  function GetMarker(){
	  $db=new MInsertPoint();
      $db->GetMarker();
  }
} 