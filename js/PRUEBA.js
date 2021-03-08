var //cursovxp2   = new dc.BarChart("#cursovxp2");
    genero2   = new dc.PieChart("#genero2");
    rango_edad2   = new dc.PieChart("#rango_edad2");
    rango_AP2   = new dc.PieChart("#rango_AP2");
    postulacion2   = new dc.SelectMenu("#postulacion2");
    region2   = new dc.SelectMenu("#region2");



d3.csv("analisis_preinscriptos_gcp.csv").then(function(experiments) {

   var  ndx = crossfilter(experiments),// 1 Crea la instancia de filtro cruzado.

        //01 PARTICIPANTES POR PROVINCIAS
        provinciaDIM2 = ndx.dimension(function(d) {return d.G1Q00008;}),
        agrupamientoProvincias2 = provinciaDIM2.group().reduceCount(function(d) {return d.conteo;}),

        //02 GENERO
        generoDIM2 = ndx.dimension(function(d) {return d.G1Q00004;}),
        grupoGenero2 = generoDIM2.group().reduceCount(function(d) {return d.conteo;}),

        //03 RANGO ETARIO
        rangoedadDIM2 = ndx.dimension(function(d) {return d.rango_etario;}),
        grupoETARIO2 = rangoedadDIM2.group().reduceCount(function(d) {return d.conteo;}),

         //04 RANGO de la ADMINISTRACIÓN PÚBLICA
         rangoapDIM2 = ndx.dimension(function(d) {return d.G2Q00002;}),
         grupoAP2 = rangoapDIM2.group().reduceCount(function(d) {return d.conteo;}),

        //05 Postulacion
        postulacionDIM2 = ndx.dimension(function(d) {return d.postulacion_final;}),
        grupopostulacion2 = postulacionDIM2.group().reduceCount(function(d) {return d.conteo;}),

        //05 REGIONES
        regionDIM2 = ndx.dimension(function(d) {return d.region;}),
        gruporegion2 = regionDIM2.group().reduceCount(function(d) {return d.conteo;});



var funcAdd = function(p, v) {
    p.conteo      += (+v.conteo     );

    return p;
};
var funcRemove = function(p, v) {
    p.conteo      -= (+v.conteo     );

    return p;
};
var funcInitial = function() {
    return {
        conteo      : 0

    };
};
    
     //02 GENERO
     genero2
     .transitionDuration(1000)
     .width(430)
     .height(450)
     .slicesCap(7)
     .innerRadius(50) //radio interno
     //.externalLabels(30) // distancia de las etiquetas
     .externalRadiusPadding(60) //radio externo
     .drawPaths(false) // dibuja las lineas desde el grafico a los titlos de los valores
     .dimension(generoDIM2)
     .group(grupoGenero2)
     .minAngleForLabel(100)
     .legend(dc.legend().highlightSelected(true))//muesta las leyendas
     .on('pretransition', function(chart) {
         chart.selectAll('text.pie-slice').text(function(d) {
             if (((d.endAngle - d.startAngle) / (2*Math.PI) * 100) >= 1){ //Si el porcentaje obtenido es mayor a 1 se muestra
                 return d.data.key + ' = ' + dc.utils.printSingleValue((d.endAngle - d.startAngle) / (2*Math.PI) * 100) + '%';
             }
            
         })
         chart.selectAll('text.pie-slice').style("fill","black")
     });
    
     //03 RANGO ETARIO
    rango_edad2
    .transitionDuration(1000)
    .width(430)
    .height(450) 
    .slicesCap(13)
    .innerRadius(50)
    .externalLabels(25)
    .externalRadiusPadding(90)
    .drawPaths(false)
    .dimension(rangoedadDIM2)
    .group(grupoETARIO2)
    .minAngleForLabel(100)
    .legend(dc.legend().highlightSelected(true))
    .on('pretransition', function(chart) {
        chart.selectAll('text.pie-slice').text(function(d) {
            if (((d.endAngle - d.startAngle) / (2*Math.PI) * 100) >= 2){ //Si el porcentaje obtenido es mayor a 2 se muestra
                return d.data.key + ' = ' +  dc.utils.printSingleValue((d.endAngle - d.startAngle) / (2*Math.PI) * 100) + '%';
            }
           
        })
        chart.selectAll('text.pie-slice').style("fill","black")
    });

    //04 RANGO DE LA ADMINISTRACIÓN PÚBLICA
    rango_AP2
    .transitionDuration(1000)
    .width(400)
    .height(430)
    .slicesCap(5)
    .innerRadius(50)
    .externalLabels(30)
    .externalRadiusPadding(60)
    .drawPaths(false)
    .dimension(rangoapDIM2)
    .group(grupoAP2)
    .minAngleForLabel(100)
    .legend(dc.legend().highlightSelected(true))
    .on('pretransition', function(chart) {
        chart.selectAll('text.pie-slice').text(function(d) {
            if (((d.endAngle - d.startAngle) / (2*Math.PI) * 100) >= 0.1){ //Si el porcentaje obtenido es mayor a 0.1 se muestra
                return d.data.key + ' = ' +  dc.utils.printSingleValue((d.endAngle - d.startAngle) / (2*Math.PI) * 100) + '%';
            }
        })
        chart.selectAll('text.pie-slice').style("fill","black")
    });

   
    //05 POSTULACIÓN
    postulacion2
    .dimension(postulacionDIM2)
    .group(postulacionDIM2.group())
    .multiple(true)
    .numberVisible(5)
    .controlsUseVisibility(true);
    
    //REGIONES LISTA DESPLEGABLE
    region2
    .dimension(regionDIM2)
    .group(regionDIM2.group())
    .controlsUseVisibility(true);


    dc.renderAll();


});

