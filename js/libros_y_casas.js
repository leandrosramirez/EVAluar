var profesion   = new dc.PieChart("#profesion");
    cursovxp   = new dc.BarChart("#cursovxp");
    actividadxtemas   = new dc.RowChart("#actividadxtemas");
    actividadxprovincia = new dc.RowChart("#actividadxprovincia");
    torta = new dc.PieChart("#torta");
    edad = new dc.PieChart("#edad");
    forma_parte = new dc.PieChart("#forma_parte");



  d3.csv("base_para_dimesiones_lyc.csv").then(function(experiments) {
    
   var  ndx = crossfilter(experiments),// 1 Crea la instancia de filtro cruzado.

        profesionDim = ndx.dimension(function(d) {return d.profconteo;}), 
        profesionAgrupamiento = profesionDim.group().reduceCount(function(d) {return d.profconteo;}),
      
        eventoDim = ndx.dimension(function(d) {return d.Nombre_evento;}),//para filtrar por eventos

        //ACTIVIDADES POR PROVINCIA
        actividadxprovinciaDim = ndx.dimension(function(d) {return d.provincia;}),
        actividadxprovinciaDim2= actividadxprovinciaDim.group().reduceCount(function(d) {return d.conteo;}),

        //Actividades por tema
        actividadxtemasDim = ndx.dimension(function(d) {return d.contexto;}),
        actividadxtemasDim2= actividadxtemasDim.group().reduceCount(function(d) {return d.conteo;}),

        
        //DIMENSIÓN DE GENERO
        generoDim = ndx.dimension(function(d) {return d.genero;}),
        generoDim2= generoDim.group().reduceCount(function(d) {return d.genero}),

        //DIMENSIÓN DE edad
        grupoedadDim = ndx.dimension(function(d) {return d.grupoEdad;}),
        edadDim2= grupoedadDim.group().reduceCount(function(d) {return d.genero}),

        forma_parteDim = ndx.dimension(function(d) {return d.forma_parte;}),
        forma_parteDim2 = forma_parteDim.group().reduceCount(function(d) {return d.forma_parte}),

        //sECUENCIA DE FECHAS A MOSTRAR
        fechas = ndx.dimension(function(d) {return d.secuencia;}),
        agrupamientoxevento = fechas.group().reduceCount(function(d) {return d.conteo;});

        
    

//EDAD
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
            return d.data.key + ' ' + dc.utils.printSingleValue((d.endAngle - d.startAngle) / (2*Math.PI) * 100) + '%';
        })
    });

//GENERO
torta
    .width(668)
    .height(380)
    .slicesCap(6)
    .innerRadius(60)
    .externalLabels(20)
    .externalRadiusPadding(30)
    .drawPaths(false)
    .dimension(generoDim)
    .group(generoDim2)
    .legend(dc.legend().highlightSelected(true))
    .on('pretransition', function(chart) {
        chart.selectAll('text.pie-slice').text(function(d) {
            if (((d.endAngle - d.startAngle) / (2*Math.PI) * 100) >= 2){ //Si el porcentaje obtenido es mayor a 0.1 se muestra
                return d.data.key + ' = ' +  dc.utils.printSingleValue((d.endAngle - d.startAngle) / (2*Math.PI) * 100) + '%';
            }})
    });

    

    // NIVEL DE ACTIVIDAD POR FECHA
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
    .xAxisLabel("Fecha")
    .dimension(fechas)
    .group(agrupamientoxevento)
    .margins({left: 100, top: 20, right: 0, bottom: 150});


    // NIVEL DE ACTIVIDAD PÓR TEMAS
    actividadxtemas
    .width(600)
    .height(700)
    .x(d3.scaleLinear().domain())
    .elasticX(true)
    .dimension(actividadxtemasDim)
    .group(actividadxtemasDim2);

    // NIVEL DE ACTIVIDAD POR PROVINCIA
    actividadxprovincia
    .width(600)
    .height(700)
    .x(d3.scaleLinear().domain())
    .elasticX(true)
     .dimension(actividadxprovinciaDim)
    .group(actividadxprovinciaDim2);



    // Profesion
    profesion
    .width(668)
    .height(380)
    .slicesCap(7)
    .innerRadius(60)
    .externalLabels(50)
    .externalRadiusPadding(30)
    .drawPaths(false)
    .dimension(profesionAgrupamiento)
    .group(profesionAgrupamiento)
    .legend(dc.legend().highlightSelected(true))
    .on('pretransition', function(chart) {
        chart.selectAll('text.pie-slice').text(function(d) {
            return d.data.key + ' ' + dc.utils.printSingleValue((d.endAngle - d.startAngle) / (2*Math.PI) * 100) + '%';
        })
    });

    // forma_parte
    forma_parte
    .width(668)
    .height(380)
    .slicesCap(7)
    .innerRadius(60)
    .externalLabels(50)
    .externalRadiusPadding(30)
    .drawPaths(false)
    .dimension(forma_parteDim)
    .group(forma_parteDim2)
    .legend(dc.legend().highlightSelected(true))
    .on('pretransition', function(chart) {
        chart.selectAll('text.pie-slice').text(function(d) {
            return d.data.key + ' ' + dc.utils.printSingleValue((d.endAngle - d.startAngle) / (2*Math.PI) * 100) + '%';
        })
    });


    //RENDERS
    profesion.render();
    cursovxp.render();
    actividadxtemas.render();
    actividadxprovincia.render();
    torta.render();
    edad.render();
    forma_parte.render();
});

