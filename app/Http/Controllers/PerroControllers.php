<?php

namespace App\Http\Controllers;
use App\Models\Perro;
use Illuminate\Http\Request;

class PerroControllers extends Controller
{
    public function index()
    {
        {
            $perros = Perro::paginate(10); // Esto paginará los resultados, mostrando 10 por página
            return view('perros.index', compact('perros'));
        }
    }
    public function create()
    {
    return view('perros.create');  // Esto cargará la vista create.blade.php en la carpeta perros
    }
    public function store(Request $request)
    {
    // Validar los datos del formulario
    $request->validate([
        'nombre' => 'required|string|max:255',
        'raza' => 'required|string|max:255',
        'edad' => 'required|integer|min:0',
    ]);

    // Crear un nuevo perro en la base de datos
    Perro::create([
        'nombre' => $request->nombre,
        'raza' => $request->raza,
        'edad' => $request->edad,
    ]);

    // Redirigir a la lista de perros con un mensaje de éxito
    return redirect()->route('perros.index')->with('success', 'Perro agregado con éxito');
    }
    public function edit($id)
    {
    $perro = Perro::findOrFail($id);
    return view('perros.edit', compact('perro')); // Vista 'perros/edit.blade.php'
    }
    public function update(Request $request, $id)
    {
    // Validar los datos recibidos
    $request->validate([
        'nombre' => 'required|string|max:255',
        'raza' => 'required|string|max:255',
        'edad' => 'required|integer|min:0',
    ]);

    // Encontrar el perro y actualizar sus datos
    $perro = Perro::findOrFail($id);
    $perro->update([
        'nombre' => $request->nombre,
        'raza' => $request->raza,
        'edad' => $request->edad,
    ]);

    // Redirigir de vuelta al listado con un mensaje de éxito
    return redirect()->route('perros.index')->with('success', 'Perro actualizado con éxito');
    }
    public function show($id)
    {
    $perro = Perro::findOrFail($id);
    return view('perros.show', compact('perro'));
    }   
    public function destroy($id)
    {
    $perro = Perro::findOrFail($id);
    $perro->delete();

    // Redirigir al listado de perros con un mensaje de éxito
    return redirect()->route('perros.index')->with('success', 'Perro eliminado correctamente');
    }
}

