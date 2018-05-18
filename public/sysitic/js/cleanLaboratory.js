






function loadingLaboratories(){
	var selectLab = $('#selectLab');
	var route = baseURL+ '/laboratories/list';

	$.get(route, function(res){
		$(res).each(function(key,value){
			selectLab.append( '<option value="'
				+value.id+'">'
				+value.codigo+' '
				+value.nombre_lab+'</option>');
		});
	});
}

$('#selectLab').change(function(){
	let  nameLab = $('#selectLab > option[value='+$(this).val()+']').html();
	$('#labSelected').html(nameLab);
	$('#labSelected2').html(nameLab);
	$('#labSelected3').html(nameLab);
});


$(document).ready(function(){
	loadingLaboratories();
});
