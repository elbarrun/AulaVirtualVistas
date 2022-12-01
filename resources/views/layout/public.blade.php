<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula Virtual Educación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">
</head>

<body>
<nav class="navbar navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">educacion</a>

        <?php if(Auth::check()): ?>
        <li class="nav-item justify-content-end">
            <a class="nav-link " aria-current="page" style="color: red;">Bienvenido, <?= Auth::user()->name;?></a>
        </li>

        <li class="nav-item me-2">
            <form action="{{url('logout')}}" method="POST">
                @csrf
                <button class="nav-link btn" aria-current="page" type="submit">Cerrar sesión</button>
            </form>
        </li>

        <?php else : ?>
        <li class="nav-item justify-content-end">
            <a class="navbar-brand" aria-current="page" href="{{url('login')}}">Usted no se ha identificado. (Acceder)</a>
        </li>
        <?php endif;?>
    </div>
</nav>

<div class="row m-4">
    <img class="col-4" src="img/logo-moodle.png" alt="">
    <img class="col-8" src="img/banner-moodle.png" alt="">
</div>

<div class="card m-3">
    <div class="card-body">
        <p class="card-text display-6">Aula Virtual Educación</p>
        <a href="landing.html" class="card-link">Página Principal</a>
        <a href="mensajes.html" class="card-link">Mensajes</a>
        <a href="tarea.html" class="card-link">Tareas</a>
    </div>
</div>


@yield('content')

<div class="container-fluid mt-3 p-3 ms-3 bg-dark">
    <p class="text-white">Usted no se ha identificado. (Acceder)</p>
    <img src="img/descarga.png" alt="moodle" srcset="">
    <p class="text-white">Resumen de retención de datos</p>
    <p class="text-white">Descargar la app para dispositivos móviles.</p>
</div>

<!--PROHIBIDO TOCAR-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
        crossorigin="anonymous"></script>
</body>

</html>
