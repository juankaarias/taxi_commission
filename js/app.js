const bloque = document.querySelectorAll('.bloque');
const p = document.querySelectorAll('.p');

p.forEach((cadap, i)=>{
    p[i].addEventListener('click',()=>{
        bloque.forEach((cadaBloque, i)=>{
            bloque[i].classList.remove('activo');
        })
        bloque[i].classList.add('activo');
    });
    
});

const openModal = document.querySelector('#btn__comisionista');
const modal = document.querySelector('.comisionista__modal');
const cerrarModal = document.querySelector('#btn__cerrar');


if(openModal != null){
    openModal.addEventListener('click', (e)=>{
        e.preventDefault();
        modal.classList.add('modal__show');
    });
    cerrarModal.addEventListener('click', (e)=>{
        e.preventDefault();
        modal.classList.remove('modal__show');
    }); 
    
}

function agregar_comisionista(id){
    var comisionista_id = document.getElementById("com_id"+id).innerHTML;
    var comisionista_identificacion = document.getElementById("com_ident"+id).innerHTML;
    var comisionista_nombres = document.getElementById("com_nombres"+id).innerHTML;
    var comisionista_apellidos = document.getElementById("com_apellidos"+id).innerHTML;
    var comisionista_punto = document.getElementById("com_punto"+id).innerHTML;
    var comisionista_direccion = document.getElementById("com_direccion"+id).innerHTML;
    $("#idcom").val(comisionista_id);
    $("#identcom").val(comisionista_identificacion);
    $("#nombresCom").val(comisionista_nombres);
    $("#apellidosCom").val(comisionista_apellidos);
    $("#nombrePunto").val(comisionista_punto);
    $("#direccionPunto").val(comisionista_direccion);
    modal.classList.remove('modal__show');

    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: '¡Comisionista Agregado!',
        showConfirmButton: false,
        timerProgressBar: true,
	    toast: true,
        timer: 2000
    })
     
}

const openModalconductor = document.querySelector('#btn__conductor');
const modalconductor = document.querySelector('.asignarconductor__modal');
const cerrarModalconductor = document.querySelector('#btn__cerrarConductor');

if(openModalconductor != null){
    openModalconductor.addEventListener('click', (e)=>{
        e.preventDefault();
        modalconductor.classList.add('modal__show');
    });
    cerrarModalconductor.addEventListener('click', (e)=>{
        e.preventDefault();
        modalconductor.classList.remove('modal__show');
    });  
}

function agregar_conductor(id){
    conductor_id = document.getElementById("cond_id"+id).innerHTML;
    conductor_ident = document.getElementById("cond_ident"+id).innerHTML;
    conductor_nombres = document.getElementById("cond_nombres"+id).innerHTML;
    conductor_apellidos = document.getElementById("cond_apellidos"+id).innerHTML;
    conductor_codveh = document.getElementById("cond_codigoveh"+id).innerHTML;
    conductor_placaveh = document.getElementById("cond_placaveh"+id).innerHTML;
    conductor_turno = document.getElementById("cond_turno"+id).innerHTML;

    $("#idCond").val(conductor_id);
    $("#identCond").val(conductor_ident);
    $("#nombresCond").val(conductor_nombres);
    $("#apellidosCond").val(conductor_apellidos);
    $("#codVeh").val(conductor_codveh);
    $("#placaVeh").val(conductor_placaveh);
    $("#turnoCond").val(conductor_turno);
    modalconductor.classList.remove('modal__show');

    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: '¡Conductor Agregado!',
        showConfirmButton: false,
        timerProgressBar: true,
	    toast: true,
        timer: 2000
    }) 
}

const openModalrecaudoconductor = document.querySelector('.btn__recaudoconductor');
const modalrecaudoconductor = document.querySelector('.recaudoconductor__modal');
const cerrarrecaudoModalconductor = document.querySelector('.recaudoconductor__cerrar');

if(openModalrecaudoconductor != null){
    openModalrecaudoconductor.addEventListener('click', (e)=>{
        e.preventDefault();
        modalrecaudoconductor.classList.add('modal__show');
    });
    cerrarrecaudoModalconductor.addEventListener('click', (e)=>{
        e.preventDefault();
        modalrecaudoconductor.classList.remove('modal__show');
    });  
}


/* 
    Función mostrar formulario según opción
*/
function mostrar(id) {
    if ((id != "conductor") & (id != "comisionista")) {
        $("#comisionista").hide();
        $("#conductor").hide();
    }
    if (id == "conductor") {
        $("#comisionista").hide();
        $("#conductor").show();
    }
    if (id == "comisionista") {
        $("#comisionista").show();
        $("#conductor").hide();
    }
}

function mostrarestado(id) {
    if ((id != "anulada") & (id != "exitosa")) {
        $("#estadoanulada").hide();
        $("#estadoexitosa").hide();
    }
    if (id == "anulada") {
        $("#estadoexitosa").hide();
        $("#estadoanulada").show();
    }
    if (id == "exitosa") {
        $("#estadoexitosa").show();
        $("#estadoanulada").hide();
    }
}
