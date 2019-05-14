<?php 


require_once ('connect.php');
session_start();

if (isset($_SESSION['ativa'])) {
	//	sessão	foi	retomada
	//...
} else {
	//	sessão	acabou	de	ser	criada
	$_SESSION['ativa'] = true;
	$_SESSION['user'] = $_POST["username"];
	//...
}
//	(...)
session_write_close();
$admin = ("carlaramos");

$id = ($_POST["iduser"]);
$nomeuser = ($_POST["username"]); 
$passuser = ($_POST["password"]);

$sql = "SELECT * FROM users WHERE  username='".$nomeuser."' AND password='".$passuser."'";

$query = mysqli_query($connect,$sql);


$result = $connect->query($sql);
if($nomeuser === $admin){
if (mysqli_num_rows($query) > 0) {


    // output data of each row
	while($row = $result->fetch_assoc()) {
		
		$_SESSION["username"]=$row["username"];
		$_SESSION["id"]=$row["id"];
		
		header('Location: admin_tables.php');

	
		
		
		
	}


} else {

	$error = "Dados de login invalidos";

	
}
} else {
	if (mysqli_num_rows($query) > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			
			$_SESSION["username"]=$row["username"];
			$_SESSION["id"]=$row["id"];
			
		
	
			header('Location: tables.php');
			
			
			
		}
	
	} else {
	
		
				 
		header('Location: login.php');
	
	
		
	}
}


?>