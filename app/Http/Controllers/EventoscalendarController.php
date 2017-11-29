<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Eventoscalendar;

class EventoscalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //(Todos los registros)$data = Eventoscalendar::all();

        $data = Eventoscalendar::get(['title', 'start', 'color']);        

        return Response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('eventos.create');
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
        Eventoscalendar::create($request->all());
        //return view('calendario');
        return redirect('http://192.168.100.31/bienestar.palmira.unal.edu.co/calendario');
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


    public function indexMovil(){

      // we need to show all data from "registro" table
      $eventosmovil = Eventoscalendar::all()->sortByDesc('created_at');
      
      // show data to our view

        

          //$activos = Usuario::all();       



      

     // $activos = Usuario::documento($respuesta->documento);
    // $activos = Usuario::documento($respuesta->get('documentobus'));
      //return view('gym.index',['registros' => $registros, 'users' => $activos]);
      
      return view('movil.index')->with('eventos', $eventosmovil);
    }
}
