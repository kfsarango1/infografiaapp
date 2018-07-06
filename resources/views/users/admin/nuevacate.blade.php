
@extends('layouts.app')

@section('content')
<div class="box_aux"></div>
<section class="container" id="cont_categoria">
	<div class="row">
		<div class="col-md-12">
			<h3 class="centrar">Nueva Infografía</h3>
		</div>
		<div class="col-md-6" id="cnt-category">
			<h4>Seleccione una categoria</h4>
			<form>
					@foreach ($categoriasAll as $categoria)
						<div class="radio">
							<label>
								<input type="radio" name="optradio" id="cate" value="{{$categoria->idcategoria}}">{{$categoria->nombre}}
							</label>
						</div>
					@endforeach
					<section class="cnt_btn_categoria">
						<span class="btn btn-sm btn-info" id="ocultar_boton">Nueva</span>
					</section>
			</form>			

			<form method="post" class="new" action="{{url('nuevacategoria')}}">
			@csrf
				<h5 class="centrar">Agregando nueva categoria</h5>
				<div class="mostrar form-group">
					<input  name="nom" type="text" class="form-control" placeholder="Ingrese un nombre" required>
						
				</div>
				<div id="btns-cnt">
					<button type="submit" class="btn btn-sm btn-default btn1">Añadir</button>
					<button type="button" class="btn btn-sm btn-default btn2">Cancelar</button>
				</div>
			</form>
		</div>

		<div class="col-md-6" id="cnt-data">
			<h4>Ingreso de datos</h4>
			<section class="cnt_btn_categoria">
				<span class="btn btn-sm btn-info" id="ocultar">Nuevo Campo</span>
			</section>
			<div class="mostrar_items new">
				<h5 class="centrar">Agregando un nuevo Campo</h5>
				<div class="mostrar form-group">
					<input  name="campo1" type="text" class="form-control" id="nombre" placeholder="Ingrese un nombre" required>
						
				</div>
				<div id="btns-cnt">
					<button type="submit" class="btn btn-sm btn-default btn1" id="nuevo_item">Añadir</button>
					<button type="button" class="btn btn-sm btn-default btn2">Cancelar</button>
				</div>	
			</div>
			<form method="post" class="form-inline" action="{{url('prueba')}}">
        	@csrf
				<div id="items_nuevos">
					@foreach ($campos as $cam)
						<div>{{$cam->campo}}</div>
					@endforeach
					
					<div class="form-group">
						<input id="idcat" type="text" name="idcat" hidden>
					</div>
					<div class="form-group">
<<<<<<< HEAD
						<label class="col-sm-6" for="campo1">Campo 1:</label>
						<input class="col-sm-6 form-control"type="text" name="campo1">
=======
						<label for="">Nombres:</label>
						<input type="text" name="nombre">
						<span id="eliminar_item">
							eliminar
						</span>
>>>>>>> 79fb46daeb5089ce6de3b5a2585410f5f5cf1461
					</div>

					
				</div>

				<div class="cont_boton">
					<button type="submit" class="btn btn-success save">Continuar</button>
				</div>
					

			</form>			

		</div>
	</div>
</section>
<script src="../js/nueva_categoria.js"></script>
<script>
	$(document).ready(function(){
		var id;
		$("input[name=optradio]").click(function () {
			id = $('input:radio[name=optradio]:checked').val();
			$('#idcat').val(id)
			$.ajax({
				method: 'POST', // Type of response and matches what we said in the route
				url: 'http://localhost:8000/getitems', // This is the url we gave in the route
				dataType: 'json',
				data: {'id' : id}, // a JSON object to send back
				success: function(response){ // What to do if we succeed
					console.log(response); 
				},
				error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
					console.log(JSON.stringify(jqXHR));
					console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
				}
			});
    	})
	})
</script>


@endsection