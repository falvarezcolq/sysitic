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
			laboratories.append('<tr>'
					+'<td>'+value.codigo+'</td>'
					+'<td>'+value.nombre_lab+'</td>'
					+'<td>'+value.ubicacion+'</td>'
					+'<td>'+value.responsable.nombre+' '+value.responsable.paterno+' '+value.responsable.materno+'</td>'
					+'<td><button value="'+value.id+'" class="btn btn-warning" onclick="editLaboratory(this)">Editar</button></td>'
				+'</tr>');
		});
	});
}

function editLaboratory(btn){
	 var route = baseURL +'/laboratory/'+btn.value+'/edit';
	 $.get(route,function(res){
		$('#codigo').val(res.laboratory.codigo);
		$('#nombre_lab').val(res.laboratory.nombre_lab);
		$('#ubicacion').val(res.laboratory.ubicacion);
		openModal();
	 });
}



function loadingResponsable(){
    var route  = baseURL+'/peoplelist';
    var responsable = $('#responsable');
    responsable.empty();
    $.get(route,function(res){
        console.log(res);
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




