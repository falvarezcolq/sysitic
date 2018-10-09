


var confirm = null;
function showConfirm(title,body,confirm_f){    
    $('#alert-confirm-title').html(title);
    $('#alert-confirm-body').html(body);
    $('#alert-confirm').css('display','block');
    confirm = confirm_f;
}
function hideConfirm(){   
     $('#alert-confirm').css('display','none');
     confirm= null;
}   
function confirmSuccess(){
    if(confirm!=null  && typeof(confirm) === 'function'){
        confirm();
    }
    confirm = null;
}
(function(){
   $('#alert-exit-btn').click(hideConfirm);
   $('#alert-confirm-btn').click(confirmSuccess);
})();




function msjAlert(type,texto){
    // type: ok , error, warning, info
    var msj = $('#msj');
    msj.html('');
    
    if(type =="success"){
        msj.append('<div class="alert alert-success alert-dismissible" role="alert">'
        +'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
        +'<strong>Exito!</strong>'+texto+'.'
    +'</div>');
    } else  if(type =="ok"){
        msj.append('<div class="alert alert-success alert-dismissible" role="alert">'
        +'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
        +'<strong>Exito!</strong>'+texto+'.'
    +'</div>');
    } else if(type=="error"){
        msj.append(
            '<div class="alert alert-danger alert-dismissible" role="alert">'
                    +'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                    +'<strong>Error:!</strong>'+texto+'.'
                +'</div>'
        );
    } else if(type=="danger"){
        msj.append(
            '<div class="alert alert-danger alert-dismissible" role="alert">'
                    +'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                    +'<strong>Error:!</strong>'+texto+'.'
                +'</div>'
        );
    } else if(type=="warning"){
        msj.append(
            '<div class="alert alert-warning alert-dismissible" role="alert">'
                    +'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                    +'<strong>Alerta:!</strong>'+texto+'.'
                +'</div>'
        );
    } else if(type=="info"){
        msj.append(
            '<div class="alert alert-info alert-dismissible" role="alert">'
                    +'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                    +'<strong>Información!</strong>'+texto+'.'
                +'</div>'
        );
    }
}

