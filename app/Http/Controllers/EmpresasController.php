<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresas;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmpresaCreateRequest;
use App\Http\Requests\ItemUpdateRequest;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Support\Facades\Input;
use DateTime;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class EmpresasController extends Controller
{
    public function crear()
    {
        $empresas = Empresas::all();
        return view('admin.empresas.crear', compact('empresas'));
    }

    public function store(EmpresaCreateRequest $request)
    {
        $empresa = new Empresas;

        $empresa->nombre = $request->nombre;
        $empresa->categoria = $request->categoria;
        $empresa->poblacion = $request->poblacion; // Añadido el campo "poblacion"
        $empresa->direccion = $request->direccion; // Añadido el campo "direccion"
        $empresa->telefono = $request->telefono; // Añadido el campo "telefono"
        $empresa->email = $request->email; // Añadido el campo "email"

        $empresa->img = $request->file('img')->store('/');

        $empresa->created_at = (new DateTime)->getTimestamp();

        $empresa->save();

        return redirect('admin/empresas')->with('message', 'Guardado Satisfactoriamente!');
    }

    public function show($id)
    {
        $empresa = Empresas::find($id);
        return view('admin.empresas.detalles', compact('empresa'));
    }

    public function actualizar($id)
    {
        $empresa = Empresas::find($id);
        return view('admin.empresas.actualizar', ['empresa' => $empresa]);
    }

    public function update(ItemUpdateRequest $request, $id)
    {
        $empresa = Empresas::find($id);

        $empresa->nombre = $request->nombre;
        $empresa->categoria = $request->categoria;
        $empresa->poblacion = $request->poblacion; // Añadido el campo "poblacion"
        $empresa->direccion = $request->direccion; // Añadido el campo "direccion"
        $empresa->telefono = $request->telefono; // Añadido el campo "telefono"
        $empresa->email = $request->email; // Añadido el campo "email"

        if ($request->hasFile('img')) {
            $empresa->img = $request->file('img')->store('/');
        }

        $empresa->updated_at = (new DateTime)->getTimestamp();

        $empresa->save();

        Session::flash('message', 'Editado Satisfactoriamente!');
        return Redirect::to('admin/empresas');
    }

    public function eliminar($id)
    {
        $empresa = Empresas::find($id);

        $imagen = explode(",", $empresa->img);
        Storage::delete($imagen);

        Empresas::destroy($id);

        Session::flash('message', 'Eliminado Satisfactoriamente!');
        return Redirect::to('admin/empresas');
    }

    public function index()
    {
        $empresas = Empresas::all();
        return view('admin.empresas.index', compact('empresas'));
    }
}
