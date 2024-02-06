
 
    

@vite(['resources/js/app.js'])


<html>

    @if(Session::has('message'))
    <div class="alert alert-primary" role="alert">
        {{ Session::get('message') }}
    </div>
    @endif




 

<table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Precio</th>
      <th>Stock</th>
      <th>Imagen</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody> 
    @foreach($productos as $prod) <tr>
      <td class="v-align-middle">{{$prod->nombre}}</td>
      <td class="v-align-middle">{{$prod->precio}}</td>
      <td class="v-align-middle">{{$prod->stock}}</td>
      <td class="v-align-middle">
        <img src="{{ asset("uploads/$prod->img") }}" width="80" height="80" class="img-responsive">
      </td>
      <td class="v-align-middle">
        <form action="{{ route('admin/productos/eliminar',$prod->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return confirmarEliminar()">
          <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <a href="{{ route('admin/productos/detalles',$prod->id) }}" class="btn btn-dark">Detalles</a>
          <a href="{{ route('admin/productos/actualizar',$prod->id) }}" class="btn btn-primary">Editar</a>
          <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
      </td>
    </tr> 
    @endforeach 

    
   </tbody>
   
</table>

<a href="{{ route('admin/productos/crear') }}" class="btn btn-success mt-4 ml-3"> Agregar </a>

<body>

    <script type="text/javascript">
        function confirmarEliminar() {
            var x = confirm("Estas seguro de Eliminar?");
            if (x)
                return true;
            else
                return false;
        }
    </script>



</body>

</html>
</body>

</html>