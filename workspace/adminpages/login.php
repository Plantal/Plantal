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

  <link rel="stylesheet" href="css/stylelogin.css">
  <link rel="stylesheet" type="text/css" href="css/inicial.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

<script src="js/clica.js"></script>
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
   height:300px;
  }

  #container1 {
      width: 100%;
  position: relative;
  height: 100%;
  background-image: url("nature.jpg");
  background-position: center;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
  }
  </style>
 </head>
 <body style="background-image: url(css/nature.jpg)">
  <div class="container" style="margin-top: 150px">
   <div id="box" style="border-radius: 25px;height:530px;width:500px;background:linear-gradient(to bottom, rgba(146, 135, 187, 0.8) 0%, rgba(0, 0, 0, 0.6) 100%); padding: 35px">
   <div><p style="text-align:center"><img align="center" src="imgs/logo.png" style="width: 130px;  margin-top: 15px; max-height: 130px; margin-left: ;"></p></div>

    <form method="post" style="padding-left:80px" >
     <div class="form-group">
           <p>
     <svg class="login__icon name svg-icon" style="height:55px;width:55px; padding-bottom:15px;" viewBox="0 0 20 20">
        <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z">
        </path>
      </svg>
     
     
      <input type="text" name="username" id="username" class="form-control" style="width: 270px; background: transparent; color: white" placeholder='Username' " /> 
</p>    
</div>
     <div class="form-group">
     <svg class="login__icon pass svg-icon" style="height:55px;width:55px;padding-bottom:15px;" viewBox="0 0 20 20">
        <path d="M17.283,5.549h-5.26V4.335c0-0.222-0.183-0.404-0.404-0.404H8.381c-0.222,0-0.404,0.182-0.404,0.404v1.214h-5.26c-0.223,0-0.405,0.182-0.405,0.405v9.71c0,0.223,0.182,0.405,0.405,0.405h14.566c0.223,0,0.404-0.183,0.404-0.405v-9.71C17.688,5.731,17.506,5.549,17.283,5.549 M8.786,4.74h2.428v0.809H8.786V4.74z M16.879,15.26H3.122v-4.046h5.665v1.201c0,0.223,0.182,0.404,0.405,0.404h1.618c0.222,0,0.405-0.182,0.405-0.404v-1.201h5.665V15.26z M9.595,9.583h0.81v2.428h-0.81V9.583zM16.879,10.405h-5.665V9.19c0-0.222-0.183-0.405-0.405-0.405H9.191c-0.223,0-0.405,0.183-0.405,0.405v1.215H3.122V6.358h13.757V10.405z">
        </path>
      </svg>

      <input type="password" name="password" id="password" class="form-control" style="width: 270px; background: transparent; color: white" placeholder='Password' />
     </div>
     <div class="form-group" style="padding-top: 15px">
     <input type="button" name="login" id="login" class="btn btn-success" value="Login" style="margin-left: 180px;width:90px;height:50px;border-radius: 25px;" />
     <a class="log" style="width: 25px" onclick="redireccionarInicio()"> <svg class="svg-icon" viewBox="0 0 20 20">
  <path fill="none" d="M18.271,9.212H3.615l4.184-4.184c0.306-0.306,0.306-0.801,0-1.107c-0.306-0.306-0.801-0.306-1.107,0
  L1.21,9.403C1.194,9.417,1.174,9.421,1.158,9.437c-0.181,0.181-0.242,0.425-0.209,0.66c0.005,0.038,0.012,0.071,0.022,0.109
  c0.028,0.098,0.075,0.188,0.142,0.271c0.021,0.026,0.021,0.061,0.045,0.085c0.015,0.016,0.034,0.02,0.05,0.033l5.484,5.483
  c0.306,0.307,0.801,0.307,1.107,0c0.306-0.305,0.306-0.801,0-1.105l-4.184-4.185h14.656c0.436,0,0.788-0.353,0.788-0.788
  S18.707,9.212,18.271,9.212z"></path>
</svg></a> 
     
     
     </div>
     
     <div id="error" style="align-text: center"></div>
    </form>
    <br />
   </div>
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