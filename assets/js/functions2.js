$(function(){

	// Lista de Continentes
	$.post( '../vista/venta/continentes.php' ).done( function(respuesta)
	{
		$( '#continentes' ).html( respuesta );
	});

	// lista de Paises
	$('#continentes').change(function()
	{
		var el_continente = $(this).val();

		// Lista de Paises
		$.post( '../vista/venta/paises.php', { continente: el_continente} ).done( function( respuesta )
		{
			$( '#paises' ).html( respuesta );
		});
	});

	// Lista de Ciudades
	$( '#paises' ).change( function()
	{
		var pais = $(this).children('option:selected').html();
		
	});

})
