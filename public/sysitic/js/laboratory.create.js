

$('#btn-register').click(function(){
    var route = baseURL+ '/laboratory';
    var token = $('#token').val();
    var send  = {
                    codigo:$('#codigo').val(),
                    nombre_lab:$("#nombre_lab").val(),
                    ubicacion:$("#ubicacion").val(),
                    people_id:$("#responsable").val()
                };  
    $.ajax({
        url:route,
        headers:{'X-CSRF-TOKEN': token},
        type:'POST',
        dataType:'json',
        data:send,
        success:function(){
            msjAlert('ok',"");
        },
        error:function(msj){
            console.log(msj)
            var texto = " ";
            msjAlert('error', ' Campos vacios')
        }
    });
});

function msjAlert(type,texto){
    // type: ok , error, warning, info
    var msj = $('#msj');
    var alertSuccess ='<div class="alert alert-success alert-dismissible" role="alert">'
                    +'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                    +'<strong>Exito!</strong> Registrado Correctamente.'
                +'</div>';

    if(type =="ok"){
        msj.append(alertSuccess);
    } else if(type=="error"){
        msj.append(
            '<div class="alert alert-danger alert-dismissible" role="alert">'
                    +'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                    +'<strong>Error!</strong>'+texto+'.'
                +'</div>'
        );
    } else if(type=="warning"){
        msj.append(
            '<div class="alert alert-warning alert-dismissible" role="alert">'
                    +'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                    +'<strong>Alerta:!</strong>'+texto+'.'
                +'</div>'
        );
    } else if(type=="info"){
        msj.append(
            '<div class="alert alert-info alert-dismissible" role="alert">'
                    +'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                    +'<strong>Información!</strong>'+texto+'.'
                +'</div>'
        );
    }
}




function loadingResponsable(){
    var route  = baseURL+'/peoplelist';
    var responsable = $('#responsable');
    responsable.empty();
    $.get(route,function(res){
        console.log(res);
        $(res).each(function(key,value){
            responsable.append(
                '<option value="'+value.id+'">'
                +value.nombre+' '
                +value.paterno+' '
                +value.materno+' '    
                +'</option>'
            );
        });
    });
}

$(document).ready(function(){
    loadingResponsable();
});



$('#codigo').keyup(function(){
    $(this).val($(this).val().toUpperCase());
});
$('#nombre_lab').keyup(function(){
    $(this).val($(this).val().toUpperCase());
});

$('#btn-clean-laboratory').click(function(){
    $('#msj').empty();
});