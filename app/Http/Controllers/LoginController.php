<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    /*
     Mostrar formulario de login
     */
    public function index()
    {
        return view('home.inicio');
    }

    /*
     Procesar login
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

      // Validar reCAPTCHA
    if (!$request->filled('g-recaptcha-response')) {

        return back()->with(
            'error',
            'Debes confirmar que no eres un robot.'
        );
    }


        // Buscar usuario por correo
        $usuario = DB::table('formatos')
            ->where('email', $request->email)
            ->first();

        // Si no existe el correo
        if (!$usuario) {
            return back()->with(
                'error',
                'Correo o contraseña incorrectos'
            );
        }

        /*
        Validar contraseña o teléfono
        */

        $passwordCorrecta = Hash::check(
            $request->password,
            $usuario->password
        );

        $telefonoCorrecto =
            $request->password == $usuario->telefono;

        if (!$passwordCorrecta && !$telefonoCorrecto) {

            return back()->with(
                'error',
                'Correo o contraseña incorrectos'
            );
        }

        /*
        Crear sesión
        */

        session([
            'nombre' => $usuario->nombre,
            'matricula' => $usuario->matricula,
            'telefono' => $usuario->telefono,
            'email' => $usuario->email,
            'login_success' => true
        ]);

        /*
        Admin
        */

        if ($usuario->email == 'admin@admin.com') {

            return redirect()
                ->route('admin');
        }

        /*
        Usuario normal
       
        */

        return redirect()
            ->route('session');
    }

    /*
     Cerrar sesión
     */
public function logout(Request $request)
{
    $request->session()->flush();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect()->route('inicio.web');
}
}