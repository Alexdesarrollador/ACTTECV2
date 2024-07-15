<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
   
    public function index()
    {
        $empleados=Empleado::all();
        return view('empleados.index',compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cedula' => 'required|string|min:6|max:100',
            'nombre' => 'required|string|min:7|max:100'

        ]);
        Empleado::create($request->all());

        return redirect()->route('empleados.index');
        //return redirect()->back();
    }

    
    public function show(string $id)
    {
        
    }

    
    public function edit(string $id)
    {
        $empleado = Empleado::findOrFail($id);
        return view('empleados.edit', compact('empleado'));
    }

   
    public function update(Request $request, string $id)
    {
        $request->validate([
            'cedula' => 'required|string|min:2|max:100',
            'nombre' => 'required|string|min:7|max:100'

        ]);
        $empleado = Empleado::findOrFail($id);
        $empleado -> update($request->all());

        return redirect()->route('empleados.index');
        //return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $empleado = Empleado::findOrFail($id);
       $empleado -> delete();
       return redirect() -> route('empleado.index');
    }
}
