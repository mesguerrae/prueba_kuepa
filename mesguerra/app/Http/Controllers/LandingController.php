<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registro;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegistroCreateRequest;
use App\Http\Requests\RegistroUpdateRequest;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Storage;


class LandingController extends Controller
{
    public function crear()
    {
        $registro = Registro::all();
        return view('landing.index', compact('registro'));
    }

    public function index()
    {
        $registro = Registro::all();
        return view('landing.crear', compact('registro'));
    }


    public function success()
    {
        $registro = Registro::all();
        return view('landing.success', compact('registro'));
    }


    public function store(RegistroCreateRequest $request)
    {
        // Instancio al modelo Jugos que hace llamado a la tabla 'jugos' de la Base de Datos
        $registro = new Registro;

        // Recibo todos los datos del formulario de la vista 'crear.blade.php'
        $registro->nombre = $request->nombre;
        $registro->apellidos = $request->apellidos;
        $registro->email = $request->email;
        $registro->telefono = $request->telefono;
        $registro->programa = $request->programa;
        $registro->contactado = 'No';

        $registro->save();

        // Hago una redirección a la vista principal con un mensaje
        return redirect('landing/success')->with('message', 'Guardado Satisfactoriamente !');
    }

}
