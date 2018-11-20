$(document).ready(function(){
	loadingLaboratories();
	loadingResponsable();
});

function loadingLaboratories(){
	var laboratories = $('#laboratories');
	var route = baseURL+ '/laboratories/list';
	laboratories.empty();
	$.get(route, function(res){

		$(res).each(function(key,value){
            if(value.id!=1){
			    laboratories.append('<tr>'
					+'<td>'+value.codigo+'</td>'
					+'<td>'+value.nombre_lab+'</td>'
					+'<td>'+value.ubicacion+'</td>'
					+'<td>'+value.responsable.nombre+' '+value.responsable.paterno+' '+value.responsable.materno+'</td>'
					+'<td><button value="'+value.id+'" class="btn btn-warning btn-xs" onclick="editLaboratory(this)">Editar</button></td>'
                +'</tr>');
            }
		});
	});
}

function editLaboratory(btn){
	 var route = baseURL +'/laboratory/'+btn.value+'/edit';
	 $.get(route,function(res){
		$('#codigo').val(res.laboratory.codigo);
		$('#nombre_lab').val(res.laboratory.nombre_lab);
		$('#ubicacion').val(res.laboratory.ubicacion);
		$('#responsable').val(res.responsable.id);
        $('#btn-register').val(res.laboratory.id);
        $('#btn-delete-laboratory').val(res.laboratory.id);
		openModal();
	 });
}


function loadingResponsable(){
    var route  = baseURL+'/peoplelist';
    var responsable = $('#responsable');
    responsable.empty();
    $.get(route,function(res){
        $(res).each(function(key,value){
            responsable.append(
                '<option value="'+value.id+'">'
                +value.nombre+' '
                +value.paterno+' '
                +value.materno+' '    
                +'</option>'
            );
        });
    });
}

$('#btn-register').click(function(){
    var route = baseURL+ '/laboratory/'+$(this).val();
    var token = $('#token').val();
    var send  = {
                    codigo:$('#codigo').val(),
                    nombre_lab:$("#nombre_lab").val(),
                    ubicacion:$("#ubicacion").val(),
                    people_id:$("#responsable").val()
                };  
    $.ajax({
        url:route,
        headers:{'X-CSRF-TOKEN': token},
        type:'PUT',
        dataType:'json',
        data:send,
        success:function(){
			msjAlert('ok',"Datos del laboratorio editado");
			loadingLaboratories();
        },
        error:function(msj){
            console.log(msj)
            
            msjAlert('error', ' Campos vacios')
        }
    });
});

$('#btn-delete-laboratory').click(function(){
    showConfirm('¿Desea eliminar el Laboratorio?'
                ,'Esta acci&oacute;n eliminará también los reportes de <strong>Limpieza</strong> y <strong> Observaci&oacute;n</strong> del laboratorio.',
                function(){
                    var route = baseURL+ '/laboratory/'+$('#btn-register').val();
                    var token = $('#token').val();
                   
                    $.ajax({
                        url:route,
                        headers:{'X-CSRF-TOKEN': token},
                        type:'DELETE',
                        dataType:'json',
                        success:function(){
                            console.log('Los registros se eliminaron');
                            msjAlert('ok',"Laboratorio eliminado");
                            loadingLaboratories();
                            hideConfirm()
                        },
                        error:function(msj){
                            console.log(msj)
                            msjAlert('error', ' Laboratorio no eliminado')
                            hideConfirm()
                        }
                    });

                }
            );
});











