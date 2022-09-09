$(document).ready(function() {
    $('#aprobacion').DataTable( {
        responsive: true,
        "bSort" : false,        
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
        dom: '',       	  
    } );
} );
$(document).ready(function() {
    $('#pago').DataTable( {
        responsive: true,
        "bSort" : false,        
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
        dom: '',       	  
    } );
} );
$(document).ready(function() {
    $('#cobrar').DataTable( {
        responsive: true,
        "bSort" : false,        
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
        dom: '',       	  
    } );
} );
$(document).ready(function() {
    $('#queja').DataTable( {
        responsive: true,
        "bSort" : false,        
        language: {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar :",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
                },
                "sProcessing":"Procesando...",
            },
        //para usar los botones   
        dom: '',       	  
    } );
} );

$(document).ready(function() {
    $('#pendientes').DataTable( {
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
        dom: 'Bfrtlp',       
        buttons:[ 
            {
                title:     'Reporte de Comisiones Pendientes',
                message:   'Taxi Rodadero Bello Horizonte S.A.S',
                extend:    'excelHtml5',
                text:      '<i class="export__btn fas fa-file-excel"><p class="btn__export">Excel</p></i> ',
                titleAttr: 'Exportar a Excel',
                className: 'btn btn-success' 
            },
            {
                title:     'Reporte de Comisiones Pendientes',
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
                title:     'Reporte de Comisiones Pendientes',
                message:   'Taxi Rodadero Bello Horizonte S.A.S',
                extend:    'print',
                text:      '<i class="export__btn fa fa-print"> <p class="btn__export">Imprimir</p></i> ',
                titleAttr: 'Imprimir',
                className: 'btn btn-info',
            }
        ]	  
    } );
} );
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
        dom: 'Bfrtlp',       
        buttons:[ 
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
        ]	  
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
        dom: 'Bfrtlp',       
        buttons:[ 
            {
                title:     'Reporte de Comisiones No Efectivas',
                message:   'Taxi Rodadero Bello Horizonte S.A.S',
                extend:    'excelHtml5',
                text:      '<i class="export__btn fas fa-file-excel"><p class="btn__export">Excel</p></i> ',
                titleAttr: 'Exportar a Excel',
                className: 'btn btn-success' 
            },
            {
                title:     'Reporte de Comisiones No Efectivas',
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
                title:     'Reporte de Comisiones No Efectivas',
                message:   'Taxi Rodadero Bello Horizonte S.A.S',
                extend:    'print',
                text:      '<i class="export__btn fa fa-print"> <p class="btn__export">Imprimir</p></i> ',
                titleAttr: 'Imprimir',
                className: 'btn btn-info',
            }
        ]	  
    } );
} );