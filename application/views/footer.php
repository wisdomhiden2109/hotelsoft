
</body>
<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.0.min.js" ></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" ></script>
<script src="<?php echo base_url(); ?>assets/js/owl.carousel.js" ></script>
<script src="<?php echo base_url(); ?>assets/js/sweetalert2.min.all.js" ></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/sweetalert2.css">


<?php     

  switch ($section) {
    
    case 'home': ?>
      <script src="<?php echo base_url(); ?>assets/js/highcharts.js" ></script>
      <script src="<?php echo base_url(); ?>assets/js/highcharts-more.js" ></script>
      <script src="<?php echo base_url(); ?>assets/js/solid-gauge.js"></script>
      <script type="text/javascript">
        Highcharts.chart('sales_by_week', {
            chart: {
                type: 'areaspline'
            },
            title: {
                text: 'Estadistica de ventas semanal'
            },
            legend: {
                layout: 'vertical',
                align: 'left',
                verticalAlign: 'top',
                x: 150,
                y: 100,
                floating: true,
                borderWidth: 1,
                backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
            },
            xAxis: {
                categories: [
                    'Lunes',
                    'Martes',
                    'Miercoles',
                    'Jueves',
                    'Viernes',
                    'Sabado',
                    'Domingo'
                ],
                plotBands: [{ // visualize the weekend
                    from: 4.5,
                    to: 6.5,
                    color: 'rgba(68, 170, 213, .2)'
                }]
            },
            yAxis: {
                title: {
                    text: 'Cantidad monetaria (millon)'
                }
            },
            tooltip: {
                shared: true,
                valueSuffix: ' millones'
            },
            credits: {
                enabled: false
            },
            plotOptions: {
                areaspline: {
                    fillOpacity: 0.5
                }
            },
            series: [{
                name: 'Administrador Manuel',
                data: [1, 2, 3, 5, 4, 6, 5]
            }]
        });


        // Create the chart
        Highcharts.chart('sales_by_plan', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Planes mas vendidos'
            },
            plotOptions: {
                series: {
                    dataLabels: {
                        enabled: true,
                        format: '{point.name}: {point.y:.1f}%'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> del 100%<br/>'
            },
            series: [{
                name: 'Ventas',
                colorByPoint: true,
                data: [{
                    name: 'Plan Cupido',
                    y: 40.33,
                    drilldown: ' Plan Cupido'
                }, {
                    name: 'Plan Familiar',
                    y: 25.77,
                    drilldown: 'Plan Familiar'
                }, {
                    name: 'Plan Vacaciones',
                    y: 10.00,
                    drilldown: 'Plan Vacaciones'
                }, {
                    name: 'Plan Navidad',
                    y: 20.00,
                    drilldown: 'Plan Navidad'
                }]
            }]
        });


        var gaugeOptions = {

            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '110%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                    [0.1, '#55BF3B'], // green
                    [0.5, '#DDDF0D'], // yellow
                    [0.9, '#DF5353'] // red
                ],
                lineWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -120
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-speed', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 0,
                max: 200,
                title: {
                    text: 'Meta de venta mensual'
                }
            },

            credits: {
                enabled: false
            },

            series: [{
                name: 'Speed',
                data: [70],
                dataLabels: {
                    format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                        ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">${y}</span><br/>' +
                           '<span style="font-size:12px;color:silver">ventas/mes</span></div>'
                },
                tooltip: {
                    valueSuffix: 'ventas/mes'
                }
            }]

        }));


        Highcharts.chart('sales_anual', {
            chart: {
                type: 'column',
                options3d: {
                    enabled: true,
                    alpha: 10,
                    beta: 25,
                    depth: 70
                }
            },
            title: {
                text: 'Ventas anuales'
            },
            plotOptions: {
                column: {
                    depth: 25
                }
            },
            xAxis: {
                categories: Highcharts.getOptions().lang.shortMonths
            },
            yAxis: {
                title: {
                    text: null
                }
            },
            series: [{
                name: 'Sales',
                data: [200000, 350000, 800000, 400000, 430000, 50000, 110000, 490000, 600000, 750000, 100000, 280000]
            }]
        });

      </script>
    <?php break;

    case 'productos': ?>
      <script src="assets/js/dataTable.min.js"></script>
      <script type="text/javascript">
            $(document).ready(function() {
              $('#table-products').DataTable({
                  ajax: {
                      url: '<?php echo base_url()?>/products/get_ajax_products',
                      dataSrc: ''
                  },
                  columns: [
                      { data: 'idproducto' },
                      { data: 'nombre' },
                      { data: 'descripcion' },
                      { data: 'subcategoria' },
                      { data: 'categoria' }
                      
                  ],
                  columnDefs: [{
                      targets: 5,
                      data: null,
                      defaultContent: "<a><i class='material-icons icon-50 teal'>edit</i></a>"+
                                      "<a><i class='material-icons icon-50 '>highlight_off</i></a>"    
                  }],
                  language: {
                              lengthMenu: "Mostrar _MENU_ registros por página",
                              zeroRecords: "No se encontraron resultados",
                              info: "Página _PAGE_ de _PAGES_",
                              infoEmpty: "No hay resultados disponibles",
                              infoFiltered: "(verifica tu busqueda y vuelve a intentarlo)"
                          }
              });
          });
      </script>
    <?php  break;

    case 'nuevo-producto': ?>
        <script type="text/javascript">
          var option_default = "<option>Sub-categoria</option>";
          $("#categorie").change(function(){
            $("#subcategorie").html(option_default);
            var categorie = $("#categorie").val();
            $.post('<?php echo base_url()?>'+'subcategories/get_ajax_subcategories_by_categorie', {
                categorie: categorie
            }, function(data){
                var result = $.parseJSON(data);
                if(result == "error"){
                    console.log("Error");
                }else{
                    $.each(result,function(index,element){
                        var option = "<option value='"+element.idsubcategoria+"'>"+element.nombre+"</option>";
                        $("#subcategorie").append(option);
                    })
                }
            }) 
          })

          $("#form-product .file_product").each(function(index,element){    
              $(element).find('.inputfile').change(function(){
                console.log($(this));
                var name = $(this)[0].files[0].name;
                $(element).find('.labelfile').html(name);
              })
               
          })
        </script> 
      <?php break;

    case 'categorias': ?>
      <script src="assets/js/dataTable.min.js"></script>
      <script type="text/javascript">
          $(document).ready(function() {
            $('#table-categories').DataTable({
                ajax: {
                    url: '<?php echo base_url()?>/categories/get_ajax_categories',
                    dataSrc: ''
                },
                columns: [
                    { data: 'nombre' }
                ],
                columnDefs: [{
                    targets: 1,
                    data: null,
                    defaultContent: "<a><i class='material-icons icon-50 teal'>edit</i></a>"+
                                    "<a><i class='material-icons icon-50 '>highlight_off</i></a>"    
                }],
                language: {
                            lengthMenu: "Mostrar _MENU_ registros por página",
                            zeroRecords: "No se encontraron resultados",
                            info: "Página _PAGE_ de _PAGES_",
                            infoEmpty: "No hay resultados disponibles",
                            infoFiltered: "(verifica tu busqueda y vuelve a intentarlo)"
                        }
            });
          });

          $("#submit_new_categorie").click(function(e){
            e.preventDefault();
            var categorie = $("#categorie").val();
            if(categorie == "" || categorie.length < 3){
              alert("El nombre de la categoria esta muy corto o esta vacio. verifique");
            }else{
              $.post('<?php echo base_url()?>'+'categorias/crear', {
                categorie : categorie
              }, function(data){
                    if(data == "error"){
                        swal(
                          'Error',
                          'No se ha podido crear la categoria!',
                          'error'
                        );
                    }else{
                        swal(
                          'Proceso satisfactorio',
                          'Categoria creada correctamente!',
                          'success'
                        );
                    }
              })
            }
          }); 
      </script>
    <?php  break; 

    case 'subcategorias': ?>
      <script src="assets/js/dataTable.min.js"></script>
      <script type="text/javascript">
          $(document).ready(function() {
            $('#table-subcategories').DataTable({
                ajax: {
                    url: '<?php echo base_url()?>/subcategories/get_ajax_subcategories',
                    dataSrc: ''
                },
                columns: [
                    { data: 'nombresubcategoria'},
                    { data: 'nombrecategoria' }
                ],
                columnDefs: [{
                    targets: 2,
                    data: null,
                    defaultContent: "<a><i class='material-icons icon-50 teal'>edit</i></a>"+
                                    "<a><i class='material-icons icon-50 '>highlight_off</i></a>"    
                }],
                language: {
                            lengthMenu: "Mostrar _MENU_ registros por página",
                            zeroRecords: "No se encontraron resultados",
                            info: "Página _PAGE_ de _PAGES_",
                            infoEmpty: "No hay resultados disponibles",
                            infoFiltered: "(Buscando criterio de busqueda)"
                        }
            });
          });

          $("#submit_new_subcategorie").click(function(e){
            e.preventDefault();
            var categorie = $("#categorie").val();
            var subcategorie = $("#subcategorie").val();

            if(subcategorie == "" || subcategorie.length < 3){
              alert("El nombre de la subcategoria esta muy corto o esta vacio. verifique");  
            }else if(categorie == ""){
              alert("No ha seleccionado una categoria. verifique");
            }else{
              $.post('<?php echo base_url()?>'+'subcategorias/crear', {
                categorie : categorie,
                subcategorie : subcategorie
              }, function(data){
                    if(data == "error"){
                        swal(
                          'Error',
                          'No se ha podido crear la subcategoria!',
                          'error'
                        );
                    }else{
                        swal(
                          'Proceso satisfactorio',
                          'SubCategoria creada correctamente!',
                          'success'
                        );
                    }
              })
            }
          }); 
      </script>
    <?php  break; 
  } ?>
  
</html>