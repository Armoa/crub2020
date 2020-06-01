<?php
// try {
//    $link = new PDO('mysql:host=localhost;dbname=flatzi_db2', 'flatzi_us2', 'Armoa321*');
//    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    } catch(PDOException $e) {
//       echo 'Error conectando con la base de datos: ' . $e->getMessage();
//    }
?>

<?php
try {
	$link = new PDO('mysql:host=localhost;dbname=cms', 'root', 'admin');
	$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo 'Error conectando con la base de datos: ' . $e->getMessage();
	}
?>