<?php 
//clases autenticación 
//require_once '../users/init.php';
//if (!securePage($_SERVER['PHP_SELF'])){die();}

?>

<!doctype html>
<html lang="es" class="bg-white">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>Analisis de PreInscriptxs GCP</title>

   
    <!-- Archivos para gráficar-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/personalizado.css">
    <link rel="stylesheet" type="text/css" href="css/dc.css"/>
    

    <!-- Archivos: Fuente, Poncho+BS4, Íconos Font Awesome, Íconos Poncho -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link rel="stylesheet" href="http://argob.github.io/poncho/node_modules/argob-poncho/dist/icono-arg.css"> -->
    <link href="css/icono-arg.css" rel="stylesheet">

    <style>
    #imagen{
      display: block;
      margin-left: auto;
      margin-right: auto;}
    </style>
    <!-- 
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <style>body {font-family: 'Encode Sans', sans-serif;}h1, h2, h3, h4, h5, .h1, .h2, .h3, .h4, .h5, .btn {font-weight:700 !important;}</style>
    -->

    <!-- 
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet" rel="stylesheet">
    <style>body {font-family: 'Source Sans Pro', sans-serif;}h1, h2, h3, h4, h5, .h1, .h2, .h3, .h4, .h5, .btn {font-weight:700 !important;}</style>
    -->

  </head>

  <body>    
    <a class="sr-only sr-only-focusable" href="#main">Saltear navegación</a>

    
    <main role="main" id="main" class="pb-5">

     <!-- Jumbotron
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-8">
                <img class="img-fluid" src="img/portadaNoa2.png">
              </div>
            </div>
          </div> --->

          <div class="overlay"></div>
      

      <!-- Fin Jumbotron -->

      <div class=".container-fluid">

        <!-- Listado de tarjetas -->
        
        <div class="row mb-12">

          <div class="col-12">

            <h2 class="row justify-content-center">Analisis de preinscriptxs al curso GCP</h2>

           
            
            <div id='reservas-card'></div>


            <div class="card-deck mb-12">
              <div class="card mb-6">
                <div class="card-body">
                  <p class="h5 card-title">Seleccionar una región</p>
                  <p class="card-text">Seleccione una región de la lista desplegable</p>
                  <div id="region" class=""></div></br>--------------------
                  <p class="h5 card-title">Condición del postulante</p>
                  <p class="card-text">Puede seleccionar más de una condición haciendo click presionando la tecla "Ctrl"</p>
                  <div id="postulacion" class=""></div>    
                  <p><p><p><p><a type="button" class="btn btn-primary" href="javascript:dc.filterAll(); dc.renderAll();">Limpiar filtro</a>            
                  <div class="genero" id="generoConteo">Cantidad total del participantes visualizados: </div>  
                </div>
              </div>
              <div class="card mb-6">
                <div class="card-body">
                  <p class="h5 card-title"><i class="icono-arg-mapa-argentina"></i> Participantes por Provincia</p>
                  <p class="card-text">Distribución por provincia.</p>
                  <div id="cursovxp" class=""></div>            
                </div>
              </div>
              
            </div>

            <div class="card-deck">
              <div class="card mb-4">
                <div class="card-body">
                  <p class="h5 card-title"><i class="icono-arg-diversidad-sexual"></i> Por género</p>
                  <p class="card-text">Distribución por género.</p>
                  <div id="genero" class=""></div>         
                </div>
              </div>

              <div class="card mb-4">
                <div class="card-body">
                  <p class="h5 card-title"><i class="icono-arg-familia-2"></i> Por rango etario</p>
                  <p class="card-text">Distribución por rango etario.</p>
                  <div id="rango_edad" class=""></div>             
                </div>
              </div>

              <div class="card mb-4">
                <div class="card-body">
                  <p class="h5 card-title"><i class="fa fa-institution"></i> Por Rango de la administración pública</p>
                  <p class="card-text">Distribuidxs por rango de la administración pública.</p>
                  <div id="rango_AP" class=""></div>             
                </div>
              </div>
            </div>

            <!-- graficos de barra añadidos -->

             <div class="card-deck">
              <div class="card mb-4">
                <div class="card-body">
                  <p class="h5 card-title"><i class="icono-arg-escuela"></i> Por nivel de estudio</p>
                  <p class="card-text">Nivel máximo de estudios alcanzados</p>
                  <div id="estudios" class=""></div>         
                </div>
              </div>

              <div class="card mb-4">
                <div class="card-body">
                  <p class="h5 card-title"><i class="icono-arg-reloj"></i> Por antigüedad</p>
                  <p class="card-text">Antigüedad en la institución</p>
                  <div id="antiguedad" class=""></div>             
                </div>
              </div>

              <div class="card mb-4">
                <div class="card-body">
                  <p class="h5 card-title"><i class="icono-arg-login-social"></i> Por medio de comunicación</p>
                  <p class="card-text">Distribuidxs por medio de comunicación</p>
                  <div id="medio" class=""></div>             
                </div>
              </div>
            </div>


          </div>

        </div>

        <!-- Fin de Listado de tarjetas -->
      </div>
     
    </main>

    

    <!-- Archivos: Jquery, Bootstrap.js -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/d3.js"></script>
    <script type="text/javascript" src="js/crossfilter.js"></script>
    <script type="text/javascript" src="js/dc.js"></script>
    <script type="text/javascript" src="lib/uploads/analisis_preinscriptos_gcp_2021_1c.js"> </script>
    
  </body>
</html>
