<?php 

function log_user_in($username, $password){


	require_once ('connect.php');

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

	$sql = "SELECT * FROM users WHERE  username='".$username."' AND password='".$password."'";

	$query = mysqli_query($connect,$sql);
$username = ($_POST["username"]);
	$result = $connect->query($sql);
	
		if (mysqli_num_rows($query) > 0) {
    
				while($row = $result->fetch_assoc()) {
					$_SESSION["username"]=$row["username"];
			$_SESSION["id"]=$row["id"];

		header('Location: admin_tables.php');	

	}

} else {

	
           
	header('Location: login.php');
	$_SESSION["message"] = "Login Inválido"; 


	
}






}



//exit();
















function display_message(){
	echo '<div style="margin-top: 1px">';
			echo '<b style="color:red;">'.$_SESSION['message'].'</b>';
			unset($_SESSION['message']);
	echo '</div>';
}





?>