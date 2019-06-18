<?php


namespace App\Controllers;

use App\Core\MVC\Controller;

use App\Models\MPlantal;

class CPlantal extends Controller {

    //construct
    function onInit(){}

  //____________________GETS ____________________
  function check_login($user_id,$pass){
	  $db=new MPlantal();
      $db->check_login($user_id,$pass);
  }
}