@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

<<<<<<< HEAD
        .overlay {
            background: var(--primary-color);
            background: linear-gradient(45deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: var(--button-text-color);
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .container.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .container.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .container.right-panel-active .overlay-right {
            transform: translateX(20%);
        }

        h1 {
            font-weight: bold;
            margin: 0 0 20px;
            font-size: 32px;
            color: var(--text-color);
        }

        p {
            font-size: 16px;
            font-weight: 300;
            line-height: 24px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
            color: var(--text-color);
        }

        form {
            background-color: var(--background-color);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        input {
            background-color: var(--input-background);
            border: none;
            border-bottom: 2px solid var(--primary-color);
            padding: 15px;
            margin: 10px 0;
            width: 100%;
            font-size: 16px;
            color: var(--text-color);
            transition: border-color 0.3s ease;
        }

        input:focus {
            outline: none;
            border-bottom-color: var(--secondary-color);
        }

        button {
            border-radius: 30px;
            border: none;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: var(--button-text-color);
            font-size: 14px;
            font-weight: bold;
            padding: 15px 50px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in, box-shadow 0.3s ease;
            cursor: pointer;
            margin-top: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }

        button:active {
            transform: translateY(-1px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }

        .social-container {
            margin: 20px 0;
        }

        .social-container a {
            border: 1px solid var(--text-color);
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 5px;
            height: 50px;
            width: 50px;
            transition: all 0.3s ease;
        }

        .social-container a:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .social-container img {
            width: 24px;
            height: 24px;
            object-fit: contain;
        }

        #theme-toggle {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
            background-color: var(--background-color);
            color: var(--text-color);
            border: 2px solid var(--text-color);
            border-radius: 30px;
            padding: 10px 20px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        #theme-toggle:hover {
            background-color: var(--text-color);
            color: var(--background-color);
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <button id="theme-toggle">Cambiar Tema</button>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form>
                <h1>Crear Cuenta</h1>
                <div class="social-container">
                    <a href="#" aria-label="Registrarse con Facebook"><img src="https://cdn.icon-icons.com/icons2/3398/PNG/512/circle_facebook_logo_icon_214753.png" alt="Facebook" /></a>
                    <a href="#" aria-label="Registrarse con Google"><img src="https://foroalfa.org/imagenes/ilustraciones/1204.jpg" alt="Google" /></a>
                    <a href="#" aria-label="Registrarse con LinkedIn"><img src="https://static.vecteezy.com/system/resources/previews/023/986/970/original/linkedin-logo-linkedin-logo-transparent-linkedin-icon-transparent-free-free-png.png" alt="LinkedIn" /></a>
                </div>
                <span>o usa tu correo para registrarte</span>
                <input type="text" placeholder="Nombre" />
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Contraseña" />
                <button>Registrarse </button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form>
                <h1>Iniciar Sesión</h1>
                <div class="social-container">
                    <a href="#" aria-label="Iniciar sesión con Facebook"><img src="https://cdn.icon-icons.com/icons2/3398/PNG/512/circle_facebook_logo_icon_214753.png" alt="Facebook" /></a>
                    <a href="#" aria-label="Iniciar sesión con Google"><img src="https://foroalfa.org/imagenes/ilustraciones/1204.jpg" alt="Google" /></a>
                    <a href="#" aria-label="Iniciar sesión con LinkedIn"><img src="https://static.vecteezy.com/system/resources/previews/023/986/970/original/linkedin-logo-linkedin-logo-transparent-linkedin-icon-transparent-free-free-png.png" alt="LinkedIn" /></a>
                </div>
                <span>o usa tu cuenta</span>
                <input type="text" placeholder="Nombre" />
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Contraseña" />
                <a href="#">¿Olvidaste tu contraseña?</a>
                <button><a href="#">Iniciar Sesión<</a>/button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>¡Bienvenido de nuevo!</h1>
                    <p>Para mantenerte conectado, por favor inicia sesión con tu información personal</p>
                    <button class="ghost" id="signIn">Iniciar Sesión</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>¡Hola, Amigo!</h1>
                    <p>Ingresa tus datos y comienza un viaje con nosotros</p>
                    <button class="ghost" id="signUp"><a href="#"> Registrarse</a></button>
=======
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
>>>>>>> 15a316ed3b642a1e9888760108a2de72bb0cff74
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
