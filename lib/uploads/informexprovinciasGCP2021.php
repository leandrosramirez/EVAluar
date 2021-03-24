<?php 

$xcrud = Xcrud::get_instance();
$xcrud->table('_provincias');
$xcrud->language('es');
$xcrud->table_name(' ');//Muestro la tabla sin el título
//COLUMNAS QUE SE MUESTRAN
$xcrud->columns('nombre,Evaluación Técnica,Postulaciones presentadas,Postulaciones excluyentes');

//Contar cuantos postulantes por provincia están evaluados técnicamente
$xcrud->subselect('Evaluación Técnica','SELECT COUNT(*) FROM gcp2021 WHERE id_provincia = {id_provincia} AND evaluadoT = 1'); // consulta sql sobre el total de Ev. Técnicas realizadas

//Contar cuantos postulantes por provincia se excluyeron
$xcrud->subselect('Postulaciones excluyentes','SELECT COUNT(*) FROM gcp2021 WHERE id_provincia = {id_provincia} AND (c35 = "Participé" OR co3filecount = 0) '); // consulta sql sobre el total de confirmados por región

//Contar cuantos postulantes por provincia
$xcrud->subselect('Postulaciones presentadas','SELECT COUNT(*) FROM gcp2021 WHERE id_provincia = {id_provincia} AND CO1 = "Confirmar"'); // consulta sql sobre el total de confirmados por región


//Ordenar por nombre alfabeito la columna nombre
$xcrud->order_by('region');

//deshabilitación de botones 
$xcrud->unset_add();
$xcrud->unset_edit();
$xcrud->unset_remove();
$xcrud->unset_view();
//$xcrud->unset_csv();
$xcrud->unset_limitlist();
$xcrud->unset_numbers();
$xcrud->unset_pagination();
$xcrud->unset_print();
$xcrud->unset_search();
//$xcrud->unset_title();
$xcrud->unset_sortable();

$xcrud->limit(25);

//alinear datos
$xcrud->column_class('Evaluación Técnica', 'align-center');
$xcrud->column_class('Postulaciones presentadas', 'align-center');
$xcrud->column_class('Postulaciones excluyentes', 'align-center');
//sumar cantidades de columnas
$xcrud->sum('Evaluación Técnica');
$xcrud->sum('Postulaciones presentadas');
$xcrud->sum('Postulaciones excluyentes');

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
}

</style>

</head>
 
<body>

<div class="row"> 

 <div class="col-md-12 card-header">
            <!-- CAJA REGIÓN PATAGONIA -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Informe de evaluación de postulantes GCP 2021 | PROVINCIAS</h3>

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
                  <?php echo $xcrud->render(); ?>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>

</div>

</body>
</html>

