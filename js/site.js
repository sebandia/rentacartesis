$(document).ready(function(){
console.log("iniciando sitio");

$("#form").validate({
rules: {
	nombre: {
		required: true,
	    letras:true
},
    ciudad: {
         required:true,
         letras:true
}
},
SubmitHandler: function(form){
	form.submit();
},
highlight: function(element){
$(element).parent().removeClass('has-success').addClass('has-error');
},
success: function(element){
$(element).parent().removeClass('has-error').addClass('has-success');
}
});
	jQuery.validator.addMethod("letras", function(value, element) {
    return this.optional( element ) || /^[a-zA-Z\s]+$/.test( value );
    }, 'solo caracteres');

    jQuery.validator.addMethod("numeros", function(value, element) {
    return this.optional( element ) || /^[1-9]+$/.test( value );
    }, 'solo numeros');

    $("#guardar").prop('disabled','disabled');
    


    $("#form").on('keyup blur',function(){
    	if ($("#form").valid()) {
//habilitams
 $("#guardar").prop('disabled',false);
 }else{
 	 $("#guardar").prop('disabled','disabled');
 }

    	
    });
 $("#editar").prop('disabled','disabled');
    $("#form").on('keyup blur',function(){
        if ($("#form").valid()) {
//habilitams
 $("#editar").prop('disabled',false);
 }else{
     $("#editar").prop('disabled','disabled');
 }
 });

});