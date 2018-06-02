$(document).ready(function() {
    loadingProblemTypes();
    listTypes();
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

$('#button_Registrar').click(function() {
    var descripcion = $('#descriptionProblem').val();
    var type = $('#problemType').val();
    //console.log(descripcion+' ' + type );
    var route = baseURL + '/problem';
    var token = $('#token').val();
    if(type != 0){
        console.log(descripcion+' ' + type );
        $.ajax({
            url: route,
            headers: { 'X-CSRF-TOKEN': token },
            type: 'POST',
            dataType: 'json',
            data: {
                descripcion: descripcion,
                problem_type_id: type
            },
            success: function(res) {
                $('#msjClean').empty();
                $('#msjClean').html('<span id="resSuccess" class="text-success"> Añadido con exito</span>');
    
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
