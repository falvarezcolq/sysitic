$(document).ready(function(){
	loadingLaboratories();
});

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

$('#registro').click(function(){
	var dato = $('#optionRadioLimpieza').val();
	var estado = 0 ;
	if(dato =='limpio'){
		estado = 1;
	}
	var route = baseURL+ '/cleaning';
	var token = $('#token').val();
	$.ajax({
		url:route,
		headers:{'X-CSRF-TOKEN':token},
		type: 'POST',
		dataType: 'json',
		data: {
			estado:estado,
			laboratory_id:id
		},
		success: function(res){
			console.log(res);
			$('#msj-success').fadeIn();
		},
		error: function (msj){
			console.log(msj);
			$('#msj-error').fadeIn();
			$('#msj-error-text').html(msj.responseJSON.genre);
		}
	});
});
