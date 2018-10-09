// variable gloval
var equipmentId = null;
var codEquipment = null;


$('#codItic').keyup(function() {
    var codItic = $(this).val().trim();
  
    if (Number.isInteger(parseInt(codItic)) && (codItic.length>0)) {
        var route = baseURL + '/pc/cod_itic/' + codItic;
        $.get(route, function(res) {
            equipmentId = res.equipment_id;
            if (res.there) {
                $('#msjCodItic').empty();
                $('#msjCodItic').html('<span class="text-success">ok</span>');
            } else {
                $('#msjCodItic').html('<span class="text-danger"> Equipo no registrado</span>');
            }
        });
    }
});

$('#codpc').keyup(function() {
    var codpc = $(this).val().trim();
    $('#msjCodPc').empty();
    if (codpc.length > 2) {
        var route = baseURL + '/pc/cod_pc/' + codpc;
        $.get(route, function(res) {
            $('#msjCodPc').empty();
            equipmentId = res.equipment_id;
            if (res.there) {  
                $('#msjCodPc').empty();  
                $('#msjCodPc').html('<span class="text-success">ok</span>');
            } else {
                $('#msjCodPc').html('<span class="text-danger"> Equipo no registrado</span>');
            }
        });
    }

});


$('#codItic').keypress(function(e){
    return (e.charCode >47 && e.charCode<58) || (e.charCode <31);
});

function loadingStandarProblem(){
    var search  = $('#searchProblem').val();
    route = baseURL+'/problemlist/'+search;
    if(search==""){
        route = baseURL+'/problemlist/ALL'; 
    }
    var count = 0;
    var tableProblems = $('#tableProblems');
    tableProblems.empty();
    $.get(route,function(res){
        tableProblems.empty();
        $(res).each(function(key,value){
            count++;
            tableProblems.append('<tr>' +
            '<td> ' + count + '</td>' +
            '<td id="td'+value.id+'"> ' + value.descripcion +'</td>'+
            '<td> ' + value.problem_type.name+ '</td>' +
            '<td> ' + '<button value="'+value.id+'" onclick="elije(this);" class="btn btn-danger">Seleccionar</button>'+
            '</tr>');
        });
    });
}



function elije(btn){
  $('#problemSelected').html($('#td'+btn.value).html());
  $('#problemId').val(btn.value);
  // console.log($('#td'+btn.value).html());
  $('#cerrar-modal').prop('checked','checked');
}



function formEmpty(){
    $("#problemSelected").empty();
    $('#msjCodItic').empty();
    $('#msjCodPc').empty();
    $('#msjReportProblem').empty();
    $('#problemId').val("");
    codIticValidate = false;
    codPcValidate = false;
}


$('#btnReset').click(formEmpty);



$('#btnReportProblem').click(function(){
    var user = 1;
    var token = $('#token').val();
    var problemId = $('#problemId').val(); 
    var codItic = $('#codItic').val();
    var codPc = $('#codpc').val();
    var msj =$('#msjReportProblem');
    var validate = false;
    var data = null;
    var route = baseURL + '/equipmentproblem';

    if(codItic=="" && codPc==""){ 
        msj.html('<span class="text-danger"> Ingrese el codigo de itic o el codigo de PC.</span>');   
    }else if(equipmentId == null){
        msj.html('<span class="text-danger"> El equipo el codigo de equipo es erróneo. </span>');
    }else if(problemId==""){
        msj.html('<span class="text-danger"> Asigne un problema al equipo.</span>');
    }else{ validate = true}

   if(validate){
    data = {
        equipment_id:equipmentId,
        standar_problem_id:parseInt(problemId),
        user_id_report:user,
    } 
    $.ajax({
        url:route,
        type:'POST',
        dataType:'json',
        headers: { 'X-CSRF-TOKEN': token },
        data: data,
        success:function(res){
            msj.html('<span class="text-success">Exito! fue reportado a horas: <strong>'+res.timereport+'</strong></span>');
        },
        error:function(msj){
            msj.html('<span class="text-danger"> Error</span>');
        }
    }); 
   }
});


$('#inputProblem').click(function(){
    $('#mostrar-modal').prop('checked','checked');
});

$('#returnToMenu').click(function(){
    $('#cerrar-modal').prop('checked','checked');
});







