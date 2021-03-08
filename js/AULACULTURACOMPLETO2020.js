var cursovxp   = new dc.BarChart("#cursovxp");
    eventos   = new dc.SelectMenu("#eventos");
    region   = new dc.SelectMenu("#region");




d3.csv("AULACULTURACOMPLETO2020.csv").then(function(experiments) {

   var  ndx = crossfilter(experiments),// 1 Crea la instancia de filtro cruzado.


        //01 PARTICIPANTES POR PROVINCIAS
        provinciaDIM = ndx.dimension(function(d) {return d.Componente;}),
        agrupamientoProvincias = provinciaDIM.group().reduceCount(function(d) {return d.conteo;}),


        //01 EVENTOS
        evento = ndx.dimension(function(d) {return d.Nombre_evento;}),
        eventogrupo = evento.group().reduceCount(function(d) {return d.conteo;}),

        //05 REGIONES
        regionDIM = ndx.dimension(function(d) {return d.aula;}),
        gruporegion = regionDIM.group().reduceCount(function(d) {return d.conteo;});






    //01 PARTICIPANTES POR PROVINCIA
    cursovxp
    .transitionDuration(1000)
    .width(600)
    .height(400)
    .x(d3.scaleBand())
    .xUnits(dc.units.ordinal)
    .brushOn(false)
    .centerBar(false)
    .elasticY(true)
    .elasticX(true)
    .yAxisLabel("Cantidad de participantes")
    .xAxisLabel("Provincias")
    .dimension(provinciaDIM)
    .group(agrupamientoProvincias)
    .renderLabel(true)
    .margins({left: 60, top: 20, right: 0, bottom: 140});


    
    //REGIONES LISTA DESPLEGABLE
    region
    .dimension(regionDIM)
    .group(regionDIM.group())
    .controlsUseVisibility(true);

     //REGIONES LISTA DESPLEGABLE
    eventos
    .dimension(evento)
    .group(evento.group())
    .multiple(true)
    .numberVisible(5)
    .controlsUseVisibility(true);


    //RENDERS
    //graficotorta.render();

    dc.renderAll();


});

