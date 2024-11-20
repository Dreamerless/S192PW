<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorClientes;

class ClienteController extends Controller
{
    /**
     * Nos sirve para la consulta del CRUD.
     */
    public function index()
    {
        $consultaClientes= DB::table('clientes')->get();
        return view('clientes', compact('consultaClientes'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorClientes $request)
    {
        DB::table('Clientes')->insert([
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);

        $usuario=$request->input('txtnombre');

        session()->Flash('exito','Se guardó el usuario '.$usuario);
        return to_route('rutaform');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       

        
        $cliente = DB::table('clientes')->where('id', $id)->first();
        return view('cliente.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('clientes')->where('id', $id)->update([
            "nombre" => $request->input('txtnombre'),
            "apellido" => $request->input('txtapellido'),
            "correo" => $request->input('txtcorreo'),
            "telefono" => $request->input('txttelefono'),
            "updated_at" => Carbon::now(),
        ]);
    
        session()->flash('exito', 'Cliente actualizado correctamente.');
        return to_route('rutaclientes'); // Redirige a la vista de consulta
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('clientes')->where('id', $id)->delete();

        session()->flash('exito', 'Cliente eliminado correctamente.');
        return redirect()->route('clientes.index'); // Redirige a la vista de consulta
    }
}
