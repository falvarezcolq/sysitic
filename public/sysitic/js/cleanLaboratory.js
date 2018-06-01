$(document).ready(function() {
    loadingLaboratories();
    loadingLaboratories2();
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

$('#selectLab').change(function() {
    let nameLab = $('#selectLab > option[value=' + $(this).val() + ']').html();
    $('#labSelected').html(nameLab);
    $('#labSelected2').html(nameLab);
    $('#labSelected3').html(nameLab);
});


$('#registro').click(function() {
    var idLab = $('#selectLab').val();
    var dato = $('input:radio[name="optionRadioLimpieza"]:checked').val();

    var route = baseURL + '/cleaning';
    var token = $('#token').val();


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
            console.log(res);
            $('#resSuccess').fadeIn();
        },
        error: function(msj) {
            console.log(msj);
            $('#resError').fadeIn();
        }
    });
});

$('#btn-observation').click(function() {
    var idLab = $('#selectLab').val();
    var dato = $('#obslab').val();
    // console.log(idLab + ':' + dato);
    if (idLab != "0" && dato != '') {
        console.log(idLab + ':' + dato);

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

                console.log(res);
                $('#msjObs').empty();
                $('#msjObs').append('<span id="resSucObs" class="text-success"> Reportado con exito a horas</span>');
            },
            error: function(msj) {
                console.log(msj);
                $('#msjObs').empty();
                $('#msjObs').append('<span id="resSucObs" class="text-danger"> Error</span>');
            }
        });
    } else {
        $('#msjObs').empty();
        $('#msjObs').append('<span id="resSucObs" class="text-danger"> El laboratorio y observación son obligatorios</span>');
    }
});

$('#selectLab2').change(function() {
    let idLab2 = $('#selectLab2 > option[value=' + $(this).val() + ']').val();
    var route = baseURL + '/cleaning/' + idLab2;
    var token = $('#token3').val();

    $.ajax({
        url: route,
        headers: { 'X-CSRF-TOKEN': token },
        type: 'GET',
        dataType: 'json',

        success: function(res) {
            console.log(res);
            loadingLaboratoriesWithClean(res);
        },
        error: function(msj) {
            console.log(msj);
        }
    });
});

function loadingLaboratoriesWithClean(res) {
    var tbody = $('#tableCleaning');

    $(res).each(function(key, value) {
        tbody.append('<tr>' +
            '<th> ' + value.create_at + '</th>' +
            '<th> ' + 'algo' + '</th>' +
            '<th> ' + 'algo' + '</th>' +

            // '<th> ' + value.laboratory.nombre_lab + '</th>' +
            // '<th> ' + ((value.estado == 1) ? 'limpio' : 'sucio') + '</th>' +
            '</tr>');
    });
}