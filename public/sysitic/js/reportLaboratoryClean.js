var cleaningURL = '/cleaningall/';
var last_page = 1;

$(document).ready(function(){
    loadingLaboratories2();
    loadingTable();
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


$('#selectLab2').click(function(){
    loadingTableClean(baseURL+cleaningURL+$(this).val(),1);
});


function loadingTable(){
    loadingTableClean(baseURL+cleaningURL+'0',last_page);
}

function loadingTableClean(route,page){
    last_page = page;
    $.ajax({
        url: route,
        type:'GET',
        dataType:'json',
        data: {page:page},
        success:function(res){
            $('#cleaningTable').html(res);
        },
        error:function(res){
            $('#msjLabClean').html('no se puede cargar la tabla');
        }
    });
}

$(document).on('click','.pagination a',function(e){
    e.preventDefault();
    var page = $(this).attr('href').split('page=')[1];
    loadingTableClean(baseURL+cleaningURL+$('#selectLab2').val(),page);
});




