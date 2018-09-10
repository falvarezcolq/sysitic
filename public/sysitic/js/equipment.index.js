var validateCodItic = true;
var validateCodPc = true;


$(document).ready(function(){
    loadingLaboratories();
    loadingLaboratoriesUpdate();
    loadingTable();
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

function loadingLaboratoriesUpdate(){
    var route = baseURL +"/laboratories/list";
    var select = $('#laboratoriesUpdate');
    $.get(route, function(res) {
        $(res).each(function(key, value) {
            select.append('<option value="' +
                value.id + '">' +
                value.codigo+" "+value.nombre_lab+ '</option>');
        });
    });
}

$('#laboratories').click(loadingTable);

function loadingTable(){
    var route  = baseURL + "/equipmentlist/" + $('#laboratories').val();
    var select = $('#equipments');
    select.empty();
    $.get(route, function(res) {
        $(res).each(function(key, value) {
            select.append('<tr><td>'+value.laboratory.nombre_lab+'</td><td>'+value.cod_itic+'</td><td>'+value.cod_pc+'</td><td>'+value.created_at.substring(0,10)+'</td><td><button value="'+value.id+'" class="btn btn-primary btn-xs" onclick="updateEquipment(this)" >Editar</button></td></tr> ');
        });
    });
}



$('#codItic').keyup(function() {
    var codItic = $(this).val().trim();
    if(codItic.length<3){
        $('#msjCodItic').html('<span class="text-primary"> mas de 3 digitos..</span>');
    }else{
        if (Number.isInteger(parseInt(codItic)) && (codItic.length>2)) {
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

$('#codPc').keyup(function() {
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




function msjAlert(type,texto){
    // type: ok , error, warning, info
    var msj = $('#msj');
    
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


function updateEquipment(btn){
    var route = baseURL +"/equipment/"+btn.value+"/edit";

    $.get(route,function(res){
        $('#codItic').val(res.equipment.cod_itic);
        $("#codPc").val(res.equipment.cod_pc);
        $('#laboratoriesUpdate').val(res.equipment.laboratory_id);
        $('#btnEquipmentUpdate').val(res.equipment.id);
    });
    openModal();
}


$('#btnEquipmentUpdate').click(function(){
    
    if(validateCodItic && validateCodPc){
        var route = baseURL + '/equipment/'+ $(this).val();
        var token = $('#token').val();
        if($('#laboratoriesUpdate').val() != "0"){
       
        var send  = {
                        cod_itic:$('#codItic').val(),
                        cod_pc:$("#codPc").val(),
                        laboratory_id:$('#laboratoriesUpdate').val()
                    };  
            $.ajax({
                url:route,
                headers:{'X-CSRF-TOKEN': token},
                type:'PUT',
                dataType:'json',
                data:send,
                success:function(){
                    msjAlert('ok',"Equipo Actualizado correctamente");
                    loadingTable();
                },
                error:function(msj){
                    console.log(msj)
                    var texto = " ";
                    msjAlert('error', '')
                }
            });
        }else{
            msjAlert('warning','Elije laboratorio')
        }

    }else{
        msjAlert('error','Codigo itic o codigo PC incorrecto'); 
    }
    

});