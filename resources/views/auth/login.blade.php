@extends('layout.public')
@section('content')
    <p class="h1 mt-5 ms-5 mb-5 text-center">Entrar</p>

    <form method="POST" action="{{url('login')}}" enctype="multipart/form-data">
        @csrf

        <div class="col-6  mb-3 ms-5">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Introduzca email">
        </div>

        <div class="col-6 ms-5 mb-3">
            <input type="password" name="password" class="form-control mx-auto" id="floatingPassword" placeholder="Introduzca su Contraseña">
        </div>

        <div class="col-2 ms-5">
            <button type="submit " href="{{url('home')}}" class="btn btn-danger">Entrar</button>
        </div>
        <strong>
            <p class="mt-5 ms-2 mb-5 text-center">¿No tienes cuenta? <a class="link-primary"  href="{{url('register')}}"> ¡Regístrate!</a></p>
            </p>
        </strong>
    </form>
@endsection

{{--<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
--}}
