<div class="row">
	<div class="col-md-12">
		<section class="panel"> 
			<div class="panel-body">
 
				@if (!empty($empresa->id))
 
					<div class="mb-3">
						<label for="nombre" class="negrita">Nombre:</label> 
						<div>
							<input class="form-control" required="required" name="nombre" type="text" id="nombre" value="{{ $empresa->nombre }}"> 
						</div>
					</div>
 
					<div class="mb-3">
						<label for="categoria" class="negrita">Categoría:</label> 
						<div>
							<input class="form-control" required="required" name="categoria" type="text" id="categoria" value="{{ $empresa->categoria }}"> 
						</div>
					</div>

					<div class="mb-3">
						<label for="poblacion" class="negrita">Población:</label> 
						<div>
							<input class="form-control" required="required" name="poblacion" type="text" id="poblacion" value="{{ $empresa->poblacion }}"> 
						</div>
					</div>

					<div class="mb-3">
						<label for="direccion" class="negrita">Dirección:</label> 
						<div>
							<input class="form-control" required="required" name="direccion" type="text" id="direccion" value="{{ $empresa->direccion }}"> 
						</div>
					</div>

					<div class="mb-3">
						<label for="telefono_fijo" class="negrita">Teléfono Fijo:</label> 
						<div>
							<input class="form-control" required="required" name="telefono_fijo" type="number" id="telefono_fijo" value="{{ $empresa->telefono_fijo }}"> 
						</div>

					<div class="mb-3">
						<label for="telefono" class="negrita">Teléfono Móvil:</label> 
						<div>
							<input class="form-control" required="required" name="telefono_movil" type="number" id="telefono_movil" value="{{ $empresa->telefono_movil }}"> 
						</div>
					</div>

					<div class="mb-3">
						<label for="email" class="negrita">Email:</label> 
						<div>
							<input class="form-control" required="required" name="email" type="email" id="email" value="{{ $empresa->email }}"> 
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
						<label for="telefono_fijo" class="negrita">Teléfono Fijo:</label> 
						<div>
							<input class="form-control" required="required" name="telefono_fijo" type="number" id="telefono_fijo"> 
						</div>

					<div class="mb-3">
						<label for="telefono_movil" class="negrita">Teléfono Móvil:</label> 
						<div>
							<input class="form-control" required="required" name="telefono_movil" type="number" id="telefono_movil"> 
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