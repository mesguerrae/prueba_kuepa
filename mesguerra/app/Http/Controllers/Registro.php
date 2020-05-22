<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Registro extends Controller
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

    public function store(ItemCreateRequest $request)
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

    public function update(ItemUpdateRequest $request, $id)
    {
        // Recibo todos los datos desde el formulario Actualizar
        $registro = Registro::find($id);
        $registro->nombre = $request->nombre;
        $registro->apellidos = $request->apellidos;
        $registro->telefono = $request->telefono;
        $registro->email = $request->email;
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
}
