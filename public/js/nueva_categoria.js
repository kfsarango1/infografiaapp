$(document).ready(function(){ 
  
    

    $('#ocultar_boton').click(function(){
        
    $('.new').toggle('slow')
    })

    $('#ocultar').click(function(){


        
    $('.mostrar_items').toggle('slow'),
    $('.save').toggle('slow')


    })

    $("input[name=optradio]").click(function () {    
        $('#idcat').val($('input:radio[name=optradio]:checked').val())

    });

    // --- Agregado items al formulario --- //
	var newcampo;
	$('#nuevo_item').click(function(){
		$('.save').toggle('slow'),
		newcampo = '<div class="form-group">'+
						'<label for="">'+$('#nombre').val()+':</label>'+
						'<input type="text" name="'+$('#nombre').val()+'">'+
						'<span id="item_añadido">'+
							'eliminar'+
						'</span>'+
					'</div>';
		$('#items_nuevos').append(newcampo)

		$('.mostrar_items').toggle('slow')
	});


	$('#items_nuevos').on('click', '#item_añadido', function() {
		$(this).closest('.form-group').remove();
	});

});




