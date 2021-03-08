var    actividadxtemas   = new dc.RowChart("#actividadxtemas");



  d3.csv("base_para_dimesiones.csv").then(function(experiments) {
    
   var  ndx = crossfilter(experiments),// 1 Crea la instancia de filtro cruzado.

        //Actividades por tema
        actividadxtemasDim = ndx.dimension(function(d) {return d.contexto;}),
        actividadxtemasDim2= actividadxtemasDim.group().reduceCount(function(d) {return d.conteo;});


    // NIVEL DE ACTIVIDAD PÓR TEMAS
    actividadxtemas
    .width(600)
    .height(700)
    .x(d3.scaleLinear().domain())
    .elasticX(true)
     .dimension(actividadxtemasDim)
    .group(actividadxtemasDim2);

    

    // RENDERS
    actividadxtemas.render();

});

