$('#codItic').keyup(function() {
    var codItic = $(this).val();
    if (Number.isInteger(parseInt(codItic))) {
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
    var codItic = $(this).val().trim();
    if (codItic.length >= 3) {
        var route = baseURL + '/pc/cod_pc/' + codItic;
        $.get(route, function(res) {
            console.log(res);
            if (res.there) {
                $('#msjCodItic').html('<span class="text-success">ok</span>');
            } else {
                $('#msjCodItic').html('<span class="text-danger"> Equipo no registrado</span>');
            }
        });
    }
});