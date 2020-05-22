<div class="row">
 <div class="col-md-12">
 <section class="panel">
 <div class="panel-body">

@if ( !empty ( $registro->id) )

 <div class="form-group">
 <label for="nombre" class="negrita">Nombre:</label>
 <div>
 <input class="form-control"  required="required" name="nombre" type="text" id="nombre" value="{{ $registro->nombre }}">
 </div>
 </div>

 <div class="form-group">
 <label for="apellidos" class="negrita">Apellidos:</label>
 <div>
 <input class="form-control" required="required" name="apellidos" type="text" id="apellidos" value="{{ $registro->apellidos }}">
 </div>
 </div>

 <div class="form-group">
 <label for="email" class="negrita">Email:</label>
 <div>
 <input class="form-control" required="required" name="email" type="email" id="email" value="{{ $registro->email }}">
 </div>
 </div>

 <div class="form-group">
 <label for="telefono" class="negrita">Telefono:</label>
 <div>
 <input class="form-control"  required="required" name="telefono" type="text" id="telefono" value="{{ $registro->telefono }}">
 </div>
 </div>


 <div class="form-group">
 <label for="programa" class="negrita">Programa:</label>
 <div>
 <select class="form-control"  required="required" name="programa"  id="programa" value="{{ $registro->programa }}">



    <option value="Bachillerato" @if ($registro->programa == "Bachillerato")
        selected="selected"
    @endif>Bachillerato</option>
    <option value="Ingles" @if ($registro->programa == "Ingles")
        selected="selected"
    @endif>Inglés</option>
    <option value="Preicfes" @if ($registro->programa == "Preicfes")
        selected="selected"
    @endif>Preicfes</option>
 </select>
 </div>
 </div>


 <div class="form-group">
 <label for="contactado" class="negrita">Contactado:</label>
 <div>
 <select class="form-control"   name="contactado" id="contactado" value="{{ $registro->contactado }}">
      <option value="Si" @if ($registro->contactado == "Si")
        selected="selected"
    @endif >Si</option>
      <option value="No" @if ($registro->contactado == "No")
        selected="selected"
    @endif>No</option>

 </select>
 </div>
 </div>

@else

<div class="form-group">
 <label for="nombre" class="negrita">Nombre:</label>
 <div>
 <input class="form-control"  required="required" name="nombre" type="text" id="nombre" >
 </div>
 </div>

 <div class="form-group">
 <label for="apellidos" class="negrita">Apellidos:</label>
 <div>
 <input class="form-control"  required="required" name="apellidos" type="text" id="apellidos" >
 </div>
 </div>

 <div class="form-group">
 <label for="email" class="negrita">Email:</label>
 <div>
 <input class="form-control"  required="required" name="email" type="email" id="email" >
 </div>
 </div>

 <div class="form-group">
 <label for="telefono" class="negrita">Telefono:</label>
 <div>
 <input class="form-control"  required="required" name="telefono" type="text" id="telefono" >
 </div>
 </div>


 <div class="form-group">
 <label for="programa" class="negrita">Programa:</label>
 <div>
 <select class="form-control"  required="required" name="programa"  id="programa" >
 <option value="Bachillerato">Bachillerato</option>
    <option value="Ingles">Inglés</option>
    <option value="Preicfes">Preicfes</option>
 </select>
 </div>
 </div>


 <div class="form-group">
 <label for="contactado" class="negrita">Contactado:</label>
 <div>
 <select class="form-control" required="required" name="contactado" id="contactado" >


    <option value="Si">Si</option>
    <option value="No">No</option>
 </select>
 </div>
 </div>

@endif
<button type="submit" class="btn btn-info">Guardar</button>
<a href="{{ route('admin/registro') }}" class="btn btn-warning">Cancelar</a>
<br>
 <br>

 </div>
 </section>
 </div>
</div>
