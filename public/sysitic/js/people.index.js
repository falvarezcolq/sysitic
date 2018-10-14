var peopleURL = '/peopleall/';
var last_page = 1;
var last_search = '';

$(document).ready(function(){
    loadingTable();
});


function loadingTable(){
    loadingTablePeople(baseURL+peopleURL,last_page,last_search);
}


function loadingTablePeople(route,page,search_text){
    last_page = page;
    last_search = search_text;
    $.ajax({
        url: route,
        type:'GET',
        dataType:'json',
        data: {page:page,search:search_text},
        success:function(res){
            $('#peopleTable').html(res);
        },
        error:function(res){
            $('#peopleTable').html('No se puede cargar la tabla');
        }
    });
}


$(document).on('click','.pagination a',function(e){
    e.preventDefault();
    var page = $(this).attr('href').split('page=')[1];
    loadingTablePeople(baseURL+peopleURL,page,last_search);
});

$('#searchName').keyup(function(){
    loadingTablePeople(baseURL+peopleURL,1,$(this).val());
});


function editPeople(btn){
    $('#updateForm').css('display','block');
    $('#show').css('display','none');
    var route = baseURL + '/admin/users/'+btn.value+'/edit';
    $.get(route,function(res){
  
        $('input[name="nombre"]').val(res.p.nombre);
        $('input[name="paterno"]').val(res.p.paterno);
        $('input[name="materno"]').val(res.p.materno);
        $('input[name="ci"]').val(res.p.ci);
       
        $('input:radio[value="'+res.p.genero+'"]').prop('checked',true);
        $('input[name="email"]').val(res.p.email);
        $('input[name="telfijo"]').val(res.p.telfijo);
        $('input[name="telcelular"]').val(res.p.telcelular);
        $('input[name="direccion"]').val(res.p.direccion);
        $('input[name="profesion"]').val(res.p.profesion);
        openModal();
        var y = res.p.fecha_nac.substring(0,4);
        var m = res.p.fecha_nac.substring(5,7);
        var d = res.p.fecha_nac.substring(8,10);

        $('input[name="fecha_nac"]').val(d+'/'+m+'/'+y);
        $('#update-people').val(res.p.id);
        
    });
}  


$(document).ready(function() {
    jQuery.extend(jQuery.validator.messages, {
        required: "Este campo es obligatorio.",
        remote: "Por favor, rellena este campo.",
        email: "Por favor, escribe una dirección de correo válida",
        url: "Por favor, escribe una URL válida.",
        date: "Por favor, escribe una fecha válida.",
        dateISO: "Por favor, escribe una fecha (ISO) válida.",
        number: "Por favor, escribe un número entero válido.",
        digits: "Por favor, escribe sólo dígitos.",
        creditcard: "Por favor, escribe un número de tarjeta válido.",
        equalTo: "Por favor, escribe el mismo valor de nuevo.",
        accept: "Por favor, escribe un valor con una extensión aceptada.",
        maxlength: jQuery.validator.format("Por favor, no escribas más de {0} caracteres."),
        minlength: jQuery.validator.format("Por favor, no escribas menos de {0} caracteres."),
        rangelength: jQuery.validator.format("Por favor, escribe un valor entre {0} y {1} caracteres."),
        range: jQuery.validator.format("Por favor, escribe un valor entre {0} y {1}."),
        max: jQuery.validator.format("Por favor, escribe un valor menor o igual a {0}."),
        min: jQuery.validator.format("Por favor, escribe un valor mayor o igual a {0}.")
    });
});


$.validator.methods.date =function( value, element ) {
    return this.optional(element) || /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/.test(value);
 }


$('form[name="reg"]').validate({
   rules:{
       fecha_nac:{ 
                   required:true,
                   date:true,
                }
    },
    highlight: function(element, errorClass) {
        $(element).parent().addClass('has-error');
    },
    unhighlight: function(element, errorClass) {
        $(element).parent().removeClass('has-error');
        $(element).parent().addClass('has-success');
    },
    submitHandler: function(form) {
        $.ajax({
            url: baseURL +'/admin/users/'+$('#update-people').val(),
            headers:{'X-CSRF-TOKEN':$('#_token').val()},
            type:'PUT',
            dataType:'json',
            data:{
                nombre:$('input[name="nombre"]').val(),
                paterno:$('input[name="paterno"]').val(),
                materno:$('input[name="materno"]').val(),
                ci:$('input[name="ci"]').val(),
                fecha_nac:$('input[name="fecha_nac"]').val(),
                genero:$('input[name="genero"]:checked').val(),
                email:$('input[name="email"]').val(),
                telfijo:$('input[name="telfijo"]').val(),
                telcelular:$('input[name="telcelular"]').val(),
                direccion:$('input[name="direccion"]').val(),
                profesion:$('input[name="profesion"]').val(),
            },
            success:function(res){
                msjAlert(res.msj,res.text);
                loadingTable()
            },
            error:function(){
                msjAlert('error','Error');
            }
        });
    }
});


function showPeople(btn){
    $('#updateForm').css('display','none');
    $('#show').css('display','block');
    $.get(baseURL+'/admin/users/'+btn.value,function(res){
        $('#show').html(res);
        openModal();
    });
}


function editCr(btn){
   
    // $.get(baseURL+'/us/'+btn.value+'/edit',function(res){
    //     $('#show').empty();
    //     $('#show').html(res);
    // });
}

function changeCr(btn){
    // $.get(baseURL+'/updateuscr/'+btn.value,function(res){
    //     console.log(res);
    //     $('#show').empty();
    //     $('#show').html(res);
    // });
}

function inactiveCr(btn){

}


function validate(form){
    $(form).validate({
        highlight: function(element, errorClass) {
            $(element).parent().addClass('has-error');
        },
        unhighlight: function(element, errorClass) {
            $(element).parent().removeClass('has-error');
            $(element).parent().addClass('has-success');
        },
        submitHandler: function(form) {
            
            // $.ajax({
            //     url: baseURL +'/us/'+$('input[name="userIdUpdate"]').val(),
            //     headers:{'X-CSRF-TOKEN':$('#_token').val()},
            //     type:'PUT',
            //     dataType:'json',
            //     data:{
            //         cargo:$('input[name="cargoUpdate"]').val(),
            //         type_user:$('input[name="type_user_update"]').val(),
            //     },
            //     success:function(res){
            //         msjAlert(res.msj,res.text);
            //     },
            //     error:function(){
            //         msjAlert('error','Error');
            //     }
            // });
    
            console.log(form.find('input[name="userIdUpdate"]'));
        }
    });
}



$('#btn-view').mousedown(function(){
$('#pass').prop('type','text');
});

$('#btn-view').mouseup(function(){
$('#pass').prop('type','password');
});
