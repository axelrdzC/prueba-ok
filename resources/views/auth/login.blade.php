@extends('layouts.guest')

@section('content')
<div class="container d-flex justify-content-center align-items-center">
    <div class="row w-100 gap-5" style="max-width: 1000px;">

        <div class="col-lg-4 col-md-6 d-flex flex-column justify-content-center p-4">
            <h1 class="fw-bold mb-3">Bienvenido 👋</h1>
            <p class="mb-4">Today is a new day. It's your day. You shape it. Sign in to start managing your inventory.</p>
            
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email"
                           placeholder="Example@email.com" required autofocus>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="row">
                        <label for="password" class="form-label w-25">Password</label>
                        <div class="text-end w-75">
                            @if (Route::has('password.request'))
                                        <a class="text-decoration-none" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                            @endif
                        </div>
                    </div>
                    <input id="password" class="form-control @error('password') is-invalid @enderror" type="password"
                           name="password" placeholder="Al menos 8 caracteres" required>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <button class="btn btn-primary w-100" type="submit">Iniciar Sesión</button>
                </div>

                <div class="d-flex align-items-center justify-content-center mb-3">
                    <span class="mx-2">- o -</span>
                </div>

                <button class="btn btn-outline-secondary text-dark w-100 mb-4">
                    <img src="https://pluspng.com/img-png/google-logo-png-open-2000.png" alt="Google logo" style="width: 20px; margin-right: 8px;">
                    Iniciar Sesión con Google
                </button>
            </form>

            <p class="text-center">Aun no tienes una cuenta? <a href="{{ route('register') }}" class="text-decoration-none">Regístrate</a></p>
        </div>

        <!-- Columna de la imagen -->
        <div class="col-lg-7 col-md-2 d-flex justify-content-center align-items-center">
            <img src="{{ asset('img/login-guy.png') }}" alt="Login illustration" class="img-fluid ml-10" style="max-width: 100%; height: auto;">
        </div>
    </div>
</div>
@endsection
