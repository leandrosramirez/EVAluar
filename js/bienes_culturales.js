var graficotorta   = new dc.PieChart("#graficoxregiones");
    cursovxp   = new dc.BarChart("#cursovxp");
    actividadxtemas   = new dc.RowChart("#actividadxtemas");
    actividadxprov   = new dc.RowChart("#actividadxprovincia");
    torta = new dc.PieChart("#torta");
    edad = new dc.PieChart("#edad");



  d3.csv("base_para_dimensiones_Bienes_y_Sitios_Culturales.csv").then(function(experiments) {
    
   var  ndx = crossfilter(experiments),// 1 Crea la instancia de filtro cruzado.
        regionesDim = ndx.dimension(function(d) {return d.curso;}), // 2 crea la dimesión para analizar filtrar o agrupar
        agrupamientoXProvincia = regionesDim.group().reduceCount(function(d) {return +d.conteo;}),
      
        eventoDim = ndx.dimension(function(d) {return d.Nombre_evento;}),//para filtrar por eventos

        //ACTIVIDADES POR PROVINCIA
        actividadxprovDim = ndx.dimension(function(d) {return d.provincia;}),
        actividadxprovDim2= actividadxprovDim.group().reduceCount(function(d) {return d.conteo;}),

        //Actividades por tema
        actividadxtemasDim = ndx.dimension(function(d) {return d.contexto;}),
        actividadxtemasDim2= actividadxtemasDim.group().reduceCount(function(d) {return d.conteo;}),

        
        //DIMENSIÓN DE GENERO
        generoDim = ndx.dimension(function(d) {return d.genero;}),
        generoDim2= generoDim.group().reduceCount(function(d) {return d.genero}),

        //DIMENSIÓN DE edad
        grupoedadDim = ndx.dimension(function(d) {return d.edad;}),
        edadDim2= grupoedadDim.group().reduceCount(function(d) {return d.conteo}),

        //sECUENCIA DE FECHAS A MOSTRAR
        fechas = ndx.dimension(function(d) {return d.secuencia;}),
        agrupamientoxevento = fechas.group().reduceCount(function(d) {return d.conteo;});

        
    

//EDAD
edad
    .width(668)
    .height(380)
    .slicesCap(11)
    .innerRadius(60)
    .externalLabels(50)
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

// GENERO
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

    // NIVEL DE ACTIVIDAD PÓR PROVINCIA
    actividadxprov
    .width(600)
    .height(700)
    .x(d3.scaleLinear().domain())
    .elasticX(true)
     .dimension(actividadxprovDim)
    .group(actividadxprovDim2);



    // REGIONES
    graficotorta
    .width(500)
    .height(500)
    .slicesCap(6)
    .innerRadius(100)
    .dimension(regionesDim)
    .group(agrupamientoXProvincia)
    .on('pretransition', function(chart) {
        chart.selectAll('text.pie-slice').text(function(d) {
            return d.data.key + ' = ' + dc.utils.printSingleValue((d.endAngle - d.startAngle) / (2*Math.PI) * 100) + '%';
        })
    });


    // RENDERS
    graficotorta.render();
    cursovxp.render();
    actividadxtemas.render();
    torta.render();
    edad.render();
    actividadxprov.render();
});

