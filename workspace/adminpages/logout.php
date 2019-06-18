<?php   
session_start(); 
unset($_SESSION[‘ativa’]);
session_destroy(); 


header("location: login.php"); 

?>