$(document).ready(function(){
    loadingLaboratories2();
    loadingLaboratoriesWithClean()
});

function loadingLaboratories2() {
    var selectLab = $('#selectLab2');
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


function loadingLaboratoriesWithClean() {

    $('#msjLabClean').empty();
    let idLab2 = $('#selectLab2').val();
    var route = baseURL + '/cleaning/' + idLab2;
    var token = $('#token3').val();

    $.ajax({
        url: route,
        headers: { 'X-CSRF-TOKEN': token },
        type: 'GET',
        dataType: 'json',
        success: function(res) {
            console.log(res);
            loadingLaboratoriesWithCleanSuccess(res);
        },
        error: function(msj) {
            console.log(msj);
        }
    });
}

$('#selectLab2').click(loadingLaboratoriesWithClean);



function loadingLaboratoriesWithCleanSuccess(res) {
    
    var tableCleaning = $('#tableCleaning');
    tableCleaning.empty(); //vacía la tabla
    var count = 0;

    $(res).each(function(key, value) {
        count = count + 1;
        tableCleaning.append('<tr>' +
            '<td> ' + value.created_at + '</td>' +
            '<td> ' + value.laboratory.codigo +'</td>'+
            '<td> ' + value.laboratory.nombre_lab + '</td>' +
            '<td> ' + ((value.estado == 1) ? 'Limpio' : 'Sucio') + '</td>' +
            '</tr>');
    });

    if (count == 0) { $('#msjLabClean').html('<span id="resSuccess" class="text-success"> El laboratorio no tiene reportes de limpieza</span>'); }
}
