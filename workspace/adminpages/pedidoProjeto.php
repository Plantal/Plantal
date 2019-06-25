<?php 
	require 'projeto.php';
	$pro = new projeto;
	$pro->setId($_REQUEST['idProjeto']);
	$pro->setLat($_REQUEST['latitude']);
	$pro->setLng($_REQUEST['longitude']);
	$status = $pro->updateProjetosWithLatLng();
	if($status == true) {
		echo "Updated...";
	} else {
		echo "Failed...";
	}
 ?>