<?php
    header('Content-Type: application/json');
    include('conectar.php');
    
    if($_POST['nombre'] == '' ||  $_POST['precio'] =="" || $_POST['codigo'] ==""){
        echo json_encode ("error");
    }else{
              
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $codigo = $_POST['codigo'];

        if (empty($_FILES['imagen']['name'])) {
            $imagen = '';
        }else{
            $prefijo = substr(md5(uniqid(rand())),0,6);
            $imagen =  $prefijo."-".$_FILES['imagen']['name'];
        }

        //CARGAR IMAGEN
		if ($imagen != "") {
            $destino =  "img/producto/".$imagen;
            copy($_FILES['imagen']['tmp_name'],$destino); 
           }else{
                $imagen = 'sinfoto.jpg';
        }
      
        //Insertar en la db
        $sql = $link->prepare('INSERT INTO tbl_producto (nombre, precio, codigo, imagen) VALUES (?,?,?,?)');
        $sql->bindParam(1, $nombre);
        $sql->bindParam(2, $precio);
        $sql->bindParam(3, $codigo);
        $sql->bindParam(4, $imagen);
            if($sql->execute()){
                echo json_encode ("Datos almacenados");
                }else{
                echo json_encode ("error");
            }
       }
   
    
?>
