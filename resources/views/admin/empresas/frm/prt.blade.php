<div class="row">
	<div class="col-md-12">
		<section class="panel"> 
			<div class="panel-body">
 
				@if (!empty($empresas->id))
 
					<div class="mb-3">
						<label for="nombre" class="negrita">Nombre:</label> 
						<div>
							<input class="form-control" required="required" name="nombre" type="text" id="nombre" value="{{ $empresas->nombre }}"> 
						</div>
					</div>
 
					<div class="mb-3">
						<label for="categoria" class="negrita">Categoría:</label> 
						<div>
							<input class="form-control" required="required" name="categoria" type="text" id="categoria" value="{{ $empresas->categoria }}"> 
						</div>
					</div>

					<div class="mb-3">
						<label for="poblacion" class="negrita">Población:</label> 
						<div>
							<input class="form-control" required="required" name="poblacion" type="text" id="poblacion" value="{{ $empresas->poblacion }}"> 
						</div>
					</div>

					<div class="mb-3">
						<label for="direccion" class="negrita">Dirección:</label> 
						<div>
							<input class="form-control" required="required" name="direccion" type="text" id="direccion" value="{{ $empresas->direccion }}"> 
						</div>
					</div>

					<div class="mb-3">
						<label for="telefono" class="negrita">Teléfono:</label> 
						<div>
							<input class="form-control" required="required" name="telefono" type="text" id="telefono" value="{{ $empresas->telefono }}"> 
						</div>
					</div>

					<div class="mb-3">
						<label for="email" class="negrita">Email:</label> 
						<div>
							<input class="form-control" required="required" name="email" type="email" id="email" value="{{ $empresas->email }}"> 
						</div>
					</div>
 
 
				@else
 
					<div class="mb-3">
						<label for="nombre" class="negrita">Nombre:</label> 
						<div>
							<input class="form-control" required="required" name="nombre" type="text" id="nombre"> 
						</div>
					</div>
 
					<div class="mb-3">
						<label for="categoria" class="negrita">Categoría:</label> 
						<div>
							<input class="form-control" required="required" name="categoria" type="text" id="categoria"> 
						</div>
					</div>

					<div class="mb-3">
						<label for="poblacion" class="negrita">Población:</label> 
						<div>
							<input class="form-control" required="required" name="poblacion" type="text" id="poblacion"> 
						</div>
					</div>

					<div class="mb-3">
						<label for="direccion" class="negrita">Dirección:</label> 
						<div>
							<input class="form-control" required="required" name="direccion" type="text" id="direccion"> 
						</div>
					</div>

					<div class="mb-3">
						<label for="telefono" class="negrita">Teléfono:</label> 
						<div>
							<input class="form-control" required="required" name="telefono" type="text" id="telefono"> 
						</div>
					</div>

					<div class="mb-3">
						<label for="email" class="negrita">Email:</label> 
						<div>
							<input class="form-control" required="required" name="email" type="email" id="email"> 
						</div>
					</div>
 
 
				@endif
 
				<button type="submit" class="btn btn-info">Guardar</button>
				<a href="{{ route('admin/empresas') }}" class="btn btn-warning">Cancelar</a>
 
				<br>
				<br>
 
			</div>
		</section>
	</div>
</div>