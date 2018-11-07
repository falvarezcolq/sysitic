var validateCodItic = true;
var validateCodPc = true;


$(document).ready(function(){
    loadingLaboratories();
    loadingLaboratoriesUpdate();
    loadingTable(0);    
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


$('#laboratories').click(function(){
    loadingTable(0);
});

function loadingTable(order){
    var route  = baseURL + "/equipmentlist/" + $('#laboratories').val();
    var select = $('#equipments');
    select.empty();
    var count = 0;
    
    // $.get(route, function(res) {
    //     $(res).each(function(key, value) {
    //         select.append('<tr><td>'+value.laboratory.nombre_lab+'</td><td>'+value.cod_itic+'</td><td>'+value.cod_pc+'</td><td>'+value.created_at.substring(0,10)+'</td><td><button value="'+value.id+'" class="btn btn-primary btn-xs" onclick="updateEquipment(this)" >Editar</button></td></tr> ');
    //         count++;
    //     });
    //     if(count == 0) {
    //         select.html('<tr><td colspan="5">El laboratorio no tiene ningun equipo registrado</td></tr>');
    //     }
    // }); 
    
    $.ajax({
        url:route,
        type:'GET',
        dataType:'json',
        data:{val:order},
        success:function(res){
            $(res).each(function(key, value) {
                select.append('<tr><td>'+value.laboratory.nombre_lab+'</td><td>'+value.cod_itic+'</td><td>'+value.cod_pc+'</td><td>'+value.created_at.substring(0,10)+'</td><td><button value="'+value.id+'" class="btn btn-primary btn-xs" onclick="updateEquipment(this)" >Editar</button></td></tr> ');
                count++;
            });
            if(count == 0) {
                select.html('<tr><td colspan="5">El laboratorio no tiene ningun equipo registrado</td></tr>');
            }
        },
        error:function(msj){
            select.html('<tr><td colspan="5">Error en la carga de la tabla</td></tr>');
        }
    });
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


$('#codPc').keyup(function() {
    var codpc = $(this).val().trim();
    $(this).val($(this).val().toUpperCase());
    $('#msjCodPc').empty();
    if (codpc.length >= 1) {
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

 

function updateEquipment(btn){
    var route = baseURL +"/equipment/"+btn.value+"/edit";
    $.get(route,function(res){
        $('#codItic').val(res.equipment.cod_itic);
        $("#codPc").val(res.equipment.cod_pc);
        $('#laboratoriesUpdate').val(res.equipment.laboratory_id);
        $('#btnEquipmentUpdate').val(res.equipment.id);
        $('#btnReLoad').val(res.equipment.id);
        $('#btnDelete').val(res.equipment.id);
    });
    openModal();
    validateCodItic = true;
    validateCodPc = true;
    $('#msjCodPc').empty();
    $('#msjCodItic').empty();
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


function deleteEquipment(btn){
    showConfirm('¿Desea eliminar el Equipo?'
    ,'Esta acci&oacute;n eliminará también los <strong>reportes de problemas</strong> que el equipo tiene.',
    function(){
        var route = baseURL+ '/equipment/'+btn.value;
        var token = $('#token').val();
       
        $.ajax({
            url:route,
            headers:{'X-CSRF-TOKEN': token},
            type:'DELETE',
            dataType:'json',
            success:function(res){
                if(res.msj == 'deleted'){
                    msjAlert('ok',"Equipo eliminado!");
                    loadingTable();
                }
               
                hideConfirm()
            },
            error:function(msj){
               
                msjAlert('error', ' Laboratorio no eliminado')
                hideConfirm()
            }
        });
    });
}


