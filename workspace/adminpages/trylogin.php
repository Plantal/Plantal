<?php 

function log_user_in($username, $password){
	require_once ('connect.php');

	$sql = "SELECT * FROM users WHERE  username='".$username."' AND password='".$password."'";

	$query = mysqli_query($connect,$sql);

	$result = $connect->query($sql);

if (mysqli_num_rows($query) > 0) {
    
	while($row = $result->fetch_assoc()) {
		$_SESSION["username"]=$row["username"];
		$_SESSION["id"]=$row["id"];

		header('Location: plantas.php');

	}

} else {

	
    $_SESSION["message"] = "Login Inválido";        
	header('Location: login.php');


	
}
exit();



}


function display_message(){
	echo '<div class="msg">';
			echo '<b style="color:red;">'.$_SESSION['message'].'</b>';
			unset($_SESSION['message']);
	echo '</div>';
}





?>