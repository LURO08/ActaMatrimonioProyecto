<?php

namespace App\Http\Controllers;

use App\Models\persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        $persona = persona::all();
        return view('Personas/index', compact('persona'));
    }

    public function create()
    {   
        
        return view('Personas/create');
    }

    public function show(persona $persona){
        
        $persona = persona::find($persona->id);
        return view('personas/show',compact('persona'));
    }


    public function eliminar(persona $persona)
    {
        return view('persona.eliminar', compact('persona'));
        
    }

    public function edit(persona $persona)
    {
        return view('personas/edit', compact('persona'));
    }

    public function update(Request $request, Persona $persona)
    {

        $persona->nombre = $request->nombre;
        $persona->apellidoPaterno = $request->apellidoPaterno;
        $persona->apellidoMaterno = $request->apellidoMaterno;
        $persona->estado_civil = $request->estado_civil;
        $persona->sexo = $request->sexo;
        $persona->edad = $request->edad;
        $persona->entidad = $request->entidad;
        $persona->municipio = $request->municipio;
        $persona->nacionalidad = $request->nacionalidad;
        $persona->curp = $request->curp;
        $persona->save();

        // Redireccionar a alguna ruta después de la actualización
        return redirect()->route('persona.show', $persona);
    }
    


    public function store(Request $request)
    {

        $persona = persona::create($request->all());

        return redirect()->route('persona.show', $persona);
    }



    public function destroy($id)
    {
        $persona = persona::findOrFail($id);
        $persona->delete();
        return redirect()->route('dashboard', $persona)->with('message', 'Registro eliminado');
    }

    
}
