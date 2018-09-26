$(document).ready(function(){
    loadingLaboratories3();
    loadingTable();  
});

var last_page = 1;
var observationURL = '/observationall/';


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

$('#selectLab3').click(function(){
    loadingTableObsevation(baseURL+observationURL+$(this).val(),1,'1')
});

function loadingTableObsevation(route,page,datasend){
    last_page = page;
    $.ajax({
        url:route,
        data:{page:page,
              data:datasend},
        type:'GET',
        dataType:'json',
        success:function(data){
            //console.log(data);
            $('#observationTable').html(data);
        },
        error:function(msj){
            console.log('error al cargar');
        }
    }); 
}


$(document).on('click','.pagination a',function(e){
    e.preventDefault();
    var page = $(this).attr('href').split('page=')[1];
    loadingTableObsevation(baseURL+observationURL+$('#selectLab3').val(),page,'1'); 
});

function loadingTable(){
    loadingTableObsevation(baseURL+observationURL+'0',last_page,'11'); 
}


function edit_observation(btn){
    openModal();
    var route = baseURL+'/observation/'+btn.value+'/edit';
    $.get(route,function(res){
        console.log(res);
        $('#description').val(res.observation.descripcion);
        $('#updateObs').val(res.observation.id);
    });
}

function updateObservation(btn){
    var route = baseURL+'/observation/'+btn.value;
    var desc = $('#description').val();
   
    if(desc.lenght!=0){
        var token = $('#_token').val(); 
        $.ajax({
            url: route,
            headers: { 'X-CSRF-TOKEN': token },
            type: 'PUT',
            dataType: 'json',
            data: {
                descripcion: desc,
            },
            success: function(res) {
               // console.log(res);
                $('#msj').empty();
                $('#msj').append('<div class="alert alert-success alert-dismissible" role="alert">'
                                +'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                                +'<strong>Exito!</strong> Actualizado correctamente a horas: '+res.time 
                                +'</div>');
                loadingTableObsevation(baseURL+observationURL+$('#selectLab3').val(),last_page,'1');
            },
            error: function(msj) {
               // console.log(msj);
                $('#msj').empty();
                $('#msj').append('<div class="alert alert-danger alert-dismissible" role="alert">'
                                    +'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                                    +'<strong>Error!</strong> '
                                +'</div>');
            }
        });
    }
}