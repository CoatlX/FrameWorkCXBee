<!DOCTYPE html>
<html lang="es">
<head>
    <meta href="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X_UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <script src="<?php echo PLUGINS.'waitMe/waitMe.min.js'?>"></script>
    <link rel="stylesheet" href="<?php echo PLUGINS.'waitMe/waitMe.min.css'?>">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    
    <title><?php echo isset($d->title) ? $d->title.' - '.get_sitename() : 'Bienvenido - '
    .get_sitename() ?></title>
</head>
<body class="<?php echo isset($d->bg) && $d->bg === 'dark' ? 'bg-dark' : 'bg-white' ?>" 
style="padding: 50px 0px;">

<div class = "container maxwidthContainer " style="padding-bottom: 200px;">
        <div class="row row d-flex justify-content-center">
            <div class="col-xl-12 text-center position-absolute end-0 offset-xl-3">
                <img src="<?php echo IMAGES.'coatlx-logo-mod.png' ?> " alt="CoatlX White" 
                style = "width: 200px;">
                <h2 class="mt-1 mb-3 <?php echo isset($d->bg) && $d->bg === 'dark' ? 'text-white' : 'text-dark' ?>" style =  ><span class="text-danger">CoatlX</span> Framework </h2>
            </div>
        </div>
        <!--  coatlex@gmail.com
                -->
</div>

       