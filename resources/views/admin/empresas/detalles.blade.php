@vite(['resources/js/app.js'])
<div class="panel-body">
 
 @if(Session::has('message'))
   <div class="alert alert-primary" role="alert">
     {{ Session::get('message') }}
   </div>
 @endif 
          
   <p class="h5">Nombre:</p>
   <p class="h6 mb-3">{{ $incidencias->nombre }}</p>

   <p class="h5">Descripcion:</p>
   <p class="h6 mb-3">{{ $incidencias->descripcion }}</p>

   <p class="h5">Categoria:</p>
   <p class="h6 mb-3">{{ $incidencias->categoria }}</p> 

   <p class="h5">Estado:</p>
   <p class="h6 mb-3">{{ $incidencias->estado }}</p> 

   <p class="h5">Imagen:</p>
   <img src="../../../uploads/{{ $incidencias->img }}" class="img-fluid" width="20%">   

   <br>
   
   <a href="{{ route('admin/incidencias') }}" class="btn btn-success mt-4 ml-3"> Incidencias </a>

</div>