$(function(){

	// Lista de docente
	$.post( '../vista/select/paciente.php' ).done( function(respuesta)
	{
		$( '#paciente' ).html( respuesta );
	});
	
	
	// Lista de Ciudades
	$( '#paciente' ).change( function()
	{
		var el_continente = $(this).val();

	});


	
	
	

})
