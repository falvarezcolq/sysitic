$('#codItic').keyup(function() {
    var codItic = $(this).val().trim();
  
    if (Number.isInteger(parseInt(codItic)) && (codItic.length>2)) {
        var route = baseURL + '/pc/cod_itic/' + codItic;
        $.get(route, function(res) {
            $('#msjCodItic').empty();
            if (res.there) {
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
    if (codpc.length >= 3) {
        var route = baseURL + '/pc/cod_pc/' + codpc;
        $.get(route, function(res) {
            $('#msjCodPc').empty();
            if (res.there) {
                $('#msjCodPc').html('<span class="text-success">ok</span>');
            } else {
                $('#msjCodPc').html('<span class="text-danger"> Equipo no registrado</span>');
            }
        });
    }
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

$('#searchProblem').keyup(loadingStandarProblem);

$('#btnReset').click(function(){
    $("#problemSelected").empty();
    $('#msjCodItic').empty();
    $('#msjCodPc').empty();
    $('#msjReportProblem').empty();
});










$(document).ready(function(){
    loadingStandarProblem();
});