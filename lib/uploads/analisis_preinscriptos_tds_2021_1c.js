var cursovxp   = new dc.BarChart("#cursovxp");
    genero   = new dc.PieChart("#genero");
    rango_edad   = new dc.PieChart("#rango_edad");
    region   = new dc.SelectMenu("#region");
    antiguedad   = new dc.PieChart("#antiguedad");
    postulacion   = new dc.SelectMenu("#postulacion");




d3.csv("pages/analisis_preinscriptos_tds_2021_1c.csv").then(function(experiments) {

   var  ndx = crossfilter(experiments),// 1 Crea la instancia de filtro cruzado.

        //NIVEL MAXIMO DE ESTUDIOS**********************************************************
        //EstudiosDIM = ndx.dimension(function(d) {return d.G3Q00001;}),
        //agrupamientoEstudios = EstudiosDIM.group().reduceCount(function(d) {return d.conteo;}),

        //ANTIGUEDAD EN EL CARGO
        AntiguedadDIM = ndx.dimension(function(d) {return d.G2Q00007;}),
        agrupamientoAntiguedad = AntiguedadDIM.group().reduceCount(function(d) {return d.conteo;}),

        //MEDIO 
        //MedioDIM = ndx.dimension(function(d) {return d.G5Q00001;}),
        //agrupamientoMedio = MedioDIM.group().reduceCount(function(d) {return d.conteo;}),

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
        
        
        //05 POSTULACIÓN
        postulacionDIM = ndx.dimension(function(d) {return d.postulacion_final;}),
        grupopostullacion = postulacionDIM.group().reduceCount(function(d) {return d.conteo;}),

          //05 REGIONES
        regionDIM = ndx.dimension(function(d) {return d.region;}),
        gruporegion = regionDIM.group().reduceCount(function(d) {return d.conteo;});



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


//
var agrupgeneroDim    = ndx.groupAll().reduce(funcAdd, funcRemove, funcInitial);


var label_percent = new dc.NumberDisplay("#generoConteo")
    .transitionDuration(1000)
    .group(agrupgeneroDim)
    .valueAccessor(function(d) { return d.conteo; })
    .formatNumber(function(d) {
        return d3.format('.4')(d);
    })



     //01 ANTIGUEDAD
    antiguedad
    .transitionDuration(1000)
    .width(430)
    .height(450) 
    .slicesCap(3)
    .innerRadius(50)
    .externalLabels(25)
    .externalRadiusPadding(85)
    .drawPaths(false)
    .dimension(AntiguedadDIM)
    .group(agrupamientoAntiguedad)
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


    //02 GENERO
    genero
    .transitionDuration(1000)
    .width(430)
    .height(450)
    .slicesCap(7)
    .innerRadius(50) //radio interno
    //.externalLabels(30) // distancia de las etiquetas
    .externalRadiusPadding(80) //radio externo
    .drawPaths(false) // dibuja las lineas desde el grafico a los titlos de los valores
    .dimension(generoDIM)
    .group(grupoGenero)
    .minAngleForLabel(100)
    .legend(dc.legend().highlightSelected(true))//muesta las leyendas
    .on('pretransition', function(chart) {
        chart.selectAll('text.pie-slice').text(function(d) {
            if (((d.endAngle - d.startAngle) / (2*Math.PI) * 100) >= 1.5){ //Si el porcentaje obtenido es mayor a 1 se muestra
                return d.data.key + ' = ' + dc.utils.printSingleValue((d.endAngle - d.startAngle) / (2*Math.PI) * 100) + '%';
            }
           
        })
        chart.selectAll('text.pie-slice').style("fill","black")
    });
   
    

    //03 RANGO ETARIO
    rango_edad
    .transitionDuration(1000)
    .width(430)
    .height(450) 
    .slicesCap(13)
    .innerRadius(50)
    .externalLabels(25)
    .externalRadiusPadding(80)
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
    
    

   
     //05 POSTULACIÓN
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


    //RENDERS
    //graficotorta.render();

    dc.renderAll();


});

