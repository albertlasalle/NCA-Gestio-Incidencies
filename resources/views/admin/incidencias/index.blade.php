@vite(['resources/js/app.js'])

<html>

@if(Session::has('message'))
<div class="alert alert-primary" role="alert">
    {{ Session::get('message') }}
</div>
@endif

<body>

<table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Descripción</th> <!-- Nuevo campo -->
      <th>Categoría</th> <!-- Nuevo campo -->
      <th>Estado</th> <!-- Nuevo campo -->
      <th>Imagen</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody> 
    @foreach($incidencias as $incidencia) <tr>
      <td class="v-align-middle">{{$incidencia->nombre}}</td>
      <td class="v-align-middle">{{$incidencia->descripcion}}</td> <!-- Nuevo campo -->
      <td class="v-align-middle">{{$incidencia->categoria}}</td> <!-- Nuevo campo -->
      <td class="v-align-middle">{{$incidencia->estado}}</td> <!-- Nuevo campo -->
      <td class="v-align-middle">
        <img src="{{ asset("uploads/$incidencia->img") }}" width="80" height="80" class="img-responsive">
      </td>
      <td class="v-align-middle">
        <form action="{{ route('admin/incidencias/eliminar',$incidencia->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return confirmarEliminar()">
          <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <a href="{{ route('admin/incidencias/detalles',$incidencia->id) }}" class="btn btn-dark">Detalles</a>
          <a href="{{ route('admin/incidencias/actualizar',$incidencia->id) }}" class="btn btn-primary">Editar</a>
          <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
      </td>
    </tr> 
    @endforeach 
   </tbody>
</table>

<a href="{{ route('admin/incidencias/crear') }}" class="btn btn-success mt-4 ml-3"> Agregar </a>

<a href="{{ route('logout') }}" class="btn btn-success mt-4 ml-3"> Cerrar Sesión </a>

<script type="text/javascript">
    function confirmarEliminar() {
        var x = confirm("¿Estás seguro de Eliminar?");
        if (x)
            return true;
        else
            return false;
    }
</script>

</body>

</html>