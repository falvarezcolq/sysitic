
     $(document).ready(function() {
         jQuery.extend(jQuery.validator.messages, {
             required: "Este campo es obligatorio.",
             remote: "Por favor, rellena este campo.",
             email: "Por favor, escribe una dirección de correo válida",
             url: "Por favor, escribe una URL válida.",
             date: "Por favor, escribe una fecha válida.",
             dateISO: "Por favor, escribe una fecha (ISO) válida.",
             number: "Por favor, escribe un número entero válido.",
             digits: "Por favor, escribe sólo dígitos.",
             creditcard: "Por favor, escribe un número de tarjeta válido.",
             equalTo: "Por favor, escribe el mismo valor de nuevo.",
             accept: "Por favor, escribe un valor con una extensión aceptada.",
             maxlength: jQuery.validator.format("Por favor, no escribas más de {0} caracteres."),
             minlength: jQuery.validator.format("Por favor, no escribas menos de {0} caracteres."),
             rangelength: jQuery.validator.format("Por favor, escribe un valor entre {0} y {1} caracteres."),
             range: jQuery.validator.format("Por favor, escribe un valor entre {0} y {1}."),
             max: jQuery.validator.format("Por favor, escribe un valor menor o igual a {0}."),
             min: jQuery.validator.format("Por favor, escribe un valor mayor o igual a {0}.")
         });
     });


     $.validator.methods.date =function( value, element ) {
         return this.optional(element) || /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/.test(value);
      }


     $('form[name="reg"]').validate({
        rules:{
            fecha_nac:{ 
                        required:true,
                        date:true,
                     }
        },

         highlight: function(element, errorClass) {
             $(element).parent().addClass('has-error');
         },
         unhighlight: function(element, errorClass) {
             $(element).parent().removeClass('has-error');
             $(element).parent().addClass('has-success');
         },
         submitHandler: function(form) {

             $.ajax({
                 url: baseURL +'/admin/users/',
                 headers:{'X-CSRF-TOKEN':$('#_token').val()},
                 type:'POST',
                 dataType:'json',
                 data:{
                     nombre:$('input[name="nombre"]').val(),
                     paterno:$('input[name="paterno"]').val(),
                     materno:$('input[name="materno"]').val(),
                     ci:$('input[name="ci"]').val(),
                     fecha_nac:$('input[name="fecha_nac"]').val(),
                     genero:$('input[name="genero"]:checked').val(),
                     email:$('input[name="email"]').val(),
                     telfijo:$('input[name="telfijo"]').val(),
                     telcelular:$('input[name="telcelular"]').val(),
                     direccion:$('input[name="direccion"]').val(),
                     profesion:$('input[name="profesion"]').val(),
                 },
                 success:function(res){
                     msjAlert(res.msj,res.text);
                 },
                 error:function(){
                     msjAlert('error','Error');
                 }
             });
         }
     });

     