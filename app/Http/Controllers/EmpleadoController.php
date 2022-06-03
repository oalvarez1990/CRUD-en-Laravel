<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Consulta BD
        $datos['empleados']=Empleado::paginate(5);
        return view('empleado.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $datosEmpleado = request()->all();
        $datosEmpleado = request()->except('_token');
        if($request->hasFile('Foto')){
            $datosEmpleado['Foto'] =$request->file('Foto')->store('uploads','public');
        }
        Empleado::insert($datosEmpleado);

        return response()->json($datosEmpleado); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Editar los empleados
        $empleado=Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //No recibe el token y metodo
        $datosEmpleado = request()->except(['_token','_method']);
        // $datosEmpleado = request()->except('_token');
        Empleado::where('id','=',$id)->update($datosEmpleado);

        // retorna informacion actualziada Buscar la informacion pero actualizados
        $empleado=Empleado::findOrFail($id);
        return view('empleado.edit',compact('empleado'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Se crea un destroy para eliminar dato especifico
        Empleado::destroy($id);
        return redirect('empleado');

    }
}

