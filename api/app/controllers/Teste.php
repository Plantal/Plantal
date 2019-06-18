<?php


namespace App\Controllers;

use App\Core\MVC\Controller;

use App\Models\Mteste;

class Teste extends Controller {

    //construct
    function onInit(){}

  function tt($args){
	   $args = str_replace("[","",$args);
	   $args = str_replace("]","",$args);
	   
      $db=new Mteste();
      $db->teste($args);
 

  }
} 