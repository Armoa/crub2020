<?php
	include('conectar.php');
	$Id = $_GET['id'];
	$sql = $link->prepare('DELETE FROM tbl_producto WHERE id = :Id');
	$rows = $sql->execute(array( ':Id' => $Id));
		if( $rows > 0 ){
			echo json_encode('OK');
		} else {
			echo json_encode('error');
		}

		
?>