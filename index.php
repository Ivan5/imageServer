<?php
/**
 * Created by PhpStorm.
 * User: conve
 * Date: 25/11/2016
 * Time: 10:39 PM
 */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Subir imagenes al servidor</title>
    <style>
        body{
            background-color: aquamarine;
        }
        .estilo{
            background-color: darkgoldenrod;
            border: 2px solid darkgoldenrod;
            margin-top: 50px;
            padding-bottom: 20px;
            padding-left: 20px;
            padding-right: 20px;
            color: #fff;
        }
    </style>
</head>
<body>
<div id="container">
    <div id="row">
        <div class="col-md-8 col-md-offset-2 estilo">
            <h1 class="text-center">Upload images</h1>
            <form action="datosImagen.php" class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="imagen">Imagen: </label>
                    <input type="file" class="form-control" name="imagen" id="imagen" size="20">
                </div>
                <button type="submit" class="btn btn-success">Upload</button>
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
