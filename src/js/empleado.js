


function nuevaEspe() {
    $('#nuevaEspe').modal('show');


}

function recargarEspecialidad() {// actualiza el selec de cateoria cuando se registra una nueva

    $.ajax({
        url: 'listaEspecialidad.php',
        type: 'POST',
        data: ''
    }).done(function (resp) {
        alert("pa0");
        $('.mdb-select').materialSelect();
        alert("pa");
        // $('select').destroyMaterialSelect();
        $('select.especialidadEmple').html(resp).fadeIn();
        $('select').material_select();
        alert("pas2");
    });
    // 
}

function modificarEmpleado(id) {
    window.location.href = '../empleado/modificarEmpleado.php?uhsk=' + id;
    //$.post("../empleado/modificarEmpleado.php",{id:id});
    //alert("pas");
}
document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
});

// Or with jQuery

$(document).ready(function () {
    $('.datepicker').datepicker();
});



/*para que no auto complete el formulario empleado */
$('#regisEmple').attr('autocomplete', 'off');
document.getElementById('regisEmple').setAttribute('autocomplete', 'off');

function alertA(texto) {
    Swal.fire({
         imageUrl: '../imagen/iconClinicaW.png',
        imageWidth: '55px',
        title: 'advertencia ',
        icon: 'warning',
        
        text: 'dc'+texto,
        width: '30%',
        confirmButtonText: 'confirmar',
       
       // imageHeight: '50px',        
        
        customClass: {    
            //title:'clini-title',
             image:'clini-logo',
             icon:'clini-icon',
             header: 'clini-header',
        },
    });
}
function alertP(texto) {
    Swal.fire({
         imageUrl: '../imagen/iconClinica.png',
        imageWidth: '55px',
        title: 'Esta seguro ',
        icon: 'question',
        
        text: ''+texto,
        width: '30%',
        confirmButtonText: 'confirmar',
       
       // imageHeight: '50px',        
        
        customClass: {    
            //title:'clini-title',
             image:'clini-logo',
             icon:'clini-icon',
             header: 'clini-header',
        },
    });
}
function alertC(texto) {
    //alert("paso");
    Swal.fire({
         imageUrl: '../imagen/iconClinicaS.png',
        imageWidth: '55px',
        title: 'Exito',
        icon: 'success',
        
        text: ''+texto,
        width: '30%',
        confirmButtonText: 'confirmar',
       
       // imageHeight: '50px',        
        
        customClass: {    
            //title:'clini-title',
             image:'clini-logo',
             icon:'clini-icon',
             header: 'clini-header',
        },
    });
}
function alertE(texto) {
    Swal.fire({
         imageUrl: '../imagen/iconClinicaEE.png',
        imageWidth: '55px',
        title: 'Ops! ',
        icon: 'error',
        
        text: ''+texto,
        width: '30%',
        confirmButtonText: 'confirmar',
       
       // imageHeight: '50px',        
        
        customClass: {    
            //title:'clini-title',
             image:'clini-logo',
             icon:'clini-icon',
             header: 'clini-header',
        },
    });
}
