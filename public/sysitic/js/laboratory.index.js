$(document).ready(function(){
	loadingLaboratories();
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
					+'<td></td>'
				+'</tr>');
		});
	});
}