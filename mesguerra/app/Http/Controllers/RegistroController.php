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

class RegistroController extends Controller
{
    
 
    
    //
    public function crear()
    {
        $registro = Registro::all();
        return view('admin.registro.crear', compact('registro'));
    }

    public function index()
    {
        $registro = Registro::all();
        return view('admin.registro.index', compact('registro'));
    }

    public function actualizar($id)
    {
        $registro = Registro::find($id);
        return view('admin/registro.actualizar', ['registro' => $registro]);
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
        $registro->contactado = $request->contactado;

        $registro->save();

        // Hago una redirección a la vista principal con un mensaje
        return redirect('admin/registro')->with('message', 'Guardado Satisfactoriamente !');
    }

    public function update(RegistroUpdateRequest $request, $id)
    {
        // Recibo todos los datos desde el formulario Actualizar
        $registro = Registro::find($id);
        $registro->nombre = $request->nombre;
        $registro->apellidos = $request->apellidos;
        $registro->email = $request->email;
        $registro->telefono = $request->telefono;
        $registro->programa = $request->programa;
        $registro->contactado = $request->contactado;

        // Actualizo los datos en la tabla 'jugos'
        $registro->save();

        // Muestro un mensaje y redirecciono a la vista principal
        Session::flash('message', 'Editado Satisfactoriamente !');
        return Redirect::to('admin/registro');
    }

    public function eliminar($id)
    {
        // Indicamos el 'id' del registro que se va Eliminar
        $registro = Registro::find($id);

        // Elimino el registro de la tabla 'jugos'
        Registro::destroy($id);

        // Muestro un mensaje y redirecciono a la vista principal
        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('admin/registro');
    }


    public function contactado($id)
    {
        // Indicamos el 'id' del registro que se va Eliminar
        $registro = Registro::find($id);
        if($registro->contactado == 'No'){
            $registro->contactado = 'Si';
            $registro->save();
            Session::flash('message', 'Actualizado Satisfactoriamente !');
            Session::flash('alert-class', 'alert-info'); 
            return Redirect::to('admin/registro');
        }else{
            Session::flash('message', 'Estudiante ya contactado !');
            Session::flash('alert-class', 'alert-danger'); 
            return Redirect::to('admin/registro');
        }



        // Muestro un mensaje y redirecciono a la vista principal

    }
}
