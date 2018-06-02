$('#codItic').keyup(function() {
    var codItic = $(this).val().trim();
    $('#msjCodItic').empty();
    if (Number.isInteger(parseInt(codItic)) && (codItic.length>2)) {
        var route = baseURL + '/pc/cod_itic/' + codItic;
        $.get(route, function(res) {
            console.log(res);
            if (res.there) {
                $('#msjCodItic').html('<span class="text-success">ok</span>');
            } else {
                $('#msjCodItic').html('<span class="text-danger"> Equipo no registrado</span>');
            }
        });
    } else {
        console.log(codItic);
    }

});

$('#codpc').keyup(function() {
    var codpc = $(this).val().trim();
    $('#msjCodPc').empty();
    if (codpc.length >= 3) {
        var route = baseURL + '/pc/cod_pc/' + codpc;
        $.get(route, function(res) {
            console.log(res);
            if (res.there) {
                $('#msjCodPc').html('<span class="text-success">ok</span>');
            } else {
                $('#msjCodPc').html('<span class="text-danger"> Equipo no registrado</span>');
            }
        });
    }
});