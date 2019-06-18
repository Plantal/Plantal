<?php  
 require_once("connect.php"); 
 if(!isset($_SESSION['ativa'])){
  header('Location: login.php');

}
    $user = ($_POST["user"]);
	$password = ($_POST["pass"]);
	$email = ($_POST["email"]);

    
    $verificar = "SELECT username  FROM users WHERE username='".$user."' ";
    $result = mysqli_query($connect,$verificar);
    if ($result->num_rows >0) {
      echo "<h3>Esta planta já está registada!</h3>";
    }else{
	
    
     
     $registar = mysqli_query($connect,"INSERT INTO users (username, password, email) VALUES ('$user','$password','$email')");
		
		header('Location: admin_users.php');
    }

?>