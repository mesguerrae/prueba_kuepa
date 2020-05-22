<div class="row">
 <div class="col-md-12">
 <section class="panel">
 <div class="panel-body">



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





<button type="submit" class="btn btn-info">Guardar</button>
<a href="{{ route('admin/registro') }}" class="btn btn-warning">Cancelar</a>
<br>
 <br>

 </div>
 </section>
 </div>
</div>
