var validateCodItic = true;
var validateCodPc = true;




$(document).ready(function(){
    loadingLaboratories();
});


$('#btnEquipment').click(function(){
    
    if(validateCodItic && validateCodPc){
        var route = baseURL + '/equipment';
        var token = $('#token').val();
        if($('#laboratories').val() != "0"){

        
        var send  = {
                        cod_itic:$('#codItic').val(),
                        cod_pc:$("#codPc").val(),
                        laboratory_id:$('#laboratories').val()
                    };  
            $.ajax({
                url:route,
                headers:{'X-CSRF-TOKEN': token},
                type:'POST',
                dataType:'json',
                data:send,
                before:function(){
                    var msj = $('#msj');
                    msj.html('');
                },
                success:function(res){
                    msjAlert('ok',"Equipo registrado correctamente a horas : "+res.time+" ");
                    
                },
                error:function(msj){
                    msjAlert('error', '')
                }
            });
        }else{
            msjAlert('warning','Elije laboratorio')
        }

    }else{
        msjAlert('error','Codigo itic o codigo PC incorrecto'); 
    }
    
    var route = baseURL + '/equipment'

});


function loadingLaboratories(){
    var route = baseURL +"/laboratories/list";
    var select = $('#laboratories');
    $.get(route, function(res) {
        $(res).each(function(key, value) {
            select.append('<option value="' +
                value.id + '">' +
                value.codigo+" "+value.nombre_lab+ '</option>');
        });
    });
}



function msjAlert(type,texto){
    // type: ok , error, warning, info
    var msj = $('#msj');
    msj.html('');
    if(type =="ok"){
        msj.append('<div class="alert alert-success alert-dismissible" role="alert">'
        +'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
        +'<strong>Exito!</strong>'+texto+'.'
    +'</div>');
    } else if(type=="error"){
        msj.append(
            '<div class="alert alert-danger alert-dismissible" role="alert">'
                    +'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                    +'<strong>Error:!</strong>'+texto+'.'
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


$('#codItic').keyup(function() {
    var codItic = $(this).val().trim();
    if(codItic.length<0){
        $('#msjCodItic').html('<span class="text-primary"> mas de 1 digitos..</span>');
    }else{
        if (Number.isInteger(parseInt(codItic)) && (codItic.length>0)) {
            var route = baseURL + '/pc/cod_itic/' + codItic;
            $.get(route, function(res) {
                equipmentId = res.equipment_id;
                if (res.there) {
                    $('#msjCodItic').empty();
                    $('#msjCodItic').html('<span class="text-danger">Ya existe el equipo</span>');
                    validateCodItic = false;
                } else {
                    validateCodItic = true;
                    $('#msjCodItic').html('<span class="text-success"> Equipo no registrado</span>');
                }
            });
        }
    }
});

$('#codItic').keypress(function(e){
    return  e.charCode>=48 && e.charCode<58 || e.charCode<31 ;
});

$('#codPc').keyup(function(e) {
    $(this).val($(this).val().toUpperCase());
    var codpc = $(this).val().trim();

    $('#msjCodPc').empty();
    if (codpc.length >= 3) {
        var route = baseURL + '/pc/cod_pc/' + codpc;
        $.get(route, function(res) {
            $('#msjCodPc').empty();
            equipmentId = res.equipment_id;
            if (res.there) {  
                $('#msjCodPc').empty();  
                $('#msjCodPc').html('<span class="text-danger"> Ya existe el equipo</span>');
                validateCodPc = false;
            } else {
                $('#msjCodPc').html(' <span class="text-success"> Equipo no registrado </span>');
                validateCodPc = true;
            }
        });
    }
});

$('#btnCleanEquipment').click(function(){
    $('#msj').html('');
});

