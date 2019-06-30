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
  function get_plant($q){

    $db=new MPlantal();

    $db->get_plant($q);
  }
  function get_account($user){

    $db=new MPlantal();

    $db->get_account($user);
  }
  //____________________POST ____________________
  function register($body){
    $db=new MPlantal();

    $db->register($body);
  }
  function AddPlant($body){
    $db=new MPlantal();

    $db->addPlant($body);
  }

}