<?php
//index.php
session_start();

?>
<html>
 <head>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <title>Webslesson Tutorial</title>
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="css/stylelogin.css">
  <link rel="stylesheet" type="text/css" href="css/inicial.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  #box
  {
   width:100%;
   max-width:500px;
   border:1px solid #ccc;
   border-radius:5px;
   margin:0 auto;
   padding:0 20px;
   box-sizing:border-box;
   height:270px;
  }
  </style>
 </head>
 <body>
  <div class="container">
   <h2 align="center">How to Use Ajax with PHP for Login with Shake Effect</h2><br /><br />
   <div id="box">
    <br />
    <form method="post">
     <div class="form-group">
      <label>Username</label>
      <input type="text" name="username" id="username" class="form-control" />
     </div>
     <div class="form-group">
      <label>Password</label>
      <input type="password" name="password" id="password" class="form-control" />
     </div>
     <div class="form-group">
      <input type="button" name="login" id="login" class="btn btn-success" value="Login" />
     </div>
     <div id="error"></div>
    </form>
    <br />
   </div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 $('#login').click(function(){
  var username = $('#username').val();
  var password = $('#password').val();
  if($.trim(username).length > 0 && $.trim(password).length > 0)
  {
   $.ajax({
    url:"trylogin.php",
    method:"POST",
    data:{username:username, password:password},
    cache:false,
    beforeSend:function(){
     $('#login').val("connecting...");
    },
    success:function(data)
    {
        console.log(data);
     if(data)
     {
         if(data == "carlaramos"){

          window.location.replace("admin_tables.php");
    //  $("body").load("flora.ipvc.pt/workspace/adminpages/admin_tables.php").hide().fadeIn(1500);
     }else{

      window.location.replace("tables.php");

        //$("body").load("/Projeto_Plantal/workspace/adminpages/tables.php").hide().fadeIn(1500);

     }
     }
     else
     {
      var options = {
       distance: '40',
       direction:'left',
       times:'3'
      }
      $("#box").effect("shake", options, 800);
      $('#login').val("Login");
      $('#error').html("<span class='text-danger'>Invalid username or Password</span>");
     }
    }
   });
  }
  else
  {

  }
 });
});
</script>