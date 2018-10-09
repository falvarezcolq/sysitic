var cleaningURL = '/cleaningall/';
var last_page = 1;

$(document).ready(function(){
    loadingLaboratories('#selectLab2');
    loadingLaboratories('#selectLabEdit'); 
    loadingTable();
});

function loadingLaboratories(id) {
    var selectLab = $(id);
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


function edit_cleaning(btn){
    openModal();
    var route= baseURL+'/cleaning/'+btn.value+'/edit';
    $.get(route,function(res){
        console.log(res);
        $('#selectLabEdit').val(res.cleaning.laboratory_id);
        $('input:radio[value="'+res.cleaning.estado+'"]').prop('checked',true);   
        $('#updateClean').val(res.cleaning.id);
    });
}

function updateCleaning(btn){
    $.ajax({
        url:baseURL+'/cleaning/'+btn.value,
        headers:{'X-CSRF-TOKEN':$('#_token').val()},
        type:'PUT',
        dataType:'json',
        data:{
            laboratory_id : $('#selectLabEdit').val(),
            estado:$('input:radio[name="optionRadioLimpieza"]:checked').val()
        },
        success:function(res){
            msjAlert(res.msj,res.text); 
            loadingTable();  
        },
        error:function(){
            msjAlert('error','Error');
        }
    });
}

$('#btn-delete-cleaning').click(function(){
      showConfirm(
          '¿Desea eliminar reporte de limpieza del laboratorio?',
          '',
          function(){
              $.ajax({
                  url:baseURL+'/cleaning/'+$('#updateClean').val(),
                  headers:{'X-CSRF-TOKEN':$('#_token').val()},
                  type:'DELETE',
                  dataType:'json',
                  success:function(res){
                      msjAlert(res.msj,res.text);
                      loadingTable();  
                      hideConfirm();
                  },
                  error:function(){
                     msjAlert('error','Error');
                     hideConfirm();
                  }
              });
          }
      );
});

