var perfil_comp_incomp   = new dc.PieChart("#perfil_comp_incomp");
    pertenece_AC   = new dc.PieChart("#pertenece_AC");




  d3.csv("formar_cultura.csv").then(function(experiments) {
    
   var  ndx = crossfilter(experiments),// 1 Crea la instancia de filtro cruzado.

        //01 DIMENSIÓN perfiles completos/incompletos
        perfilDim = ndx.dimension(function(d) {return d.perfil;}), 
        gruposperfilDim = perfilDim.group().reduceCount(function(d) {return +d.conteo;}),



        //02 DIMENSIÓN DE pertenece o no pertenece a AC
        pertenece_a_AC_DIM = ndx.dimension(function(d) {return d.usuarie_ac;}),
        agrupamiento_ac= pertenece_a_AC_DIM.group().reduceCount(function(d) {return d.conteo});

        

//01 perfil completo/incompleto
perfil_comp_incomp
    .width(668)
    .height(380)
    .slicesCap(11)
    .innerRadius(60)
    .externalLabels(50)
    .externalRadiusPadding(30)
    .drawPaths(false)
    .dimension(perfilDim)
    .group(gruposperfilDim)
    .legend(dc.legend().highlightSelected(true))
    .on('pretransition', function(chart) {
        chart.selectAll('text.pie-slice').text(function(d) {
            return d.data.key + ' = ' + dc.utils.printSingleValue((d.endAngle - d.startAngle) / (2*Math.PI) * 100) + '%';
        })
        chart.selectAll('text.pie-slice').style("fill","black")
    });

//Pertenece a AC 
pertenece_AC
    .width(668)
    .height(380)
    .slicesCap(6)
    .innerRadius(60)
    //.externalLabels(10)
    //.externalRadiusPadding(30)
    .drawPaths(false)
    .dimension(pertenece_a_AC_DIM)
    .group(agrupamiento_ac)
    .legend(dc.legend().highlightSelected(true))
    .on('pretransition', function(chart) {
        chart.selectAll('text.pie-slice').text(function(d) {
            return d.data.key + ' = ' + dc.utils.printSingleValue((d.endAngle - d.startAngle) / (2*Math.PI) * 100) + '%';
        })
        chart.selectAll('text.pie-slice').style("fill","black")
    });



    //RENDERS
    perfil_comp_incomp.render();
    pertenece_AC.render();
});

