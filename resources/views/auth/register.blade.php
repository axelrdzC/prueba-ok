@extends('layouts.guest')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row w-100 gap-5" style="max-width: 1000px;">

        <div class="col-lg-4 col-md-6 d-flex flex-column justify-content-center p-4">
            <h1 class="fw-bold mb-3">Regístrate 👋</h1>
            <p class="mb-4">Hola, regístrate para comenzar a gestionar tu inventario.</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="input-group mb-3">
                    <input class="form-control" type="text" name="first_name" placeholder="{{ __('First name') }}" required
                           autocomplete="first_name" autofocus>
                </div>

                <div class="input-group mb-3">
                    <input class="form-control" type="text" name="last_name" placeholder="{{ __('Last name') }}" required
                           autocomplete="last_name">
                </div>

                <div class="input-group mb-3">
                    <input class="form-control" type="text" name="email" placeholder="{{ __('Email') }}" required
                           autocomplete="email">
                </div>

                <div class="input-group mb-3">
                    <input class="form-control @error('password') is-invalid @enderror" type="password"
                           name="password" placeholder="{{ __('Password') }}" required autocomplete="new-password">
                </div>

                <div class="input-group mb-4">
                    <input class="form-control @error('password_confirmation') is-invalid @enderror" type="password"
                           name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required
                           autocomplete="new-password">
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <button class="btn btn-primary w-100" type="submit">{{ __('Register') }}</button>
                </div>

                <div class="text-center">
                    <p class="text-center">¿Ya tienes una cuenta? <a href="{{ route('login') }}" class="text-decoration-none">Inicia Sesión</a></p>
                </div>
            </form>
        </div>

        <!-- Columna de la imagen -->
        <div class="col-lg-7 col-md-2 d-flex justify-content-center align-items-center">
            <img src="{{ asset('img/registro-guy.png') }}" alt="Register illustration" class="img-fluid" style="max-width: 80%; height: auto;">
        </div>
    </div>
</div>
@endsection
