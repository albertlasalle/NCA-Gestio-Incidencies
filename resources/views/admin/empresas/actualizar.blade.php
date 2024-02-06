@vite(['resources/js/app.js'])

<form method="POST" action="{{ route('admin/empresas/update',$empresa->id) }}" role="form" enctype="multipart/form-data">
 
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
 
    @include('admin.empresas.frm.prt')
                                                                            
</form>