@extends('layout.public')
@section('content')
    <form method="POST" action="{{url('/tasks/')}}" enctype="multipart/form-data">
        @csrf
    <div class="row  justify-content-center ">
        <div class="form-floating d-flex mb-3 col-5">
            <input type="text" name="title" class="form-control" id="floatingInput" placeholder="Título de la tarea">
            <label for="floatingInput" class="ms-2">Título de la tarea</label>
        </div>
        <div class="form-floating d-flex mb-3 col-5">
            <input type="date" class="form-control" name="date" id="floatingInput" placeholder="Fecha de entrega">
            <label for="floatingInput" class="ms-2">Fecha de entrega</label>
        </div>
        <div class="form-floating d-flex col-5">
            <textarea class="form-control" id="floatingTextarea" name="description" style="height: 300px"></textarea>
            <label for="floatingTextarea" class="ms-3">Descripción de la tarea</label>
        </div>
        <div class="mt-3 col-8">
            <a href=""><button type="button" class="btn btn-secondary mx-auto d-block col-2">Subir Tarea</button></a>
        </div>
    </div>
    </form>
    @endsection
