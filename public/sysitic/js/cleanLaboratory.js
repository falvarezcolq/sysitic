//alert(baseURL);

$(document).ready(function() {
    loadingLaboratories();
});

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




$('#selectLab').change(function() {
    var nameLab = $('#selectLab > option[value=' + $(this).val() + ']').html();
    $('#labSelected').html(nameLab);
    $('#labSelected2').html(nameLab);
    $('#labSelected3').html(nameLab);
    $('#msjClean').empty();
    $('#msjObs').empty();
});


$('#registro').click(function() {
    var idLab = $('#selectLab').val();
    var dato = $('input:radio[name="optionRadioLimpieza"]:checked').val();

    var route = baseURL + '/cleaning';
    var token = $('#token').val();
    if(idLab != "0"){
        $.ajax({
            url: route,
            headers: { 'X-CSRF-TOKEN': token },
            type: 'POST',
            dataType: 'json',
            data: {
                estado: dato,
                laboratory_id: idLab
            },
            success: function(res) {
                //console.log(res);
    
                $('#msjClean').empty();
                $('#msjClean').html('<span id="resSuccess" class="text-success"> Reportado con exito en fecha y hora '+res.time+'</span>');
            },
            error: function(msj) {
                // console.log(msj);
                $('#msjClean').empty();
                $('#msjClean').html(' <span id="resSuccess" class="text-danger"> Error</span>');
            }
        });
    }else{
        $('#msjClean').html(' <span id="resSuccess" class="text-danger"> Elije laboratorio</span>');
    }
});

$('#btn-observation').click(function() {
    var idLab = $('#selectLab').val();
    var dato = $('#obslab').val();
    // console.log(idLab + ':' + dato);
    if (idLab != "0" && dato != '') {
        //console.log(idLab + ':' + dato);

        var route = baseURL + '/observation';
        var token = $('#token2').val();
        $.ajax({
            url: route,
            headers: { 'X-CSRF-TOKEN': token },
            type: 'POST',
            dataType: 'json',
            data: {
                descripcion: dato,
                laboratory_id: idLab
            },
            success: function(res) {
               // console.log(res);
                $('#msjObs').empty();
                $('#msjObs').append('<span id="resSucObs" class="text-success"> Reportado con exito en fecha y hora '+res.time+'</span>');
            },
            error: function(msj) {
               // console.log(msj);
                $('#msjObs').empty();
                $('#msjObs').append('<span id="resErrorObs" class="text-danger"> Error</span>');
            }
        });
    } else {
        $('#msjObs').empty();
        $('#msjObs').append('<span id="resSucObs" class="text-danger"> El laboratorio y observación son obligatorios</span>');
    }
});






