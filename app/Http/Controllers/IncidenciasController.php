<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incidencias; // Cambio de "Productos" a "Incidencias"
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\IncidenciaCreateRequest;
use App\Http\Requests\ItemUpdateRequest;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Support\Facades\Input;
use DateTime;
use Illuminate\Support\Facades\Session;     
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ItemIncidenciaCreateRequest;
use App\Http\Requests\ItemIncidenciaUpdateRequest;

class IncidenciasController extends Controller
{
    //public function crear()
    public function crear()
    {
        $incidencias = Incidencias::all(); // Cambio de "Productos" a "Incidencias"
        return view('admin.incidencias.crear', compact('incidencias')); // Cambio de "productos" a "incidencias"
    }
    public function store(IncidenciaCreateRequest $request)
    {
        // Instancio al modelo Incidencias que hace llamado a la tabla 'incidencias' de la Base de Datos
        $incidencias = new Incidencias; // Cambio de "Productos" a "Incidencias"

        // Recibo todos los datos del formulario de la vista 'crear.blade.php'
        $incidencias->nombre = $request->nombre; // Cambio de "nombre" a "nombre"
        $incidencias->descripcion = $request->descripcion; // Añado el campo "descripcion"
        $incidencias->categoria = $request->categoria; // Añado el campo "categoria"
        $incidencias->estado = $request->estado; // Añado el campo "estado"

        // Almaceno la imagen en la carpeta pública especifica, esto lo veremos más adelante 
        $incidencias->img = $request->file('img')->store('/'); // Cambio de "productos" a "incidencias"

        // Guardo la fecha de creación del registro 
        $incidencias->created_at = (new DateTime)->getTimestamp();

        // Inserto todos los datos en mi tabla 'incidencias' 
        $incidencias->save(); // Cambio de "productos" a "incidencias"

        // Hago una redirección a la vista principal con un mensaje 
        return redirect('admin/incidencias')->with('message', 'Guardado Satisfactoriamente !'); // Cambio de "productos" a "incidencias"
    }

    public function show($id)
    {
        $incidencias = Incidencias::find($id); // Cambio de "Productos" a "Incidencias"
        return view('admin.incidencias.detalles', compact('incidencias')); // Cambio de "productos" a "incidencias"
    }

    public function actualizar($id)
    {
        $incidencias = Incidencias::find($id); // Cambio de "Productos" a "Incidencias"
        return view('admin.incidencias.actualizar', ['incidencias' => $incidencias]); // Cambio de "productos" a "incidencias"
    }

    public function update(ItemUpdateRequest $request, $id)
    {
        // Recibo todos los datos desde el formulario Actualizar
        $incidencias = Incidencias::find($id); // Cambio de "Productos" a "Incidencias"
        $incidencias->nombre = $request->nombre; // Cambio de "nombre" a "nombre"
        $incidencias->descripcion = $request->descripcion; // Añado el campo "descripcion"
        $incidencias->categoria = $request->categoria; // Añado el campo "categoria"
        $incidencias->estado = $request->estado; // Añado el campo "estado"

        // Recibo la imagen desde el formulario Actualizar
        if ($request->hasFile('img')) {
            $incidencias->img = $request->file('img')->store('/'); // Cambio de "productos" a "incidencias"
        }

        // Guardamos la fecha de actualización del registro 
        $incidencias->updated_at = (new DateTime)->getTimestamp();

        // Actualizo los datos en la tabla 'incidencias'
        $incidencias->save(); // Cambio de "productos" a "incidencias"

        // Muestro un mensaje y redirecciono a la vista principal 
        Session::flash('message', 'Editado Satisfactoriamente !');
        // ...

        return Redirect::to('admin/incidencias'); // Cambio de "productos" a "incidencias"
    }

    public function eliminar($id)
    {
        // Indicamos el 'id' del registro que se va Eliminar
        $incidencias = Incidencias::find($id); // Cambio de "Productos" a "Incidencias"

        // Elimino la imagen de la carpeta 'uploads', esto lo veremos más adelante
        $imagen = explode(",", $incidencias->img); // Cambio de "productos" a "incidencias"
        Storage::delete($imagen);

        // Elimino el registro de la tabla 'incidencias' 
        Incidencias::destroy($id); // Cambio de "Productos" a "Incidencias"

        // Opcional: Si deseas guardar la fecha de eliminación de un registro, debes mantenerlo en 
        // una tabla llamada por ejemplo 'incidencias_eliminados' y allí guardas su fecha de eliminación 
        // $incidencias->deleted_at = (new DateTime)->getTimestamp();

        // Muestro un mensaje y redirecciono a la vista principal 
        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('admin/incidencias'); // Cambio de "productos" a "incidencias"
    }

    public function index()
    {
        $incidencias = Incidencias::all(); // Cambio de "Productos" a "Incidencias"
        return view('admin.incidencias.index', compact('incidencias')); // Cambio de "productos" a "incidencias"
    }
}
