<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\InformeODS;

use Barryvdh\DomPDF\Facade as PDF;

class InformeodsController extends Controller
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
        $informeods = InformeODS::orderBy('codigo','DESC')->paginate(3);
        return view('InformeODS.index',compact('informeods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('InformeODS.create');
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
        $this->validate($request,['Codigo'=>'required', 'ods', 'fechaperiodo', 'id_obligacion', 'actividadesejecutadas', 'porcentaje_avance', 'fechaconstancia']);
        InformeODS::create($request->all());
        return redirect()->route('informeods.index')->with('success','Ingreso Correcto');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ods)
    {
        //
        return view('InformeODS.show',compact('informeods'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($ods)
    {
        //
        $ods = InformeODS::find($ods);
        return view('InformeODS.edit',compact('ods'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ods)
    {
        //
        $this->validate($request,['Codigo'=>'required', 'ods', 'fechaperiodo', 'id_obligacion', 'actividadesejecutadas', 'porcentaje_avance', 'fechaconstancia']);

        InformeODS::find($ods)->update($request->all());
        return redirect()->route('informeods.index')->with('success', 'Actualización Correcta');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ods)
    {
        //
        InformeODS::find($ods)->delete();
        return redirect()->route('informeods.index')->with('success','ods Eliminado Correctamente');
    }


    /**
    * Método REST
    * @return \Illuminate\Http\Response
    */

    public function getInformeODS()
    {
        $informeods = InformeODS::all();
        return response()->json($informeods);
    }


    public function pdf()
    {
        $informeods = InformeODS::all();
        $pdf = PDF::loadView('pdf.informeods', compact('informeods'));

        return $pdf->download('informe.pdf');
    }
}
