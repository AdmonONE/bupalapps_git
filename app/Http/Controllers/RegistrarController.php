<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Registrar;

class RegistrarController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Cargar actividades
        $registrar = Registrar::orderBy('Registro','DESC')->paginate(3);
        return view('Registrar.index',compact('registrar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Registrar.create');
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
        $this->validate($request,['Registro', 'Codigo'=>'required', 'Area', 'Programa', 'Actividad', 'Detalle', 'Evento_Especial', 'SUE', 'CIE_10', 'Profesional_Tratante']);
        Registrar::create($request->all());
        return redirect()->route('registrar.index')->with('success','Ingreso Correcto');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Registro)
    {
        //
        return view('Registrar.show',compact('registrar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Registro)
    {
        //
        $registro = Registrar::find($Registro);
        return view('Registrar.edit',compact('registro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Registro)
    {
        //
        $this->validate($request,['Codigo'=>'required', 'Area', 'Programa', 'Actividad', 'Detalle', 'Evento_Especial', 'SUE', 'CIE_10', 'Profesional_Tratante']);

        Registrar::find($Registro)->update($request->all());
        return redirect()->route('registrar.index')->with('success', 'Actualización Correcta');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Registro)
    {
        //
        Registrar::find($Registro)->delete();
        return redirect()->route('registrar.index')->with('success','Registro Eliminado Correctamente');
    }


    /**
    * Método REST
    * @return \Illuminate\Http\Response
    */

    public function getRegistrar()
    {
        $registrar = Registrar::all();
        return response()->json($registrar);
    }
}
