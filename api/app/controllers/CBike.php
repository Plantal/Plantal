<?php


namespace App\Controllers;

use App\Core\MVC\Controller;

use App\Models\MBikes;

class CBike extends Controller {

    //construct
    function onInit(){}

  //____________________GETS ROUTES____________________
  function GetBikes($date){
	  $db=new MBikes();
      $db->GetBikes($date);
  }

  function GetUsers($date){
	  $db=new MBikes();
      $db->GetUsers($date);
  }

  function GetRents($user_id,$date){
	  $db=new MBikes();
      $db->GetRents($user_id,$date);
  }

  function GetRoutes($user_id,$date){
	  $db=new MBikes();
      $db->GetRoutes($user_id,$date);
  }

  function GetRemoved($user_id,$date){
	  $db=new MBikes();
      $db->GetRemoved($user_id,$date);
  }
  //____________________POSTS ROUTES____________________

  

  function SetUsers(){
	  $db=new MBikes();
      $db->SetUsers();
  }

  function SetRents(){
	  $db=new MBikes();
      $db->SetRents();
  }

  function SetRoutes(){
	  $db=new MBikes();
      $db->SetRoutes();
  }

  function SetRemoved(){
	  $db=new MBikes();
      $db->SetRemoved();
  }

} 