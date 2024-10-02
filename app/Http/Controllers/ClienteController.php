<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    // Mostrar una lista de clientes
    public function index(Request $request)
    {
        // Si hay una búsqueda, filtramos los resultados
        $search = $request->input('search');

        $clientes = Cliente::where('nombre', 'LIKE', "%{$search}%")
                    ->orWhere('correo', 'LIKE', "%{$search}%")
                    ->orWhere('telefono', 'LIKE', "%{$search}%")
                    ->paginate(10); // Paginamos los resultados

        return view('clientes.index', compact('clientes'));
    }

    // Mostrar el formulario para crear un nuevo cliente
    public function create()
    {
        return view('clientes.create');
    }

    // Guardar un nuevo cliente
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|unique:clientes',
            'telefono' => 'nullable|string|max:15',
            'direccion' => 'nullable|string|max:255',
        ]);

        // Crear un nuevo cliente
        Cliente::create($validatedData);

        return redirect()->route('clientes.index')->with('success', 'Cliente creado exitosamente.');
    }

    // Mostrar el formulario para editar un cliente existente
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    // Actualizar un cliente existente
    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|unique:clientes,correo,'.$id.',id_cliente', // Validación para permitir el mismo correo del cliente
            'telefono' => 'nullable|string|max:15',
            'direccion' => 'nullable|string|max:255',
        ]);

        // Actualizar los datos del cliente
        $cliente->update($validatedData);

        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado exitosamente.');
    }

    // Eliminar cliente lógicamente (cambiar estado a inactivo)
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        
        // Cambiar estado a inactivo
        $cliente->update(['estado' => 0]);

        return redirect()->route('clientes.index')->with('success', 'Cliente inactivado.');
    }

    // Eliminar cliente físicamente
    public function forceDelete($id)
    {
        $cliente = Cliente::findOrFail($id);
        
        // Borrar cliente físicamente
        $cliente->delete();

        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado permanentemente.');
    }

    // Activar un cliente inactivo
    public function activate($id)
    {
        $cliente = Cliente::findOrFail($id);
        
        // Cambiar estado a activo
        $cliente->update(['estado' => 1]);

        return redirect()->route('clientes.index')->with('success', 'Cliente activado.');
    }
}
