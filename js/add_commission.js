$(document).ready(function() {
    var user_id, opcion;
    opcion = 4;
    pendientes = $('#pendientes').DataTable({
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
                title:     'Reporte de Comisiones Pendientes',
                message:   'Taxi Rodadero Bello Horizonte S.A.S',
                extend:    'excelHtml5',
                text:      '<i class="export__btn fas fa-file-excel"><p class="btn__export">Excel</p></i> ',
                titleAttr: 'Exportar a Excel',
                className: 'btn btn-success',
                exportOptions: {
                    columns: [ 0,1,2,3,4,5]
                } 
            },
            {
                title:     'Reporte de Comisiones Pendientes',
                message:   'Taxi Rodadero Bello Horizonte S.A.S',
                extend:    'pdfHtml5',
                text:      '<i class="export__btn fas fa-file-pdf"><p class="btn__export">Pdf</p></i> ',
                titleAttr: 'Exportar a PDF',
                className: 'btn btn-danger',
                exportOptions: {
                    columns: [ 0,1,2,3,4,5]
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
                title:     'Reporte de Comisiones Pendientes',
                message:   'Taxi Rodadero Bello Horizonte S.A.S',
                extend:    'print',
                text:      '<i class="export__btn fa fa-print"> <p class="btn__export">Imprimir</p></i> ',
                titleAttr: 'Imprimir',
                className: 'btn btn-info',
                exportOptions: {
                    columns: [ 0,1,2,3,4,5]
                }
            }
        ],
        'order': [[1, 'desc']],
        "ajax":{            
            "url": "../controlador/add_commission.php", 
            "method": 'POST',
            "data":{opcion:opcion}, //Opcion 4 para mostrar comisiones pendientes
            "dataSrc":""
        },
        "columns":[
            {"data": "FechaHora"},
            {"data": "Comisión"},
            {"data": "Operador"},
            {"data": "Comisionista"},
            {"data": "Conductor"},
            {"data": "DestinoPosible"},
            {"data": "Estado"},
            {"defaultContent": "<div class='text-center'><div class='btn-group'><button id='btnEditar' class='tabla__btn tabla__btn--editar'>Editar</button><button class='tabla__btn tabla__btn--tipocomisiondelete'>Finalizar</button></div></div>"}
        ]
    }); 

    var fila;

    frm_comision = $("#frm_comision");
    $('#frm_comision').submit(function(e){                         
        e.preventDefault();
        
        IdComisionista = $.trim($('#idcom').val());
        IdentificacionComisionista = $.trim($('#identcom').val());  
        NombresComisionista = $.trim($('#nombresCom').val());
        ApellidosComisionista = $.trim($('#apellidosCom').val());
        PuntoComisionista = $.trim($('#nombrePunto').val());
        DireccionComisionista = $.trim($('#direccionPunto').val()); 
        DestinoComisionista = $.trim($('#posibleDestino').val());
         
        IdConductor = $.trim($('#idCond').val());
        IdentificacionConductor = $.trim($('#identCond').val());
        NombresConductor = $.trim($('#nombresCond').val());
        ApellidosConductor = $.trim($('#apellidosCond').val());
        VehiculoConductor = $.trim($('#codVeh').val());
        PlacaConductor = $.trim($('#placaVeh').val());
        TurnoConductor = $.trim($('#turnoCond').val());

        $.ajax({ 
            url: "../controlador/add_commission.php", 
            type: "POST",
            datatype:"json",    
            data:  {IdComisionista:IdComisionista, IdentificacionComisionista:IdentificacionComisionista, NombresComisionista:NombresComisionista, ApellidosComisionista:ApellidosComisionista, PuntoComisionista:PuntoComisionista, DireccionComisionista:DireccionComisionista, DestinoComisionista:DestinoComisionista, IdConductor:IdConductor, IdentificacionConductor:IdentificacionConductor, NombresConductor:NombresConductor, ApellidosConductor:ApellidosConductor, VehiculoConductor:VehiculoConductor, PlacaConductor:PlacaConductor, TurnoConductor:TurnoConductor, opcion:'1'},    
            success: function(data) {
                if(data == 1){
                    console.log(data),
                    pendientes.ajax.reload(null, false),
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: '¡Agregado con exito!',
                        showConfirmButton: false,
                        timer: 2000
                    }),
                    frm_comision[0].reset();
                }else{
                    console.log(data);
                    
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: '¡Diligencia todos los campos!',
                        showConfirmButton: false,
                        timer: 2000
                    })
                    /* for(resultado in data){
                        
                        $('#'+resultado).html();
                        /* padre = document.querySelector('#'+resultado);
                        var txt = document.createElement('i');
                        txt.classList.add('text__alert');
                        txt.classList.add('remover');
                        console.log(txt.innerHTML = data[resultado]) ;
                        document.querySelector('#'+resultado).insertAdjacentElement('afterend', txt);
                    } */
                }   
            }
        });			        	 							     			
    });

    $("#cancelar").click(function(){
        Swal.fire({
            title: '¿Deseas limpiar el formulario?',
            icon: 'warning',
            html:`¡No podrás revertir esto!`,
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: false,
            reverseButtons: true,
            focusCancel: true,
            confirmButtonText:`Si, limpiar!`,
            confirmButtonColor: '#007E33',
            confirmButtonAriaLabel: 'Limpiar formulario',
            cancelButtonText:`No, cancelar!`,
            cancelButtonColor: '#CC0000',
            cancelButtonAriaLabel: 'Cancelar'
        }).then((result) => {
            if (result.value) { 
                frm_comision[0].reset();
                const time = 1000;
                /* borrarErrores(); */
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: '¡Limpiado con exito!',
                    showConfirmButton: false,
                    timer: 1500
                })
            }
        }); 
    })

    //Editar        
    $(document).on("click", "#btnEditar", function(){		        
        opcion = 2; //editar
        fila = $(this).closest("tr");

        user_id = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
        username = fila.find('td:eq(1)').text();
        first_name = fila.find('td:eq(2)').text();
        last_name = fila.find('td:eq(3)').text();
        gender = fila.find('td:eq(4)').text();
        password = fila.find('td:eq(5)').text();
        status = fila.find('td:eq(6)').text();

        $("#username").val(username);
        $("#first_name").val(first_name);
        $("#last_name").val(last_name);
        $("#gender").val(gender);
        $("#password").val(password);
        $("#status").val(status);
        
        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white" );
        $(".modal-title").text("Editar Usuario");		
        $('#modalCRUD').modal('show');		   
    });


    /* function borrarErrores(){
        let removerClase = document.querySelectorAll('.remover');
        if(removerClase.length > 0){
            for(let i = 0; i < removerClase.length; i++){
                removerClase[i].parentNode.removeChild(removerClase[i]);
            }
        }
    } */
    



});

















/* function mostrarDatos(){
    url = "../controlador/commission_pendiente.php";
    fetch(url)
    .then(respuesta => respuesta.json())
    .then(data => {
        let verDatos = document.querySelector("#add_commission");
        verDatos.innerHTML = "";
        for(let item of data){
            verDatos.innerHTML +=`
                <tr>
                    <td>${item.FechaHora}</td>
                    <td>${item.Comisión}</td>
                    <td>${item.Operador}</td>
                    <td>${item.Comisionista}</td>
                    <td>${item.Conductor}</td>
                    <td>${item.DestinoPosible}</td>
                    <td>${item.Estado}</td>
                    <td>
                        <div class="botones__tabla">
                            <buttom class="tabla__btn tabla__btn--editar" title="Editar">Editar</buttom>
                            <buttom class="tabla__btn tabla__btn--tipocomisiondelete" title="Finalizar">Finalizar</buttom>
                        </div>
                    </td>
                </tr>
            `
        };
          TABLA COMISIONES PENDIENTES  
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
                        title:     'Reporte de Comisiones Pendientes',
                        message:   'Taxi Rodadero Bello Horizonte S.A.S',
                        extend:    'excelHtml5',
                        text:      '<i class="export__btn fas fa-file-excel"><p class="btn__export">Excel</p></i> ',
                        titleAttr: 'Exportar a Excel',
                        className: 'btn btn-success',
                        exportOptions: {
                            columns: [ 0,1,2,3,4,5]
                        } 
                    },
                    {
                        title:     'Reporte de Comisiones Pendientes',
                        message:   'Taxi Rodadero Bello Horizonte S.A.S',
                        extend:    'pdfHtml5',
                        text:      '<i class="export__btn fas fa-file-pdf"><p class="btn__export">Pdf</p></i> ',
                        titleAttr: 'Exportar a PDF',
                        className: 'btn btn-danger',
                        exportOptions: {
                            columns: [ 0,1,2,3,4,5]
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
                        title:     'Reporte de Comisiones Pendientes',
                        message:   'Taxi Rodadero Bello Horizonte S.A.S',
                        extend:    'print',
                        text:      '<i class="export__btn fa fa-print"> <p class="btn__export">Imprimir</p></i> ',
                        titleAttr: 'Imprimir',
                        className: 'btn btn-info',
                        exportOptions: {
                            columns: [ 0,1,2,3,4,5]
                        }
                    }
                ],
                'order': [[1, 'desc']]
            });
        });

    });
}

mostrarDatos();

imprimir tabla con fetch  
const frmComision = document.querySelector('#frm_comision');
frmComision.addEventListener('submit', (e) => {
    e.preventDefault();

    borrarErrores();
    const data = new FormData(frmComision);
    var url = "../controlador/add_commission.php";
    fetch(url,{
        method: 'POST',
        body: data
    })
    .then(respuesta => respuesta.json())
    .then(respuesta => {
        if(respuesta === "agregado"){
             console.log('Success', respuesta); 
            frmComision.reset();
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '¡Agregado con exito!',
                showConfirmButton: false,
                timer: 2000
            })
            mostrarDatos();
        }else{
             console.log('Error', respuesta); 
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '¡Diligencia todos los campos!',
                showConfirmButton: false,
                timer: 2000
            })
            for(const resultado in respuesta){
                let padre = document.querySelector('#'+resultado);
                let txt = document.createElement('i');
                txt.classList.add('text__alert');
                txt.classList.add('remover');
                txt.innerHTML = respuesta[resultado];
                document.querySelector('#'+resultado).insertAdjacentElement('afterend', txt);
            }
        } 
    })
    .catch(error => console.log('error',error));
});
function borrarErrores(){
    let removerClase = document.querySelectorAll('.remover');
    if(removerClase.length > 0){
        for(let i = 0; i < removerClase.length; i++){
            removerClase[i].parentNode.removeChild(removerClase[i]);
        }
    }
}*/


 