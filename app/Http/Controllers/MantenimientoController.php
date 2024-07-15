<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Mantenimiento;
use Illuminate\Http\Request;

class MantenimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mantenimientos= Mantenimiento::all();
        $equipos= Equipo::all();

        return view('mantenimientos.index', compact('mantenimientos', 'equipos'));
    }

    
    public function create()
    {
        $mantenimientos= Mantenimiento::all();
        $equipos= Equipo::all();

        return view('mantenimientos.create', compact('mantenimientos', 'equipos'));
        //return view('mantenimiento.create', compact('mantenimientos')); 

    }

    
    public function store(Request $request)
    {
        $request->validate([
            'serial' => 'required|string|min:4|max:100',
            'nombre' => 'required|string|min:4|max:100'

        ]);
        Mantenimiento::create($request->all());

        return redirect()->route('mantenimientos.index');
        //return redirect()->back();
    }

  
    public function show(string $id)
    {
        //
    }

  
    public function edit(string $id)
    {
        $mantenimiento = Mantenimiento::findOrFail($id);
        $equipos= Equipo::all();

       
        return view('mantenimientos.edit', compact('mantenimiento' , 'equipos'));
    }

    
    public function update(Request $request, string $id)
    {
        $request->validate([
            'serial' => 'required|string|min:6|max:100',
            'nombre' => 'required|string|min:7|max:100'

        ]);
        $mantenimientos = Mantenimiento::findOrFail($id);
        $mantenimientos -> update($request->all());

   
        

        return redirect()->route('mantenimientos.index');
        //return redirect()->back();
        
    }

  
    public function destroy(string $id)
    {
       $mantenimientos = Mantenimiento::findOrFail($id);
       $mantenimientos -> delete();
       return redirect() -> route('mantenimientos.index');
    }
}
