function loadingStandarProblemFull(){
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
            '<td> ' + '<button value="'+value.id+'" onclick="editStandarProblem(this);" class="btn btn-warning btn-xs">editar</button>'+
            '</tr>');
        });
    });
}


function editStandarProblem(btn){
    openModal();

    var route = baseURL+'/standarproblem/'+btn.value+'/edit';
    $.get(route,function(res){
        $('#description').val(res.problem.descripcion);
        $('#selectType').val(res.problem.problem_type_id);
        $('#btn-update-problem').val(res.problem.id);
    });
}



function loadingProblemTypes() {
    var problemTypes = $('#selectType');
    var route = baseURL + '/types/list';

    $.get(route, function(res) {
        $(res).each(function(key, value) {
            problemTypes.append('<option value="' +
                value.id + '">' +
                value.name + '</option>');
        });
    });
}

$('#btn-exit').click(function(){ closeModal()});

$('#btn-update-problem').click(function(){
    var description = $('#description').val();

    if(description.lengh != 0){
       
        var type1 = $('#selectType').val(); 
        var route = baseURL + '/standarproblem/'+$(this).val();
        var token = $('#_token').val();
        if(type1 != 0){
            $.ajax({
                url: route,
                headers: { 'X-CSRF-TOKEN': token },
                type: 'PUT',
                dataType: 'json',
                data: {
                    descripcion: description,
                    problem_type_id: type1
                },
                success: function(res) {
                    console.log(res)
                   if(res.msj == 'success'){
                       $('#msj').html('<div class="alert alert-success alert-dismissible" role="alert">'
                       +'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                       +'<strong>Exito!</strong> Actualizado correctamente</div>');
                       loadingStandarProblemFull(); 
                   }
                },
                error: function(msj) {
                   $('#msj').html('<div class="alert alert-danger alert-dismissible" role="alert">'
                   +'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                   +'<strong>Error!</strong></div>');
                }
            });
             
        }

    }
});