@extends('layout.public')
@section('content')
    <form method="POST" class="justify-content-center" action="{{url('register')}}" enctype="multipart/form-data">
        @csrf
        <p class="h1 mt-5 mb-4 text-center">Registro</p>




        <div class="row w-100 justify-content-center ms-1 mb-3">
            <div class="col-3">
                <input type="text" name="name" class="form-control" id="inputName3" placeholder="Nombre">
            </div>
        </div>

        <div class="row w-100  justify-content-center mb-3 ms-1">
            <div class="col-3">
                <input type="email" name="email" class="form-control " id="inputName3" placeholder="Introduzca email">
            </div>
        </div>
        <div class="row w-100 justify-content-center mb-3 ms-1">
            <div class="col-3">
                <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Introduzca contraseña">
            </div>
        </div>
        <div class="row w-100 justify-content-center mb-3 ms-1">
            <div class="col-3">
                <input type="password" name="password_confirmation" class="form-control" id="inputName3" placeholder="Repita contraseña">
            </div>
        </div>
        <div class="row justify-content-center mt-4 mb-3">
            <div class="col-1">
                <button type="submit" class="btn btn-primary" href="{{url('home')}}">Registrarme</button>
            </div>
        </div>
        </div>
    </form>
@endsection


