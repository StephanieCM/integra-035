<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class InicioController extends Controller
{
    //ver login
    public function verLogin(){
        return view('auth/login');
    }

    //cerrar sesion
    public function cerrarSesion(){
        Auth::logout();
        $i=null;
        return redirect('/');
    }

    //comparacion de datos con la BD
    public function login(Request $request){
        
        $credentials = $request->only('usuario', 'password');

        //si los datos concuerdan con la bd continua
        if (Auth::attempt($credentials)) {
                return redirect('/inicio');
            }else{
                return redirect('/');
            }
    }
}
