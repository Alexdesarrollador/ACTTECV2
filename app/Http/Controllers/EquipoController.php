<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
   
    public function index()
    {
        $equipos= Equipo::all();
        $empleados= Empleado::all();

        return view('equipos.index', compact('equipos', 'empleados'));
    }

    
    public function create()
    {
        $empleados= Empleado::all();

        return view('equipos.create', compact('empleados')); 

    }

    
    public function store(Request $request)
    {
        $request->validate([
            'serial' => 'required|string|min:6|max:100',
            'nombre' => 'required|string|min:7|max:100'

        ]);
        Equipo::create($request->all());

        return redirect()->route('equipos.index');
        //return redirect()->back();
    }

  
    public function show(string $id)
    {
        //
    }

  
    public function edit(string $id)
    {
        $equipo = Equipo::findOrFail($id);
        $empleados= Empleado::all();

       
        return view('equipos.edit', compact('equipo' , 'empleados'));
    }

    
    public function update(Request $request, string $id)
    {
        $request->validate([
            'serial' => 'required|string|min:6|max:100',
            'nombre' => 'required|string|min:7|max:100'

        ]);
        $equipo = Equipo::findOrFail($id);
        $equipo -> update($request->all());

   
        

        return redirect()->route('equipos.index');
        //return redirect()->back();
        
    }

  
    public function destroy(string $id)
    {
       $equipo = Equipo::findOrFail($id);
       $equipo -> delete();
       return redirect() -> route('equipos.index');
    }
}
