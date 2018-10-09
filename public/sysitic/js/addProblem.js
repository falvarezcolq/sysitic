$(document).ready(function() {
    loadingProblemTypes();
    listTypes();
    listTypes2();
    loadingStandarProblems();   
});

function loadingProblemTypes() {
    var problemTypes = $('#problemType');
    var route = baseURL + '/types/list';

    $.get(route, function(res) {
        $(res).each(function(key, value) {
            problemTypes.append('<option value="' +
                value.id + '">' +
                value.name + '</option>');
        });
    });
}

function listTypes() {
    var listTypes = $('#listTypes');
    var route = baseURL + '/types/list';

    $.get(route, function(res) {
        $(res).each(function(key, value) {
            listTypes.append('<option value="' +
                value.id + '">' +
                value.name + '</option>');
        });
    });
}

function listTypes2() {
    var listTypes = $('#listTypes2');
    var route = baseURL + '/types/list';

    $.get(route, function(res) {
        $(res).each(function(key, value) {
            listTypes.append('<option value="' +
                value.id + '">' +
                value.name + '</option>');
        });
    });
}

$('#button_Registrar').click(function() {
    var descripcion = $('#descriptionProblem').val();
    var type1 = $('#problemType').val(); 
    var route = baseURL + '/standarproblem';
    var token = $('#token').val();
    if(type1 != 0){
        $.ajax({
            url: route,
            headers: { 'X-CSRF-TOKEN': token },
            type: 'POST',
            dataType: 'json',
            data: {
                descripcion: descripcion,
                problem_type_id: type1
            },
            success: function(res) {
                console.log(res)
                $('#msjClean').empty();
                $('#msjClean').html('<span id="resSuccess" class="text-success"> Añadido con exito</span>');
                showPanelSolutions(res.problem.descripcion,res.problem.id);
            },
            error: function(msj) {
                // console.log(msj);
                $('#msjClean').empty();
                $('#msjClean').html(' <span id="resSuccess" class="text-danger"> Error</span>');
            }
        });
         
    }else{
        $('#msjClean').html(' <span id="resSuccess" class="text-danger"> Elija un tipo de problema</span>');
    
    }
});

function showPanelSolutions(desc,id){
    $('#panelSolution').removeClass('hidden');
    $('#nameNewProblem').html(desc);
    $('#buttonAdd').val(id);
    $('#tableSolution').empty();
    $('#msjNewSolution').empty();
}

$('#button_reset').click(function(){
    $('#panelSolution').addClass('hidden');
});


function add_row_table(btn){

    var route = baseURL + '/solution';
    var token = $('#token').val();
    var descripcion = $('#textSolution').val();
    var type_id  =  $('#listTypes').val();

    if( descripcion ==""){
        $('#msjNewSolution').html('Ingrese la descripcion de la soluci&oacute;n');
    } else if( type_id == 0){
        $('#msjNewSolution').html('Elije el tipo de soluci&oacute;n');
    }else{
        $('#msjNewSolution').empty();
        $.ajax({
            url: route,
            headers: { 'X-CSRF-TOKEN': token },
            type: 'POST',
            dataType: 'json',
            data: {
                descripcion: descripcion,
                problem_type_id: type_id,
                standar_problem_id:btn.value,
            },
            success: function(res) {
                console.log(res)
                addSolutionOnTable(res);
                $('#textSolution').val('');
            },
            error: function(msj) {
                // console.log(msj);
                $('#msjNewSolution').empty();
                
                $('#msjNewSolution').html(' <span id="resSuccess" class="text-danger"> Error</span>');
            }
        });
    }
}

function addSolutionOnTable(res){
    var sol = res.solution;
    var type  = res.problemType;
    $('#tableSolution').append('<tr id="tr_'+sol.id+'"><td></td><td>'+sol.descripcion+'</td><td>'+type.name+'</td><td><button class="btn btn-xs btn-danger " value="'+sol.id+'" onclick="deleteSolution(this)" >Eliminar</button></td></tr>');
}

function deleteSolution(btn){

    var route = baseURL + '/solution/'+btn.value;
    var token = $('#token').val();
    $.ajax({
        url: route,
        headers: { 'X-CSRF-TOKEN': token },
        type: 'DELETE',
        dataType: 'json',
        success: function(res) {
            console.log(res)
          $('#msjNewSolution').html(res.mensaje);
          $('#tr_'+btn.value).addClass('hidden');
        },
        error: function(msj) {
            // console.log(msj);
            $('#msjNewSolution').empty();
            $('#msjNewSolution').html(' <span id="resSuccess" class="text-danger"> Error</span>');
        }
    });
}

function loadingStandarProblems() {
    var standarProblem = $('#standarProblems');
    var route = baseURL + '/standarproblemlist';
    $.get(route, function(res) {
        $(res).each(function(key, value) {
            standarProblem.append('<option value="' +
                value.id + '">' +
                value.descripcion+ '</option>');
        });
    });
}

$('#standarProblems').click(function(){
   
    loadingTableSolution($(this).val()); 
});



function loadingTableSolution(id){
    if(id !=0){
        $('#nameProblem').html( $('[id=standarProblems] option:selected').text()) ;    
        $('#buttonAdd').val(id);
        $('#tableSolution').empty();
        var tableSolution = $('#tableSolution');
        var route = baseURL + '/standarproblemsolutions/'+id;
        tableSolution.empty();
        var count = 0;
        $.get(route, function(res) {
            $(res).each(function(key, value) {
                count = count + 1;
                tableSolution.append('<tr id="tr_'+value.id+'"><td>'+count+'</td><td>'+value.descripcion+'</td><td>'+value.problem_type.name+'</td><td><button class="btn btn-xs btn-warning" value="'+value.id+'" onclick="updateSolution(this)"> Editar</button></td></tr>');
            });
            if(count==0){
                $('#msjNewSolution').html(' <span id="resSuccess" class="text-warning">  El problema no tiene ninguna soluci&oacute;n porfavor agregue uno..</span>');
            }else{
                $('#msjNewSolution').empty();
            }
        });
    }else{$('#msjNewSolution').html('<span id="resSuccess" class="text-warning"> Debe elegir un problema</span>')}
}

function updateSolution(btn){
    openModal();
    var route = baseURL + 'solution/'+btn.value+'/edit';
    $.get(route, function(res) {
        $('#descSolution').val(res.solution.descripcion);
        $('#listTypes2').val(res.solution.problem_type_id);
        $('#updateBtn').val(res.solution.id);
    });
}

$('#updateBtn').click(function(){
    var route = baseURL +'/solution/'+$('#updateBtn').val();
    var token = $('#token').val()
    $.ajax({
        url: route,
        headers: { 'X-CSRF-TOKEN': token },
        type: 'PUT',
        dataType: 'json',
        data:{ descripcion :  $('#descSolution').val(),
               type_id: $('#listTypes2').val()
                },
        success: function(res) {
                msjAlert(res.msj,res.text);
                loadingTableSolution($('#standarProblems').val());  
            
        },
        error: function(msj) {
            // console.log(msj);
            $('#msjNewSolution').empty();
            $('#msjNewSolution').html(' <span id="resSuccess" class="text-danger"> Error</span>');
        }
    });

});

$('#btn-delete-solution').click(function(){
    showConfirm(
        '¿Desea eliminar la soluci&oacute;n "'+ $('#descSolution').val()+'"?',
        'Esta acci&oacuten solo tendra efecto si la soluci&oacute;n no est&aacute;  en algun reporte.',
        function(){
             $.ajax({
                url:baseURL+'/solution/'+$('#updateBtn').val(),
                headers: { 'X-CSRF-TOKEN':$('#token').val() },
                type:'DELETE',
                dataType:'json',
                success:function(res){
                    msjAlert(res.msj,res.text);
                    loadingTableSolution($('#standarProblems').val()); 
                    hideConfirm(); 
                },
                error:function(){
                    msjAlert('danger','Error');
                    hideConfirm();
                }
             });
        });   
});
