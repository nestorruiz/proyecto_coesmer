<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Iniciar sesi&oacute;n</title>
    {!! Html::style('assets/css/bootstrap.css') !!}
    {!! Html::style('styles/login.css') !!}
</head>
<body>
    <div  id="cabecera" class="container-fluid">
        <header>
            <div class="pull-left col-md-2">
                {{ Html::image('imagenes/logo1.png') }}
            </div>
            <div class="pull-left col-md-2 col-md-offset-3">
                {{ Html::image('imagenes/logo2.png') }}
            </div>
            <div class="pull-right col-md-2 col-md-offset-2">
                {{ Html::image('imagenes/logo3.png') }}
            </div>
        </header>
    </div>
</body>
</html>