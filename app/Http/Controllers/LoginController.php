<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    // Mostrar el formulario de login
    public function showLoginForm()
    {
        return view('auth.login'); // Asegúrate de que tengas este archivo login.blade.php
    }

    // Manejar el login
    public function login(Request $request)
    {
        // Validar los datos
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Intentar autenticar al usuario
        if (Auth::attempt($credentials)) {
            // Redirigir al index si la autenticación fue exitosa
            return redirect()->intended('index');
        }

        // Volver a la página de login con un mensaje de error si falla
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }

    // Cerrar sesión
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
