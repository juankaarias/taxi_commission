$(document).ready(function() {
    var table = $('#example').DataTable({
        select: true,
        footerCallback: function () {
            var api = this.api();
            $( api.column( 6 ).footer() ).html(
                api.rows( {selected: true} ).data().pluck(6).sum()
                
            );
        },
        language:{
            decimal: ',',
            thousands: '.',
            select: {
                rows: {
                    _: "Seleccionó %d Comisiones",
                    0: "Seleccione una Comisión",
                    1: "Seleccionó 1 Comisión"
                },
            },
            "decimal": "",
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Total Comisiones _TOTAL_",
            "infoEmpty": "Total de registros 0",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "thousands": ",",
            "sSearch": "Buscar Comisión:",
            "oPaginate": {
            "sFirst": "Primero",
            "sLast":"Último",
            "sNext":"Siguiente",
            "sPrevious": "Anterior",
            "sProcessing":"Procesando...",
            },
            buttons: {
                selectAll: "Seleccionar Todo",
                selectNone: "Deseleccionar Todo"
            }
        },
        dom: 'fiBtlrp',
        buttons:[ 
            {
                extend: 'selectAll', 
                text: '<i class="export__btn  fa-regular fa-square-check"><p class="btn__export btn__export--select">Selec. Todo</p></i>',
                titleAttr: 'Seleccionar Todo',
            },
            {
                extend: 'selectNone', 
                text: '<i class="export__btn  fa-regular fa-square"><p class="btn__export btn__export--deselect">Deselec. Todo</p></i>',
                titleAttr: 'Deseleccionar Todo',
            },
            {
                title:     'Reporte de Comisiones Efectivas',
                message:   'Taxi Rodadero Bello Horizonte S.A.S',
                extend:    'excelHtml5',
                text:      '<i class="export__btn fas fa-file-excel"><p class="btn__export">Excel</p></i> ',
                titleAttr: 'Exportar a Excel',
                className: 'btn btn-success' 
            },
            {
                title:     'Reporte de Comisiones Efectivas',
                message:   'Taxi Rodadero Bello Horizonte S.A.S',
                extend:    'pdfHtml5',
                text:      '<i class="export__btn fas fa-file-pdf"><p class="btn__export">Pdf</p></i> ',
                titleAttr: 'Exportar a PDF',
                className: 'btn btn-danger',
                orientation: 'landscape',
                pageSize: 'A4',
                customize:function(doc) {
                    doc.styles.title = {
                        color: 'black',
                        fontSize: '15',
                        alignment: 'left',
                        bold: true
                    }
                    doc.styles.message = {
                        color: 'black',
                        fontSize: '15',

                        alignment: 'center',
                        margin: [ 0, 0, 100, 0]
                    }
                    doc.styles['td:nth-child(2)'] = { 
                        width: '100px',
                        'max-width': '100px'
                    }
                    doc.styles.tableHeader = {
                        fillColor:'#FFD800',
                        color:'black',
                        alignment: 'center',
                        bold: true
                    }
                    doc.styles.table = {
                        alignment: 'center'
                    }
                } 
            },
            {
                title:     'Reporte de Comisiones Efectivas',
                message:   'Taxi Rodadero Bello Horizonte S.A.S',
                extend:    'print',
                text:      '<i class="export__btn fa fa-print"> <p class="btn__export">Imprimir</p></i> ',
                titleAttr: 'Imprimir',
                className: 'btn btn-info',
            }
        ],	 
       'ajax': 'https://gyrocode.github.io/files/jquery-datatables/arrays_id.json',
       'columnDefs': [
          {
             'targets': 0,
             'checkboxes': {
                'selectRow': true
             }
          }
       ],
       'select': {
          'style': 'multi'
       },
       'order': [[1, 'desc']], 
    });
    table.on('select', function () {
        table.draw(false);
    })
    table.on('deselect', function () {
        table.draw(false);
    })
    // Manejar evento de envío de formulario
    $('#frm-example').on('submit', function(e){
       var form = this;
       var rows_selected = table.column(0).checkboxes.selected();
       /* var count = table.rows( { selected: true } ).count();
       alert(count);
        events.prepend( '<div>'+count+' row(s) selected</div>' ); */
       // Iterar sobre todas las casillas de verificación seleccionadas
       $.each(rows_selected, function(index, rowId){
          // Crear un elemento oculto 
          $(form).append(
              $('<input>')
                 .attr('type', 'hidden')
                 .attr('name', 'id[]')
                 .val(rowId)
          );
       });

       // SOLO PARA DEMOSTRACION
       // El siguiente código no es necesario en producción
       
       // Salida de datos de formulario a una consola 
       $('#example-console-rows').text(rows_selected.join(","));
       
       // Salida de datos de formulario a una consola 
       $('#example-console-form').text($(form).serialize());
        
       // Eliminar elementos agregados
       $('input[name="id\[\]"]', form).remove();
        
       // Impedir el envío de formularios reales
        /* e.preventDefault();  */ 
    });  
   
});

/* TABLA TIPO DE COMISIONES */
$(document).ready(function() {
    $('#tipocomisiones').DataTable( {
        responsive: true,
        "bSort" : true,        
        language: {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar Comisión: ",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
                },
                "sProcessing":"Procesando...",
            },
        //para usar los botones   
        dom: 'fBrtlp',     
        buttons:[ 
            {
                title:     'Lista tipo de Comisiones',
                message:   'Taxi Rodadero Bello Horizonte S.A.S',
                extend:    'excelHtml5',
                text:      '<i class="export__btn fas fa-file-excel"><p class="btn__export">Excel</p></i> ',
                titleAttr: 'Exportar a Excel',
                className: 'btn btn-success',
                exportOptions: {
                    columns: [ 0,1,2,3,4]
                } 
            },
            {
                title:     'Lista tipo de Comisiones',
                message:   'Taxi Rodadero Bello Horizonte S.A.S',
                extend:    'pdfHtml5',
                text:      '<i class="export__btn fas fa-file-pdf"><p class="btn__export">Pdf</p></i> ',
                titleAttr: 'Exportar a PDF',
                className: 'btn btn-danger',
                exportOptions: {
                    columns: [ 0,1,2,3,4]
                },
                orientation: 'landscape',
                pageSize: 'A4',
                customize:function(doc) {
                    doc.styles.title = {
                        color: 'black',
                        fontSize: '15',
                        alignment: 'left',
                        bold: true
                    }
                    doc.styles.message = {
                        color: 'black',
                        fontSize: '15',

                        alignment: 'center',
                        margin: [ 0, 0, 100, 0]
                    }
                    doc.styles['td:nth-child(2)'] = { 
                        width: '100px',
                        'max-width': '100px'
                    }
                    doc.styles.tableHeader = {
                        fillColor:'#FFD800',
                        color:'black',
                        alignment: 'center',
                        bold: true
                    }
                    doc.styles.table = {
                        alignment: 'center'
                    }
                } 
            },
            {
                title:     'Lista tipo de Comisiones',
                message:   'Taxi Rodadero Bello Horizonte S.A.S',
                extend:    'print',
                text:      '<i class="export__btn fa fa-print"> <p class="btn__export">Imprimir</p></i> ',
                titleAttr: 'Imprimir',
                className: 'btn btn-info',
                exportOptions: {
                    columns: [ 0,1,2,3,4]
                }
            }
        ],
        'order': [[0, 'desc']]	  
    } );
    
    
} );


/* MODAL COMISIONISTAS */
$(document).ready(function() {
    var table = $('#modalasignarcomisionista').DataTable({
        language:{
            "decimal": "",
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Total Comisiones _TOTAL_",
            "infoEmpty": "Total de registros 0",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "thousands": ",",
            "sSearch": "Buscar Comisionista:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior",
                "sProcessing":"Procesando...",
            }
        },       
        dom: 'ftp',
       /* 'columnDefs': [
          {
             'targets': 0,
             'checkboxes': {
                'selectRow': true
             }
          }
       ], 
       'select': {
          'style': 'single'
       },*/
       'order': [[0, 'desc']],
       
    });/* 
    table.on('select', function () {
        table.draw(false);
    })
    table.on('deselect', function () {
        table.draw(false);
    })   */
   
});

/* MODAL CONDUCTOR */
$(document).ready(function() {
    var table = $('#modal__asignarconductor').DataTable({
        language:{
            "decimal": "",
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Total Comisiones _TOTAL_",
            "infoEmpty": "Total de registros 0",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "thousands": ",",
            "sSearch": "Buscar Conductor:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior",
                "sProcessing":"Procesando...",
            }
        },
        dom: 'ftp',
       'order': [[0, 'desc']],
    });  
});


$(document).ready(function() {
    var table = $('#modalrecaudoconductor').DataTable({
        language:{
            "decimal": "",
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Total Comisiones _TOTAL_",
            "infoEmpty": "Total de registros 0",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "thousands": ",",
            "sSearch": "Buscar Conductor:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior",
                "sProcessing":"Procesando...",
            }
        },
        dom: 'ftp',
       /* 'columnDefs': [
          {
             'targets': 0,
             'checkboxes': {
                'selectRow': true
             }
          }
       ], */
       'select': {
          'style': 'single'
       },
       'order': [[0, 'desc']],
       
    });
    table.on('select', function () {
        table.draw(false);
    })
    table.on('deselect', function () {
        table.draw(false);
    })  
   
});

$(document).ready(function() {
    $('#efectivas').DataTable( {
        responsive: true,
        "bSort" : true,        
        language: {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
                },
                "sProcessing":"Procesando...",
            },
        //para usar los botones   
        dom: 'fBrtlp',       
        buttons:[ 
            {
                title:     'Reporte de Comisiones Efectivas',
                message:   'Taxi Rodadero Bello Horizonte S.A.S',
                extend:    'excelHtml5',
                text:      '<i class="export__btn fas fa-file-excel"><p class="btn__export">Excel</p></i> ',
                titleAttr: 'Exportar a Excel',
                className: 'btn btn-success',
                exportOptions: {
                    columns: [ 0,1,2,3,4,5,6,7,8]
                } 
            },
            {
                title:     'Reporte de Comisiones Efectivas',
                message:   'Taxi Rodadero Bello Horizonte S.A.S',
                extend:    'pdfHtml5',
                text:      '<i class="export__btn fas fa-file-pdf"><p class="btn__export">Pdf</p></i> ',
                titleAttr: 'Exportar a PDF',
                className: 'btn btn-danger',
                orientation: 'landscape',
                pageSize: 'A4',
                exportOptions: {
                    columns: [ 0,1,2,3,4,5,6,7,8]
                },
                customize:function(doc) {
                    doc.styles.title = {
                        color: 'black',
                        fontSize: '15',
                        alignment: 'left',
                        bold: true
                    }
                    doc.styles.message = {
                        color: 'black',
                        fontSize: '15',

                        alignment: 'center',
                        margin: [ 0, 0, 100, 0]
                    }
                    doc.styles['td:nth-child(2)'] = { 
                        width: '100px',
                        'max-width': '100px'
                    }
                    doc.styles.tableHeader = {
                        fillColor:'#FFD800',
                        color:'black',
                        alignment: 'center',
                        bold: true
                    }
                    doc.styles.table = {
                        alignment: 'center'
                    }
                }
                 
            },
            {
                title:     'Reporte de Comisiones Efectivas',
                message:   'Taxi Rodadero Bello Horizonte S.A.S',
                extend:    'print',
                text:      '<i class="export__btn fa fa-print"> <p class="btn__export">Imprimir</p></i> ',
                titleAttr: 'Imprimir',
                className: 'btn btn-info',
                exportOptions: {
                    columns: [ 0,1,2,3,4,5,6,7,8]
                }
            }
        ],
        'order': [[0, 'desc']]		  
    } );
} );


$(document).ready(function() {
    $('#usuarios').DataTable( {
        responsive: true,
        "bSort" : true,        
        language: {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
                },
                "sProcessing":"Procesando...",
            },
        //para usar los botones   
        dom: 'fBrtlp',        
        buttons:[ 
            {
                title:     'Lista de Usuarios',
                message:   'Taxi Rodadero Bello Horizonte S.A.S',
                extend:    'excelHtml5',
                text:      '<i class="export__btn fas fa-file-excel"><p class="btn__export">Excel</p></i> ',
                titleAttr: 'Exportar a Excel',
                className: 'btn btn-success',
                exportOptions: {
                    columns: [ 0,1,2,3,4,5,6,7]
                }  
            },
            {
                title:     'Lista de Usuarios',
                message:   'Taxi Rodadero Bello Horizonte S.A.S',
                extend:    'pdfHtml5',
                text:      '<i class="export__btn fas fa-file-pdf"><p class="btn__export">Pdf</p></i> ',
                titleAttr: 'Exportar a PDF',
                className: 'btn btn-danger',
                orientation: 'landscape',
                exportOptions: {
                    columns: [ 0,1,2,3,4,5,6,7]
                },
                orientation: 'Portrait',
                pageSize: 'A4',
                customize:function(doc) {
                    doc.styles.title = {
                        color: 'black',
                        fontSize: '15',
                        alignment: 'left',
                        bold: true
                    }
                    doc.styles.message = {
                        color: 'black',
                        fontSize: '15',

                        alignment: 'center',
                        margin: [ 0, 0, 100, 0]
                    }
                    doc.styles['td:nth-child(2)'] = { 
                        width: '100px',
                        'max-width': '100px'
                    }
                    doc.styles.tableHeader = {
                        fillColor:'#FFD800',
                        color:'black',
                        alignment: 'center',
                        bold: true
                    }
                    doc.styles.table = {
                        alignment: 'center'
                    }
                } 
            },
            {
                title:     'Lista de Usuarios',
                message:   'Taxi Rodadero Bello Horizonte S.A.S',
                extend:    'print',
                text:      '<i class="export__btn fa fa-print"> <p class="btn__export">Imprimir</p></i> ',
                titleAttr: 'Imprimir',
                className: 'btn btn-info',
                exportOptions: {
                    columns: [ 0,1,2,3,4,5,6,7]
                }
            }
        ],
        'order': [[0, 'desc']]		  
    } );
} );
$(document).ready(function() {
    $('#noefectivas').DataTable( {
        responsive: true,
        "bSort" : true,        
        language: {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
                },
                "sProcessing":"Procesando...",
            },
        //para usar los botones   
        dom: 'fBrtlp',     
        buttons:[ 
            {
                title:     'Reporte de Comisiones No Efectivas',
                message:   'Taxi Rodadero Bello Horizonte S.A.S',
                extend:    'excelHtml5',
                text:      '<i class="export__btn fas fa-file-excel"><p class="btn__export">Excel</p></i> ',
                titleAttr: 'Exportar a Excel',
                className: 'btn btn-success',
                exportOptions: {
                    columns: [ 0,1,2,3,4,5,6,7,8]
                },   
            },
            {
                title:     'Reporte de Comisiones No Efectivas',
                message:   'Taxi Rodadero Bello Horizonte S.A.S',
                extend:    'pdfHtml5',
                text:      '<i class="export__btn fas fa-file-pdf"><p class="btn__export">Pdf</p></i> ',
                titleAttr: 'Exportar a PDF',
                className: 'btn btn-danger',
                orientation: 'landscape',
                exportOptions: {
                    columns: [ 0,1,2,3,4,5,6,7,8]
                },  
                pageSize: 'A4',
                customize:function(doc) {
                    doc.styles.title = {
                        color: 'black',
                        fontSize: '15',
                        alignment: 'left',
                        bold: true
                    }
                    doc.styles.message = {
                        color: 'black',
                        fontSize: '15',

                        alignment: 'center',
                        margin: [ 0, 0, 100, 0]
                    }
                    doc.styles['td:nth-child(2)'] = { 
                        width: '100px',
                        'max-width': '100px'
                    }
                    doc.styles.tableHeader = {
                        fillColor:'#FFD800',
                        color:'black',
                        alignment: 'center',
                        bold: true
                    }
                    doc.styles.table = {
                        alignment: 'center'
                    }
                } 
            },
            {
                title:     'Reporte de Comisiones No Efectivas',
                message:   'Taxi Rodadero Bello Horizonte S.A.S',
                extend:    'print',
                text:      '<i class="export__btn fa fa-print"> <p class="btn__export">Imprimir</p></i> ',
                titleAttr: 'Imprimir',
                className: 'btn btn-info',
                exportOptions: {
                    columns: [ 0,1,2,3,4,5,6,7,8]
                }  
            }
        ],
        'order': [[0, 'desc']]		  
    } );
} );