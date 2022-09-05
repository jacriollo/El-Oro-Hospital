$(function(){

	// Lista de Continentes
	$.post( '../vista/select/medico.php' ).done( function(respuesta)
	{
		$( '#continentes' ).html( respuesta );
	});

	// lista de Paises	
	$('#continentes').change(function()
	{
		var el_continente = $(this).val();
		
		// Lista de Paises
		$.post( '../vista/select/area.php', { continente: el_continente} ).done( function( respuesta )
		{
			$( '#paises' ).html( respuesta );
		});
	});
	
	// Lista de Ciudades
	$( '#paises' ).change( function()
	{
		


		var el_horario = $(this).val();
		$.post( '../vista/select/doctor_horario', { horario: el_horario} ).done( function( respuesta )
		{
			$( '#horario' ).html( respuesta );
		});


		
	});

})
