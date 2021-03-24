<?php 


//REGIONES//////////////////////////////////////////////
$regiones = Xcrud::get_instance();
$regiones->table('_regiones');
$regiones->language('es');
$regiones->table_name(' '); //Muestro la tabla sin el título
//COLUMNAS QUE SE MUESTRAN
$regiones->columns('nombre,Evaluaciones técnicas,Postulaciones presentadas');


//Contar cuantos postulantes por provincia están evaluados técnicamente
$regiones->subselect('Evaluaciones técnicas','SELECT COUNT(*) FROM gcp2021 WHERE id_region = {id_region} AND evaluadoT = 1'); // consulta sql sobre el total de confirmados por región

//Contar cuantos postulantes por provincia
$regiones->subselect('Postulaciones presentadas','SELECT COUNT(*) FROM gcp2021 WHERE id_region = {id_region} AND CO1 = "Confirmar"'); // consulta sql sobre el total de confirmados por región

//Ordenar por nombre alfabeito la columna nombre
$regiones->order_by('nombre');

//deshabilitación de botones 
$regiones->unset_add();
$regiones->unset_edit();
$regiones->unset_remove();
$regiones->unset_view();
//$xcrud->unset_csv();
$regiones->unset_limitlist();
$regiones->unset_numbers();
$regiones->unset_pagination();
$regiones->unset_print();
$regiones->unset_search();
//$xcrud->unset_title();
$regiones->unset_sortable();

$regiones->limit(25);

//alinear datos
$regiones->column_class('Evaluaciones técnicas', 'align-center');
$regiones->column_class('Postulaciones presentadas', 'align-center');
//sumar cantidades de columnas
$regiones->sum('Evaluaciones técnicas');
$regiones->sum('Postulaciones presentadas');




//REGION NOA //////////////////////////////////////////////
$noa = Xcrud::get_instance();
$noa->table('_provincias');
$noa->language('es');
$noa->table_name(' ');//muestro la tabla sin el título
//COLUMNAS QUE SE MUESTRAN
$noa->columns('nombre,Evaluaciones técnicas');


//Contar cuantos postulantes por provincia están evaluados técnicamente
$noa->subselect('Evaluaciones técnicas','SELECT COUNT(*) FROM gcp2021 WHERE id_provincia = {id_provincia} AND evaluadoT = 1 AND region = 1'); // consulta sql sobre el total de confirmados por región

$noa->where('region =', "1");//Filtra la región NEA

//Ordenar por nombre alfabeito la columna nombre
$noa->order_by('nombre');

//deshabilitación de botones 
$noa->unset_add();
$noa->unset_edit();
$noa->unset_remove();
$noa->unset_view();
//$xcrud->unset_csv();
$noa->unset_limitlist();
$noa->unset_numbers();
$noa->unset_pagination();
$noa->unset_print();
$noa->unset_search();
//$xcrud->unset_title();
$noa->unset_sortable();

$noa->limit(25);

//alinear datos
$noa->column_class('Evaluaciones técnicas', 'align-center');
//sumar cantidades de columnas
$noa->sum('Evaluaciones técnicas');


//REGION NEA //////////////////////////////////////////////
$nea = Xcrud::get_instance();
$nea->table('_provincias');
$nea->language('es');
$nea->table_name(' '); //mUESTRO LA TABLA SIN EL TÍTULO
//COLUMNAS QUE SE MUESTRAN
$nea->columns('nombre,Evaluaciones técnicas');


//Contar cuantos postulantes por provincia están evaluados técnicamente
$nea->subselect('Evaluaciones técnicas','SELECT COUNT(*) FROM gcp2021 WHERE id_provincia = {id_provincia} AND evaluadoT = 1 AND region = 2'); // consulta sql sobre el total de confirmados por región

$nea->where('region =', "2");//Filtra la región NEA

//Ordenar por nombre alfabeito la columna nombre
$nea->order_by('nombre');

//deshabilitación de botones 
$nea->unset_add();
$nea->unset_edit();
$nea->unset_remove();
$nea->unset_view();
//$xcrud->unset_csv();
$nea->unset_limitlist();
$nea->unset_numbers();
$nea->unset_pagination();
$nea->unset_print();
$nea->unset_search();
//$xcrud->unset_title();
$nea->unset_sortable();

$nea->limit(25);

//alinear datos
$nea->column_class('Evaluaciones técnicas', 'align-center');
//sumar cantidades de columnas
$nea->sum('Evaluaciones técnicas');


//REGION CUYO //////////////////////////////////////////////
$cuyo = Xcrud::get_instance();
$cuyo->table('_provincias');
$cuyo->language('es'); //Muestro la tabla sin el título
$cuyo->table_name(' ');
//COLUMNAS QUE SE MUESTRAN
$cuyo->columns('nombre,Evaluaciones técnicas');


//Contar cuantos postulantes por provincia están evaluados técnicamente
$cuyo->subselect('Evaluaciones técnicas','SELECT COUNT(*) FROM gcp2021 WHERE id_provincia = {id_provincia} AND evaluadoT = 1 AND region = 6'); // consulta sql sobre el total de confirmados por región

$cuyo->where('region =', "6");//Filtra la región cuyo

//Ordenar por nombre alfabeito la columna nombre
$cuyo->order_by('nombre');

//deshabilitación de botones 
$cuyo->unset_add();
$cuyo->unset_edit();
$cuyo->unset_remove();
$cuyo->unset_view();
//$xcrud->unset_csv();
$cuyo->unset_limitlist();
$cuyo->unset_numbers();
$cuyo->unset_pagination();
$cuyo->unset_print();
$cuyo->unset_search();
//$xcrud->unset_title();
$cuyo->unset_sortable();

$cuyo->limit(25);

//alicuyor datos
$cuyo->column_class('Evaluaciones técnicas', 'align-center');
//sumar cantidades de columnas
$cuyo->sum('Evaluaciones técnicas');


//REGION centro //////////////////////////////////////////////
$centro = Xcrud::get_instance();
$centro->table('_provincias');
$centro->language('es');
$centro->table_name(' '); //Muestro la tabla sin el título
//COLUMNAS QUE SE MUESTRAN
$centro->columns('nombre,Evaluaciones técnicas');


//Contar cuantos postulantes por provincia están evaluados técnicamente
$centro->subselect('Evaluaciones técnicas','SELECT COUNT(*) FROM gcp2021 WHERE id_provincia = {id_provincia} AND evaluadoT = 1 AND region = 3'); // consulta sql sobre el total de confirmados por región

$centro->where('region =', "3");//Filtra la región centro

//Ordenar por nombre alfabeito la columna nombre
$centro->order_by('nombre');

//deshabilitación de botones 
$centro->unset_add();
$centro->unset_edit();
$centro->unset_remove();
$centro->unset_view();
//$xcrud->unset_csv();
$centro->unset_limitlist();
$centro->unset_numbers();
$centro->unset_pagination();
$centro->unset_print();
$centro->unset_search();
//$xcrud->unset_title();
$centro->unset_sortable();

$centro->limit(25);

//alicentror datos
$centro->column_class('Evaluaciones técnicas', 'align-center');
//sumar cantidades de columnas
$centro->sum('Evaluaciones técnicas');


//REGION patagonia //////////////////////////////////////////////
$patagonia = Xcrud::get_instance();
$patagonia->table('_provincias');
$patagonia->language('es');
$patagonia->table_name(' ');//muestro la tabla sin el título
//COLUMNAS QUE SE MUESTRAN
$patagonia->columns('nombre,Evaluaciones técnicas');


//Contar cuantos postulantes por provincia están evaluados técnicamente
$patagonia->subselect('Evaluaciones técnicas','SELECT COUNT(*) FROM gcp2021 WHERE id_provincia = {id_provincia} AND evaluadoT = 1 AND region = 5'); // consulta sql sobre el total de confirmados por región

$patagonia->where('region =', "5");//Filtra la región patagonia

//Ordenar por nombre alfabeito la columna nombre
$patagonia->order_by('nombre');

//deshabilitación de botones 
$patagonia->unset_add();
$patagonia->unset_edit();
$patagonia->unset_remove();
$patagonia->unset_view();
//$xcrud->unset_csv();
$patagonia->unset_limitlist();
$patagonia->unset_numbers();
$patagonia->unset_pagination();
$patagonia->unset_print();
$patagonia->unset_search();
//$xcrud->unset_title();
$patagonia->unset_sortable();

$patagonia->limit(25);

//alipatagoniar datos
$patagonia->column_class('Evaluaciones técnicas', 'align-center');
//sumar cantidades de columnas
$patagonia->sum('Evaluaciones técnicas');


//REGION baires //////////////////////////////////////////////
$baires = Xcrud::get_instance();
$baires->table('_provincias');
$baires->language('es');
$baires->table_name(' '); //Muestro la tabla sin el título
//COLUMNAS QUE SE MUESTRAN
$baires->columns('nombre,Evaluaciones técnicas');


//Contar cuantos postulantes por provincia están evaluados técnicamente
$baires->subselect('Evaluaciones técnicas','SELECT COUNT(*) FROM gcp2021 WHERE id_provincia = {id_provincia} AND evaluadoT = 1 AND region = 4'); // consulta sql sobre el total de confirmados por región

$baires->where('region =', "4");//Filtra la región baires

//Ordenar por nombre alfabeito la columna nombre
$baires->order_by('nombre');

//deshabilitación de botones 
$baires->unset_add();
$baires->unset_edit();
$baires->unset_remove();
$baires->unset_view();
//$xcrud->unset_csv();
$baires->unset_limitlist();
$baires->unset_numbers();
$baires->unset_pagination();
$baires->unset_print();
$baires->unset_search();
//$xcrud->unset_title();
$baires->unset_sortable();

$baires->limit(25);

//alibairesr datos
$baires->column_class('Evaluaciones técnicas', 'align-center');
//sumar cantidades de columnas
$baires->sum('Evaluaciones técnicas');


?>






<!DOCTYPE HTML>
<html>
<head>

  <style type="text/css">

    h2 {
      border-bottom: 0px !important; 
    }
    .card-header {
      border-bottom: 0px !important; 

    }


    .xcrud-column {
      text-align: center !important;
      color: #17a2b8 !important;
    }

  </style>

</head>

<body>

  

  <!-- Main content -->
  <div class="row"> 

   <div class="col-md-12 card-header">
    <!-- CAJA REGIÓN PATAGONIA -->
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Reporte de Evaluaciones de Postulantes GCP 2021 | REGIONES</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
                  <!-- |botón remover| <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button> -->

                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="min-height: 350px; height: 350px; max-height: 350px; max-width: 100%;"></canvas>
                  <?php echo $regiones->render(); ?>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          <div class="col-md-6 card-header">
            <!-- CAJA REGIÓN PATAGONIA -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Región NOA</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <!-- |botón remover| <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button> -->
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  <?php echo $noa->render(); ?>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          <div class="col-md-6 card-header">
            <!-- CAJA REGIÓN PATAGONIA -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Región Patagonia</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <!-- |botón remover| <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button> -->
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="graficoDonaP" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  <?php echo $patagonia->render(); ?>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          <div class="col-md-6 card-header">
            <!-- CAJA REGIÓN PATAGONIA -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Región Centro</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <!-- |botón remover| <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button> -->
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="graficoDonaC" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  <?php echo $centro->render(); ?>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>	

          <div class="col-md-6 card-header">
            <!-- CAJA REGIÓN PATAGONIA -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Región Cuyo</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <!-- |botón remover| <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button> -->
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="graficoDonaCu" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  <?php  echo $cuyo->render(); ?>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>  

          
          <div class="col-md-6 card-header">
            <!-- CAJA REGIÓN PATAGONIA -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Región Buenos Aires</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <!-- |botón remover| <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button> -->
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="graficoDonaBaires" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  <?php echo $baires->render(); ?>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>  

          <div class="col-md-6 card-header">
            <!-- CAJA REGIÓN PATAGONIA -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Región NEA</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <!-- |botón remover| <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button> -->
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="graficoDonaN" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  <?php echo $nea->render(); ?>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>  
        </div>


        <script>
          $(function () {
    /* ChartJS
     * -------
     * qui crearemos los graficos con hartJS
     */


    //-------------------------------------------------------------------------------------------------------------------------
    //- GRAFICO DE DONA NOA -
    //-------------------------------------------------------------------------------------------------------------------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
      'Catamarca',
      'Jujuy',
      'La Rioja',
      'Salta',
      'Santiago del Estero',
      'Tucumán',
      ],
      datasets: [
      {
        data: [1,6,7,7,4,11],
        backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
      }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })

    //------------------------------------------------------------------------------------------------------------------------


    //-------------------------------------------------------------------------------------------------------------------------
    //- GRAFICO DE DONA PATAGONIA -
    //-------------------------------------------------------------------------------------------------------------------------
    // Get context with jQuery - using jQuery's .get() method.
    var graficoDonaPatagonia = $('#graficoDonaP').get(0).getContext('2d')
    var dataDona        = { 
      labels: [
      'Chubut',
      'La Pampa',
      'Neuquén',
      'Río Negro',
      'Santa Cruz',
      'Tierra del Fuego, Antártida e Islas del Atlántico Sur',
      ],
      datasets: [
      {
        data: [8,6,20,7,14,11],
        backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
      }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var graficoDonaP = new Chart(graficoDonaPatagonia, {
      type: 'doughnut',
      data: dataDona,
      options: donutOptions
    })

    //------------------------------------------------------------------------------------------------------------------------


        //-------------------------------------------------------------------------------------------------------------------------
    //- GRAFICO DE DONA CENTRO -
    //-------------------------------------------------------------------------------------------------------------------------
    // Get context with jQuery - using jQuery's .get() method.
    var graficoDonaCentro = $('#graficoDonaC').get(0).getContext('2d')
    var dataDona        = { 
      labels: [
      'Chubut',
      'La Pampa',
      'Neuquén',
      'Río Negro',
      'Santa Cruz',
      'Tierra del Fuego, Antártida e Islas del Atlántico Sur',
      ],
      datasets: [
      {
        data: [8,6,20,7,14,11],
        backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
      }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var graficoDonaC = new Chart(graficoDonaCentro, {
      type: 'doughnut',
      data: dataDona,
      options: donutOptions
    })

    //------------------------------------------------------------------------------------------------------------------------


        //-------------------------------------------------------------------------------------------------------------------------
    //- GRAFICO DE DONA CUYO -
    //-------------------------------------------------------------------------------------------------------------------------
    // Get context with jQuery - using jQuery's .get() method.
    var graficoDonaCuyo = $('#graficoDonaCu').get(0).getContext('2d')
    var dataDona        = { 
      labels: [
      'Chubut',
      'La Pampa',
      'Neuquén',
      'Río Negro',
      'Santa Cruz',
      'Tierra del Fuego, Antártida e Islas del Atlántico Sur',
      ],
      datasets: [
      {
        data: [8,6,20,7,14,11],
        backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
      }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var graficoDonaCu = new Chart(graficoDonaCuyo, {
      type: 'doughnut',
      data: dataDona,
      options: donutOptions
    })

    //------------------------------------------------------------------------------------------------------------------------

            //-------------------------------------------------------------------------------------------------------------------------
    //- GRAFICO DE DONA BUENOS AIRES -
    //-------------------------------------------------------------------------------------------------------------------------
    // Get context with jQuery - using jQuery's .get() method.
    var graficoDonaBsAs = $('#graficoDonaBaires').get(0).getContext('2d')
    var dataDona        = { 
      labels: [
      'Chubut',
      'La Pampa',
      'Neuquén',
      'Río Negro',
      'Santa Cruz',
      'Tierra del Fuego, Antártida e Islas del Atlántico Sur',
      ],
      datasets: [
      {
        data: [8,6,20,7,14,11],
        backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
      }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var graficoDonaBaires = new Chart(graficoDonaBsAs, {
      type: 'doughnut',
      data: dataDona,
      options: donutOptions
    })

    //------------------------------------------------------------------------------------------------------------------------

    //-------------------------------------------------------------------------------------------------------------------------
    //- GRAFICO DE DONA NEA -
    //-------------------------------------------------------------------------------------------------------------------------
    // Get context with jQuery - using jQuery's .get() method.
    var graficoDonaNea = $('#graficoDonaN').get(0).getContext('2d')
    var dataDona        = { 
      labels: [
      'Chubut',
      'La Pampa',
      'Neuquén',
      'Río Negro',
      'Santa Cruz',
      'Tierra del Fuego, Antártida e Islas del Atlántico Sur',
      ],
      datasets: [
      {
        data: [8,6,20,7,14,11],
        backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
      }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Creción de grafico de dona
    // puede cambiar entre grafico de torta y de dona usando el metodo anterior.
    var graficoDonaN = new Chart(graficoDonaNea, {
      type: 'doughnut',
      data: dataDona,
      options: donutOptions
    })

    //------------------------------------------------------------------------------------------------------------------------


    //ESTRUCTURA DE DATOS PARA LOS GRAFICOS DE BARRAS Y LINEAS

    var areaChartData = {
      labels  : ['BUENOS AIRES', 'CENTRO', 'CUYO', 'NEA', 'NOA', 'PATAGONIA'],
      datasets: [
      {
        label               : 'Evaluaciones técnicas',
        backgroundColor     : 'rgba(60,141,188,0.9)',
        borderColor         : 'rgba(60,141,188,0.8)',
        pointRadius          : false,
        pointColor          : '#3b8bba',
        pointStrokeColor    : 'rgba(60,141,188,1)',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data                : [124, 76, 22, 22, 36, 25]
      },
      {
        label               : 'Postulaciones presentadas',
        backgroundColor     : 'rgba(210, 214, 222, 1)',
        borderColor         : 'rgba(210, 214, 222, 1)',
        pointRadius         : false,
        pointColor          : 'rgba(210, 214, 222, 1)',
        pointStrokeColor    : '#c1c7d1',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(220,220,220,1)',
        data                : [226, 150, 55, 52, 75, 68]
      },
      ]
    }

    //------------------------------------------------------------------------------------------------------------------------




    //-------------------------------------------------------------------------------------------------------------------------
    //- BAR CHART -
    //-------------------------------------------------------------------------------------------------------------------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

    //-------------------------------------------------------------------------------------------------------------------------





  })
</script>

</body>
</html>