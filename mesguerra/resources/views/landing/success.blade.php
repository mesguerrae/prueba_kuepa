<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Nube Colectiva">
    <link rel="shortcut icon" href="http://nubecolectiva.com/favicon.ico" />

    <meta name="theme-color" content="#000000" />

    <title>Registros prospectos</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">      

  </head>

  <body> 






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
          
          <div class="col-md-3">
            <div class="sidebar content-box" style="display: block;">

             
            </div>
          </div>
        
            <div class="col-md-6">

       
        
        <div class="row">

          <div class="col-md-12">

              <div class="content-box-large">

                <div class="panel-heading">
                <div class="panel-title"><h2>Gracias por registrarte, pronto nos contactaremos contigo para darte mayor informacion</h2></div>             
                    
              </div>
                    <div class="panel-body">                  
                    
                      <!-- Obtengo la sesión actual del usuario -->
                      {{ $message=Session::get('message') }} 
                    
                      <!-- Muestro el mensaje de validación -->
                      @include('alerts.request')
                                                      
                   
 
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
          <script>
          
          
          window.setTimeout(function(){

// Move to a new location or you can do something else
window.location.href = "{{ route('landing/index') }}";

}, 10000)
          </script>






        </div>



    <footer class="text-muted mt-3 mb-3">
        <div align="center">
            Mauricio Esguerra
      </div>
    </footer>

    <!-- Bootstrap JS -->
    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
    
  </body>
</html>
