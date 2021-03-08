var cursovxp   = new dc.BarChart("#cursovxp");
    genero   = new dc.PieChart("#genero");
    rango_edad   = new dc.PieChart("#rango_edad");
    rango_AP   = new dc.PieChart("#rango_AP");
    postulacion   = new dc.SelectMenu("#postulacion");
    region   = new dc.SelectMenu("#region");

    ////////////////////////////////////////SEGUNDO FILTRO/////////////////////////////////////////
    cursovxp2   = new dc.BarChart("#cursovxp2");
    genero2   = new dc.PieChart("#genero2");
    rango_edad2   = new dc.PieChart("#rango_edad2");
    rango_AP2   = new dc.PieChart("#rango_AP2");
    postulacion2   = new dc.SelectMenu("#postulacion2");
    region2   = new dc.SelectMenu("#region2");



d3.csv("analisis_preinscriptos_gcp.csv").then(function(experiments) {

   var  ndx = crossfilter(experiments),// 1 Crea la instancia de filtro cruzado.

        //01 PARTICIPANTES POR PROVINCIAS
        provinciaDIM = ndx.dimension(function(d) {return d.G1Q00008;}),
        agrupamientoProvincias = provinciaDIM.group().reduceCount(function(d) {return d.conteo;}),

        //02 GENERO
        generoDIM = ndx.dimension(function(d) {return d.G1Q00004;}),
        grupoGenero = generoDIM.group().reduceCount(function(d) {return d.conteo;}),
        //02 GENERO
        generoDIM2 = ndx.dimension(function(d) {return d.G1Q00004;}),
        grupoGenero2 = generoDIM2.groupAll().reduceSum(function(d) {return d.conteo;}),

       //03 RANGO ETARIO
        rangoedadDIM = ndx.dimension(function(d) {return d.rango_etario;}),
        grupoETARIO = rangoedadDIM.group().reduceCount(function(d) {return d.conteo;}),

        //04 RANGO de la ADMINISTRACIÃ“N PÃšBLICA
        rangoapDIM = ndx.dimension(function(d) {return d.G2Q00002;}),
        grupoAP = rangoapDIM.group().reduceCount(function(d) {return d.conteo;}),
        
        //05 POSTULACIÃ“N
        postulacionDIM = ndx.dimension(function(d) {return d.postulacion_final;}),
        grupopostullacion = postulacionDIM.group().reduceCount(function(d) {return d.conteo;}),

        //05 REGIONES
        regionDIM = ndx.dimension(function(d) {return d.region;}),
        gruporegion = regionDIM.group().reduceCount(function(d) {return d.conteo;});

        ////////////////////////////////////////SEGUNDO FILTRO/////////////////////////////////////////
        var  ndx2 = crossfilter(experiments),// 1 Crea la instancia de filtro cruzado.
        
        //01 PARTICIPANTES POR PROVINCIAS
        provinciaDIM2 = ndx2.dimension(function(d) {return d.G1Q00008;}),
        agrupamientoProvincias2 = provinciaDIM2.group().reduceCount(function(d) {return d.conteo;}),

        //02 GENERO
        generoDIM2 = ndx2.dimension(function(d) {return d.G1Q00004;}),
        grupoGenero2 = generoDIM2.group().reduceCount(function(d) {return d.conteo;}),

        //03 RANGO ETARIO
        rangoedadDIM2 = ndx2.dimension(function(d) {return d.rango_etario;}),
        grupoETARIO2 = rangoedadDIM2.group().reduceCount(function(d) {return d.conteo;}),

        //04 RANGO de la ADMINISTRACIÃ“N PÃšBLICA
        rangoapDIM2 = ndx2.dimension(function(d) {return d.G2Q00002;}),
        grupoAP2 = rangoapDIM2.group().reduceCount(function(d) {return d.conteo;}),

        //05 Postulacion
        postulacionDIM2 = ndx2.dimension(function(d) {return d.postulacion_final;}),
        grupopostulacion2 = postulacionDIM2.group().reduceCount(function(d) {return d.conteo;}),

        //05 REGIONES
        regionDIM2 = ndx2.dimension(function(d) {return d.region;}),
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

////////////////////////////////////////SEGUNDO FILTRO/////////////////////////////////////////
var funcAdd2 = function(p, v) {
    p.conteo      += (+v.conteo     );

    return p;
};
var funcRemove2 = function(p, v) {
    p.conteo      -= (+v.conteo     );

    return p;
};
var funcInitial2 = function() {
    return {
        conteo      : 0

    };
};


//
var agrupgeneroDim    = ndx.groupAll().reduce(funcAdd, funcRemove, funcInitial);
var agrupgeneroDim2    = ndx2.groupAll().reduce(funcAdd2, funcRemove2, funcInitial2);


    var label_percent = new dc.NumberDisplay("#generoConteo")
    .transitionDuration(1000)
    .group(agrupgeneroDim)
    .valueAccessor(function(d) { return d.conteo; })
    .formatNumber(function(d) {
        return d3.format('.4')(d);
    })

    var label_percent = new dc.NumberDisplay("#generoConteo2")
    .transitionDuration(1000)
    .group(agrupgeneroDim2)
    .valueAccessor(function(d) { return d.conteo; })
    .formatNumber(function(d) {
        return d3.format('.4')(d);
    })




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
    .margins({left: 60, top: 20, right: 0, bottom: 120});


    //02 GENERO
    genero
    .transitionDuration(1000)
    .height(320) 
    .slicesCap(7)
    .innerRadius(30) //radio interno
    //.externalLabels(30) // distancia de las etiquetas
    .externalRadiusPadding(60) //radio externo
    .drawPaths(false) // dibuja las lineas desde el grafico a los titlos de los valores
    .dimension(generoDIM)
    .group(grupoGenero)
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
    rango_edad
    .transitionDuration(1000)
    .height(370) 
    .slicesCap(13)
    .innerRadius(30)
    .externalLabels(15)
    .externalRadiusPadding(90)
    .drawPaths(false)
    .dimension(rangoedadDIM)
    .group(grupoETARIO)
    .minAngleForLabel(100)
    .legend(dc.legend().highlightSelected(true))
    .on('pretransition', function(chart) {
        chart.selectAll('text.pie-slice').text(function(d) {
            if (((d.endAngle - d.startAngle) / (2*Math.PI) * 100) >= 2){ //Si el porcentaje obtenido es mayor a 2 se muestra
                return d.data.key + ' = ' +  dc.utils.printSingleValue((d.endAngle - d.startAngle) / (2*Math.PI) * 100) + '%';
            }
           
        })
        chart.selectAll('text.pie-slice').style("fill","black")
    })
    ;
    
    

    //04 RANGO DE LA ADMINISTRACIÃ“N PÃšBLICA
    rango_AP
    .transitionDuration(1000)
    .height(310) 
    .slicesCap(5)
    .innerRadius(30)
    .externalLabels(30)
    .externalRadiusPadding(60)
    .drawPaths(false)
    .dimension(rangoapDIM)
    .group(grupoAP)
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

     //05 POSTULACIÃ“N
    postulacion
    .dimension(postulacionDIM)
    .group(postulacionDIM.group())
    .multiple(true)
    .numberVisible(5)
    .controlsUseVisibility(true);
    
    //REGIONES LISTA DESPLEGABLE
    region
    .dimension(regionDIM)
    .group(regionDIM.group())
    .controlsUseVisibility(true);


    ////////////////////////////////////////SEGUNDO FILTRO/////////////////////////////////////////
    //01 PARTICIPANTES POR PROVINCIA
    cursovxp2
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
    .dimension(provinciaDIM2)
    .group(agrupamientoProvincias2)
    .renderLabel(true)
    .margins({left: 60, top: 20, right: 0, bottom: 120});

    //02 GENERO
    genero2
    .transitionDuration(1000)
    .height(320) 
    .slicesCap(7)
    .innerRadius(30) //radio interno
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
    .height(370) 
    .slicesCap(13)
    .innerRadius(30)
    .externalLabels(15)
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

    //04 RANGO DE LA ADMINISTRACIÃ“N PÃšBLICA
    rango_AP2
    .transitionDuration(1000)
    .height(320) 
    .slicesCap(5)
    .innerRadius(30)
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

   
    //05 POSTULACIÃ“N
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

    //RENDERS
    //graficotorta.render();

    dc.renderAll();


});