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
      <th>Categoría</th>
      <th>Población</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody> 
    @foreach($empresas as $empresa) <tr>
      <td class="v-align-middle">{{$empresa->nombre}}</td>
      <td class="v-align-middle">{{$empresa->categoria}}</td>
      <td class="v-align-middle">{{$empresa->poblacion}}</td>
      <td class="v-align-middle">
        <form action="{{ route('admin/empresas/eliminar',$empresa->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return confirmarEliminar()">
          <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <a href="{{ route('admin/empresas/detalles',$empresa->id) }}" class="btn btn-dark">Detalles</a>
          <a href="{{ route('admin/empresas/actualizar',$empresa->id) }}" class="btn btn-primary">Editar</a>
          <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
      </td>
    </tr> 
    @endforeach 
   </tbody>
</table>

<a href="{{ route('admin/empresas/crear') }}" class="btn btn-success mt-4 ml-3"> Agregar </a>

<a href="{{ route('admin/incidencias') }}" class="btn btn-success mt-4 ml-3"> Incidencias </a>

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
