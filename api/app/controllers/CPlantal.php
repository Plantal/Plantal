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
  function get_project(){
    $db=new MPlantal();

    $db->get_project();
  }
  function get_stats(){
    $db=new MPlantal();

    $db->get_stats();
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
   //____________________PUT ____________________

   function set_account($body){
    $db=new MPlantal();

    $db->set_account($body);
  }
    //____________________DELETE ____________________
    function del_account($user){
      $db=new MPlantal();
  
      $db->del_account($user);
    }
}