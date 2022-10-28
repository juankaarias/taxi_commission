const openModal = document.querySelector('.btn__asignarcomisionista');
const modal = document.querySelector('.asignarcomisionista__modal');
const cerrarModal = document.querySelector('.asignarcomisionista__cerrar');

openModal.addEventListener('click', (e)=>{
    e.preventDefault();
    modal.classList.add('modal__show');
});
cerrarModal.addEventListener('click', (e)=>{
    e.preventDefault();
    modal.classList.remove('modal__show');
}); 


const openModalconductor = document.querySelector('.btn__asignarconductor');
const modalconductor = document.querySelector('.asignarconductor__modal');
const cerrarModalconductor = document.querySelector('.asignarconductor__cerrar');

openModalconductor.addEventListener('click', (e)=>{
    e.preventDefault();
    modalconductor.classList.add('modal__show');
});
cerrarModalconductor.addEventListener('click', (e)=>{
    e.preventDefault();
    modalconductor.classList.remove('modal__show');
});  


const openModalrecaudoconductor = document.querySelector('.btn__recaudoconductor');
const modalrecaudoconductor = document.querySelector('.recaudoconductor__modal');
const cerrarrecaudoModalconductor = document.querySelector('.recaudoconductor__cerrar');

openModalrecaudoconductor.addEventListener('click', (e)=>{
    e.preventDefault();
    modalrecaudoconductor.classList.add('modal__show');
});
cerrarrecaudoModalconductor.addEventListener('click', (e)=>{
    e.preventDefault();
    modalrecaudoconductor.classList.remove('modal__show');
});  


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

const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

