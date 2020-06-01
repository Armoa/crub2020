<?php
 	header('Content-Type: application/json');
	include('conectar.php');
	$sql = $link->prepare('SELECT * FROM tbl_producto ORDER BY id DESC' );
	$sql->execute();

	$Producto = array();
	while($row=$sql->fetch(PDO::FETCH_ASSOC)){
    $Producto[] = $row;
 }
 
	echo json_encode($Producto)."\n";
?>