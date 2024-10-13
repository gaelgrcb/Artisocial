<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){


        //Modificar el request
        $request->request->add(['username' => Str::slug($request->username)]);

        //validaciones
        $this->validate($request, [
            'name' => 'required|min:4',
            'username' => 'required|unique:users|min:5|max:30',
            'email' => 'required|email|max:50|unique:users',
            'password' => 'required|min:4|confirmed'
        ]);

        User::create([
            /*
              clave => valor
             'name' => $request->name,
            la clave es el nombre que lleva la base de datos de la tabla usuarios
            y el valor es lo que captura el usuario en el formario se hace un $request y utiliza
            el operador -> para acceder a esa propiedad del formulario
            */
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        //redireccionar al usuario
        return redirect()->route('posts.index');
    }
}

