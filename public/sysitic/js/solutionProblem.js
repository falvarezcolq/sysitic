var datasend = {
    codItic : "",
    codPc   : "",
    laboratory : 0, // retorna id del laboratorio
    standarProblem : 0 // retorna id  del problema
}

var validateCodItic = false;
var validateCodPc = false;


var equipmentproblemlistURL = '/equipmentproblemlist'

function loadingTableProblem(route,page,datasend){
    $.ajax({
        url:route,
        data:{page:page,
              data:datasend},
        type:'GET',
        dataType:'json',
        success:function(data){
            //console.log(data);
            $('#tableProblems').html(data);
        },
        error:function(msj){
            console.log('error al cargar');
        }
    });  
    
}


$(document).on('click','.pagination a',function(e){
    e.preventDefault();
    var page = $(this).attr('href').split('page=')[1];
    var route = baseURL + equipmentproblemlistURL;
    loadingTableProblem(route,page,datasend); 
});

function loadingTable(){
    var route = baseURL + equipmentproblemlistURL;
    loadingTableProblem(route,1,datasend);
}

$(document).ready(function(){
    loadingLaboratories();
    loadingStandarProblem();
    loadingTable();
});

function solucionar(btn){
    var route = baseURL + '/equipmentproblem/'+btn.value;
    $.ajax({
        url:route,
        type:'GET',
        dataType:'json',
        success:function(data){
            //console.log(data);
            $('#loadingFrame').html(data);
            openModal();
        },
        error:function(msj){
            console.log('error al cargar');
        }
    });  
}

function solucionado(btn){
    var route = baseURL + '/equipmentproblem/'+btn.value+'/edit';
    $.ajax({
        url:route,
        type:'GET',
        dataType:'json',
        success:function(data){
            //console.log(data);
            $('#loadingFrame').html(data);
            openModal();
        },
        error:function(msj){
            console.log('error al cargar');
        }
    });
}

function ver(btn){
    alert("ver: "+btn.value);
}


function loadingLaboratories() {
    var selectLab = $('#selectLab');
    var route = baseURL + '/laboratories/list';
    $.get(route, function(res) {
        $(res).each(function(key, value) {
            selectLab.append('<option value="' +
                value.id + '">' +
                value.codigo + ' ' +
                value.nombre_lab + '</option>');
        });
    });
}


function loadingStandarProblem(){
    var selectProblems = $('#selectProblems');
    var route = baseURL + '/standarproblemlist';
    $.get(route, function(res) {
        $(res).each(function(key, value) {
            selectProblems.append('<option value="' +
                value.id + '">' +
                value.descripcion + '</option>');
        });
    });
}

$('#codItic').keyup(function() {
    var codItic = $(this).val().trim();
  
    if (Number.isInteger(parseInt(codItic)) && (codItic.length>2)) {
        var route = baseURL + '/pc/cod_itic/' + codItic;
        $.get(route, function(res) {
            equipmentId = res.equipment_id;
            if (res.there) {
                $('#msjCodItic').empty();
                $('#msjCodItic').html('<span class="text-success">ok</span>');
                validateCodItic = true;
            } else {
                validateCodItic = false;
                $('#msjCodItic').html('<span class="text-danger"> Equipo no registrado</span>');
            }
        });
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
                $('#msjCodPc').html('<span class="text-success">ok</span>');
                validateCodPc = true;
            } else {
                $('#msjCodPc').html('<span class="text-danger"> Equipo no registrado</span>');
                validateCodPc = false;
            }
        });
    }
});


$('#searchBtn').click(function(){
    var route = baseURL + equipmentproblemlistURL;
    datasend = {
        codItic : (validateCodItic)? $('#codItic').val() : "" ,
        codPc   : (validateCodPc)? $('#codPc').val() : "" ,
        laboratory : parseInt($('#selectLab').val()), // retorna id del laboratorio
        standarProblem : parseInt($('#selectProblems').val()) // retorna id  del problema
    } 
    console.log(datasend);
    loadingTableProblem(route,1,datasend);
});

$('#resetBtn').click(function(){
   $('#msjCodItic').empty();
   $('#msjCodPc').empty();
});