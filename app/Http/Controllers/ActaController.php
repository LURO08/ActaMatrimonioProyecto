<?php

namespace App\Http\Controllers;

use App\Models\acta;
use App\Models\persona;
use App\Models\archivos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvitacionMailable;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\ServiceProvider;
use Illuminate\Support\Facades\File;

class ActaController extends Controller
{
    public function index()
    {
        $actas = acta::all();
        $personas = persona::all();
        return view('acta/index', compact('actas','personas'));
    }

    public function create()
    {   
        $personas = persona::all();
        return view('acta/create', compact('personas'));
    }

    public function show(Acta $acta) {
        $acta->carpeta = $acta->idNovio .'_'. $acta->idNovia;
        $acta->nombres = explode(',', $acta->rutas);
        // Explode the string into an array
        $imagenesArray = explode(',', $acta->imgruta);

        // Assign each element of the array to separate variables
        $acta->imgnovia = $imagenesArray[0] ?? null;
        $acta->imgnovio = $imagenesArray[1] ?? null;

        

        $personas = Persona::all();
        return view('acta.show', compact('acta', 'personas'));
    }

    
    
    public function eliminar(acta $acta)
    {
        return view('acta.eliminar', compact('acta'));
        
    }


    public function store(Request $request)
    {
        $archivos = [];
        $rutas = '';
        $ids = $request->idNovio .'_'. $request->idNovia;
        
        // Procesar datos del formulario
        $data = $request->except(['fotoNovia', 'fotoNovio', 'documentosMatrimonio']);
    
        // Procesar fotos de novia y novio
        if($request->hasFile('fotoNovia') && $request->hasFile('fotoNovio')) {
            $imagenNovia = $request->file('fotoNovia');
            $imagenNovio = $request->file('fotoNovio');
    
            $imagenNovia->move(public_path().'/Archivos/'. $ids , $imagenNovia->getClientOriginalName());
            $imagenNovio->move(public_path().'/Archivos/'. $ids , $imagenNovio->getClientOriginalName());
    
            $rutasImagen =  $imagenNovia->getClientOriginalName() . ',' . $imagenNovio->getClientOriginalName();
            $data['imgruta'] = $rutasImagen;
        }
    
        // Procesar documentos de matrimonio
        if($request->hasFile('documentosMatrimonio')) {
            $archivos = $request->file('documentosMatrimonio');
    
            foreach ($archivos as $archivo) {
                // Procesar cada archivo
                $archivo->move(public_path().'/Archivos/'. $ids , $archivo->getClientOriginalName());
        
                $rutas .=  $archivo->getClientOriginalName() . ',';
            }
            // Eliminar la última coma, si existe
            $rutas = rtrim($rutas, ',');
            $data['rutas'] = $rutas;
        }
        
        // Crear el acta
        $acta = Acta::create($data);
        
        // Encontrar a la novia y cambiar su estado civil a "casado"
        $novia = Persona::find($acta->idNovia);
        $novia->estado_civil = "casado";
        $novia->save();
    
        // Encontrar al novio y cambiar su estado civil a "casado"
        $novio = Persona::find($acta->idNovio);
        $novio->estado_civil = "casado";
        $novio->save();
    
        // Redirigir a la vista de detalles del acta recién creada
        return redirect()->route('dashboard', $acta);
    }
    

    public function invit($id)
    {
        $acta = acta::findOrFail($id);
        $personas = persona::all();
        foreach($personas as $persona){
            if($acta->idNovia == $persona->id){
                $novia = $persona;
            }
            if($acta->idNovio == $persona->id){
                $novio = $persona;
            }
        }
        return view('acta/invitacion', compact('acta','personas','novia','novio'));
    }


    public function showinvit(Request $request)
    {   
        return view('acta/showinvit', compact('request'));
    }
    


    public function destroy($id)
{
    $acta = Acta::findOrFail($id);

    // Encontrar y eliminar los archivos asociados al acta
    $carpeta = $acta->idNovio .'_'. $acta->idNovia;
    if ($acta->rutas) {
        $rutasArray = explode(',', $acta->rutas);
        foreach ($rutasArray as $nombreArchivo) {
            $rutaArchivo = public_path().'/Archivos/'. $carpeta . '/' .  $nombreArchivo;
            if (file_exists($rutaArchivo)) {
                unlink($rutaArchivo);
            }
        }
  // Eliminar la carpeta y todos sus archivos y subdirectorios
        $carpetaAEliminar = public_path('Archivos/' . $carpeta);
        if (File::exists($carpetaAEliminar)) {
            File::deleteDirectory($carpetaAEliminar);
        }
    }

    // Encontrar a la novia y cambiar su estado civil a "divorciado"
    $novia = Persona::find($acta->idNovia);
    if ($novia) {
        $novia->estado_civil = "divorciado";
        $novia->save();
    }

    // Encontrar al novio y cambiar su estado civil a "divorciado"
    $novio = Persona::find($acta->idNovio);
    if ($novio) {
        $novio->estado_civil = "divorciado";
        $novio->save();
    }

    // Eliminar el registro del acta
    $acta->delete();

    return redirect()->route('dashboard')->with('message', 'Registro eliminado');
}

    public function storeInvitacion(Request $request)
    {
        // Utiliza la clase PDF directamente sin necesidad de alias
        $pdf = FacadePdf::loadView('emails/invitacion', [
            'novio' => $request->input('novio'),
            'novia' => $request->input('novia'),
            'lugar' => $request->input('lugar'),
            'fecha' => $request->input('dia') . ' de ' . $request->input('mes'),
            'hora' => $request->input('hora'),
        ]);
        
        // Generar el PDF y almacenar su contenido
        $pdfContent = $pdf->output();
        
        // Envía el correo electrónico con el PDF adjunto
        Mail::to($request->input('email'))
            ->send(new InvitacionMailable($request, $pdfContent));
        
        return redirect()->route('dashboard')->with('message', 'Invitación enviada');
    }  
}
