@vite(['resources/js/app.js'])
<div class="row">
	<div class="col-md-12">
		<section class="panel"> 
			<div class="panel-body">
 
				@if ( !empty ( $incidencias->id) )
 
					<div class="mb-3">
						<label for="nombre" class="negrita">Nombre:</label> 
						<div>
							<input class="form-control" required="required" name="nombre" type="text" id="nombre" value="{{ $incidencias->nombre }}"> 
						</div>
					</div>
 
					<div class="mb-3">
						<label for="descripcion" class="negrita">Descripcion:</label> 
						<div>
							<input class="form-control"  required="required" name="precio" type="text" id="precio" value="{{ $incidencias->descripcion }}"> 
						</div>
					</div>
 
					<div class="mb-3">
						<label for="categoria" class="negrita">Categoria:</label> 
						<div>
							<input class="form-control" required="required" name="stock" type="text" id="stock" value="{{ $incidencias->categoria }}"> 
						</div>
					</div>

					<div class="mb-3">
						<label for="estado" class="negrita">Estado:</label> 
						<div>
							<input class="form-control" required="required" name="stock" type="text" id="stock" value="{{ $incidencias->estado }}"> 
						</div>
					</div>
 
					<div class="mb-3">
						<label for="img" class="negrita">Selecciona una imagen:</label> 
						<div>
							<input name="img" type="file" id="img">
							<br>
							<br>
 
							@if ( !empty ( $incidencias->img) )
 
								<span>Imagen Actual: </span>
								<br>
								<img src="../../../uploads/{{ $incidencias->img }}" width="200" class="img-fluid">
 
							@else
 
								Aún no se ha cargado una imagen para esta incidencia
 
							@endif
 
						</div>
 
					</div>
 
					@else

					<div class="mb-3">
						<label for="nombre" class="negrita">Nombre:</label> 
						<div>
							<input class="form-control" required="required" name="nombre" type="text" id="nombre" value="{{ $incidencias->nombre }}"> 
						</div>
					</div>

 
					<div class="mb-3">
						<label for="descripcion" class="negrita">Descripcion:</label> 
						<div>
							<input class="form-control"  required="required" name="precio" type="text" id="precio" value="{{ $incidencias->descripcion }}"> 
						</div>
					</div>
 
					<div class="mb-3">
						<label for="categoria" class="negrita">Categoria:</label> 
						<div>
							<input class="form-control" required="required" name="stock" type="text" id="stock" value="{{ $incidencias->categoria }}"> 
						</div>
					</div>

					<div class="mb-3">
						<label for="estado" class="negrita">Estado:</label> 
						<div>
							<input class="form-control" required="required" name="stock" type="text" id="stock" value="{{ $incidencias->estado }}"> 
						</div>
					</div>
 
					<div class="mb-3">
						<label for="img" class="negrita">Selecciona una imagen:</label>
						<div>
							<input name="img" type="file" id="img"> 
						</div>
					</div>
 
				@endif
 
				<button type="submit" class="btn btn-info">Guardar</button>
				<a href="{{ route('admin/incidencias') }}" class="btn btn-warning">Cancelar</a>
 
				<br>
				<br>
 
			</div>
		</section>
	</div>
</div> 