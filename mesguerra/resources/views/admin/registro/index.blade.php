@extends('layouts.app')

@section('content')

      <div class="container mb-5">

          <div class="row">

            <div class="col-md-12">

              <h1 style="font-size: 28px;" class=" text-center">Registros prospectos</h1>

              <div class="header">
         <div class="container">
            <div class="row">

               <div class="col-md-5">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="input-group form">
                           <!--
                           <input type="text" class="form-control" placeholder="Buscar...">
                           <span class="input-group-btn">
                             <button class="btn btn-primary" type="button">Buscar</button>
                           </span>
                           -->
                      </div>
                    </div>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="navbar navbar-inverse" role="banner">
                      <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">
                          <li><a href="{{ route('admin/dashboard') }}">Administrador</a></li>
                        </ul>
                      </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="page-content">
        <div class="row">

          <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">

              <ul class="list-group">
                  <li class="list-group-item">
                    <a href="{{ route('admin/dashboard') }}"> Dashboard</a>
                  </li>
                  <li class="list-group-item">
                    <a href="{{ route('admin/registro') }}"> Registros</a>
                  </li>

              </ul>
            </div>
          </div>

            <div class="col-md-10">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin/dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Registros</li>
          </ol>
        </nav>

        <div class="row">

          <div class="col-md-12">

              <div class="content-box-large">

                <div class="panel-heading">
                <div class="panel-title"><h2>Contactos</h2></div>

              </div>

                <div class="panel-body">
                    @if(Session::has('message'))
                        <div class="alert {{ Session::get('alert-class', 'alert-info') }}"y" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif


<a href="{{ route('admin/registro/crear') }}" class="btn btn-success mt-4 ml-3">  Agregar </a>

                                  <section class="example mt-4">

                                    <div class="table-responsive">

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Programa</th>
            <th>Contactado</th>
        </tr>
    </thead>
    <tbody>
        @foreach($registro as $registr)
        <tr>
            <td class="v-align-middle">{{$registr->nombre}}</td>
            <td class="v-align-middle">{{$registr->apellidos}}</td>
            <td class="v-align-middle">{{$registr->email}}</td>
            <td class="v-align-middle">{{$registr->telefono}}</td>
            <td class="v-align-middle">{{$registr->programa}}</td>
            <td class="v-align-middle">{{$registr->contactado}}</td>

            <td class="v-align-middle">

                <form action="{{ route('admin/registro/eliminar',$registr->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return confirmarEliminar()">

                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <a href="{{ route('admin/registro/actualizar',$registr->id) }}" class="btn btn-primary">Editar</a>
                    <a href="{{ route('admin/registro/contactado',$registr->id) }}" class="btn btn-primary">Contactado</a>

                    <button type="submit" class="btn btn-danger">Eliminar</button>

                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

                                    </div>
                                  </section>



                </div>

              </div>

          </div>

        </div>

      </div>

      </div>

        </div>

            </div>

          </div>

          <hr>



         
        </div>
    <script type="text/javascript">

        function confirmarEliminar()
        {
        var x = confirm("Estas seguro de Eliminar?");
        if (x)
          return true;
        else
          return false;
        }

    </script>

        @endsection


