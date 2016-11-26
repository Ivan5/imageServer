<?php
/**
 * Created by PhpStorm.
 * User: conve
 * Date: 25/11/2016
 * Time: 10:55 PM
 */

//recibimos los datos de la imagen
$nombreImagen =$_FILES["imagen"]['name']; //guardar el nombre e la imagen
$tipoImagen =$_FILES["imagen"]['type']; //guardar el tipo de la imagen
$tamanoImagen =$_FILES["imagen"]['size']; //guardar el tamaño e la imagen

if ($tamanoImagen <= 1000000){ ///solo se ejecuta le codigo cuando el tamaño de la imagen no sobre pasa
    if ($tipoImagen == "image/jpeg" || $tipoImagen == "image/png" || $tipoImagen == "image/gif"){//verificar solos los tipos de datos que nosotros queramos
        $carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/imagenes/'; //especificar la ruta donde se guardara la imagen en el servidor
        move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombreImagen); //mover la imagen de la carpeta temporal a la carpeta de destino final
    }else{
        echo "Este tipo de formato no es permitido";
    }
}else{
    echo "El tamaño de la imagen es demasiado grande";
}
