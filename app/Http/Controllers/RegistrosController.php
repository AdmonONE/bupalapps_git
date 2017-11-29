<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Auth;

use App\Registros;

use App\Insertar;

class RegistrosController extends Controller
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
        
        $area = Auth::user()->area;
        if ($area == 10) {
            $registros = DB::table('regareas')->get();

        } else {
        //$registros = DB::select('SELECT idregistro,numero,fecha,area,destinatario,asunto FROM registros, areas where registros.area_id = areas.idarea');
            $registros = DB::table('regareas')->where('area', 'Cultura')->orwhere('area', 'Salud Estudiantil')->get();
            
        }
        return view('registros/viewreg', ['registros' => $registros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registros/create');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                'numero' => 'required',
                'fecha'=>'required',
                'area'=>'required',
                'destinatario'=>'required',
                'asunto'=>'required',
        ]);

        $registro = new Insertar;
        $registro->numero = $request->numero;
        $registro->fecha = $request->fecha;
        $registro->area_id = $request->area;
        $registro->destinatario = $request->destinatario;
        $registro->asunto = $request->asunto;
        $registro->usuario = $request->usuario;
        $registro->save();

        return redirect('viewreg')->with('message', 'Registro Agregado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
