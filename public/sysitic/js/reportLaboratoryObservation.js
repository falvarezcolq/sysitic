$(document).ready(function(){
    loadingLaboratories3();
    loadingLaboratoriesWithObservation();  
});



function loadingLaboratories3() {
    var selectLab = $('#selectLab3');
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

$('#selectLab3').click(loadingLaboratoriesWithObservation);

function loadingLaboratoriesWithObservationSuccess(res) {
    
    var tableObservation = $('#tableObservation');
    tableObservation.empty();
    var count = 0;

    $(res).each(function(key, value) {
        count = count + 1;
        tableObservation.append('<tr>' +
            '<td> ' + value.created_at + '</td>' +
            '<td> ' + value.laboratory.codigo +'</td>'+
            '<td> ' + value.laboratory.nombre_lab + '</td>' +
            '<td> ' + value.descripcion + 
            '</tr>');
    });

    if (count == 0) { $('#msjLabObservation').html('<span id="resSuccess" class="text-success"> El laboratorio no ha tenido observaciones</span>'); }
}

////////////inicio de funciones ximena para los reportes de las observaciones

function loadingLaboratoriesWithObservation() {

    $('#msjLabObservation').empty();
    let idLab3 = $('#selectLab3').val();
    var route = baseURL + '/observation/' + idLab3;
    

    $.ajax({
        url: route,  
        type: 'GET',
        success: function(res) {
            //console.log(res);
            loadingLaboratoriesWithObservationSuccess(res);
        },
        error: function(msj) {
            //console.log(msj);
        }
    });
}