var //graficotorta   = new dc.PieChart("#graficoxregiones");
cursovxp   = new dc.BarChart("#cursovxp");
actividadxtemas   = new dc.RowChart("#actividadxtemas");
torta = new dc.PieChart("#torta");
edad = new dc.PieChart("#edad");
cursovxsemana = new dc.BarChart("#cursovxsemana");



d3.csv("base_para_dimesiones_gcp_noa.csv").then(function(experiments) {

   var  ndx = crossfilter(experiments),// 1 Crea la instancia de filtro cruzado.
        //01 sECUENCIA DE FECHAS A MOSTRAR
        fechas = ndx.dimension(function(d) {return d.secuencia;}),
        agrupamientoxevento = fechas.group().reduceCount(function(d) {return d.conteo;}),

        //02 sECUENCIA DE SEMANA  A MOSTRAR
        semanas = ndx.dimension(function(d) {return d.semana;}),
        agrupamientosemana = semanas.group().reduceCount(function(d) {return d.conteo;}),


        //03 NIVEWL DE ACTIVIDAD POR TEMAS
        actividadxtemasDim = ndx.dimension(function(d) {return d.contexto;}),
        actividadxtemasDim2= actividadxtemasDim.group().reduceCount(function(d) {return d.conteo;}),

        
        //04 DIMENSIÓN DE GENERO
        generoDim = ndx.dimension(function(d) {return d.genero;}),
        generoDim2= generoDim.group().reduceCount(function(d) {return d.genero}),

        //05 DIMENSIÓN DE EDAD
        grupoedadDim = ndx.dimension(function(d) {return d.grupoEdad;}),
        edadDim2= grupoedadDim.group().reduceCount(function(d) {return d.genero});


    //01 NIVEL DE ACTIVIDAD POR FECHA
    cursovxp
    .width(1200)
    .height(400)
    .x(d3.scaleBand())
    .xUnits(dc.units.ordinal)
    .brushOn(false)
    .centerBar(false)
    .elasticY(true)
    .elasticX(true)
    .yAxisLabel("Actividad")
    .xAxisLabel("Semana")
    .dimension(fechas)
    .group(agrupamientoxevento)
    .margins({left: 100, top: 20, right: 0, bottom: 150});

    //02  NIVEL DE ACTIVIDAD POR SEMANA
    cursovxsemana
    .width(600)
    .height(400)
    .x(d3.scaleBand())
    .xUnits(dc.units.ordinal)
    .brushOn(false)
    .centerBar(false)
    .elasticY(true)
    .elasticX(true)
    .yAxisLabel("Actividad")
    .xAxisLabel("Fecha")
    .dimension(semanas)
    .group(agrupamientosemana)
    .margins({left: 100, top: 20, right: 0, bottom: 150});


    //03 NIVEL DE ACTIVIDAD PÓR TEMAS
    actividadxtemas
    .width(600)
    .height(700)
    .x(d3.scaleLinear().domain())
    .elasticX(true)
    .dimension(actividadxtemasDim)
    .group(actividadxtemasDim2);

    //04 GENERO
    torta
    .width(668)
    .height(380)
    .slicesCap(6)
    .innerRadius(60)
    .externalLabels(50)
    .externalRadiusPadding(30)
    .drawPaths(false)
    .dimension(generoDim)
    .group(generoDim2)
    .legend(dc.legend().highlightSelected(true))
    .on('pretransition', function(chart) {
        chart.selectAll('text.pie-slice').text(function(d) {
            return d.data.key + ' ' + dc.utils.printSingleValue((d.endAngle - d.startAngle) / (2*Math.PI) * 100) + '%';
        })
    });

    //05 EDAD
    edad
    .width(668)
    .height(380)
    .slicesCap(11)
    .innerRadius(60)
    .externalLabels(20)
    .externalRadiusPadding(30)
    .drawPaths(false)
    .dimension(grupoedadDim)
    .group(edadDim2)
    .legend(dc.legend().highlightSelected(true))
    .on('pretransition', function(chart) {
        chart.selectAll('text.pie-slice').text(function(d) {
            if (((d.endAngle - d.startAngle) / (2*Math.PI) * 100) >= 2){ //Si el porcentaje obtenido es mayor a 0.1 se muestra
                return d.data.key + ' = ' +  dc.utils.printSingleValue((d.endAngle - d.startAngle) / (2*Math.PI) * 100) + '%';
            }})
    });



    //RENDERS
    //graficotorta.render();
    cursovxp.render();
    actividadxtemas.render();
    torta.render();
    edad.render();
    cursovxsemana.render();
});

