@extends('layouts.app')

@section('content')


<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="" style="text-align: center;">
                    <?php
                        echo "Fecha: " . date("d") . "/" . date("m") . "/" . date("Y") . "<br>" . "Semana " . date("W");

                        echo "<h3>InformeODS </h3>";
                    ?>
                    
                </div>

                <div class="">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                </div>
                
            </div>

        </div>
    </div>-->

    <div class="row" style="text-align: center; border-style: solid; border-color: black; margin-top: 30%;">

        <section class="content">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-left"><h3></h3></div>
                        <div class="pull-right">
                            <div class="btn-group">
                                <a href="{{ route('informeods.create') }}" class="btn btn-info">Registrar Actividad</a>
                            </div>
                        </div>
                        <div class="table-container">
                            <table id="entidad_informeods" class="table table-bordred table-striped">
                                <thead>
                                    
                                    <th>Codigo</th>
                                    <th>ods</th>
                                    <th>fechaperiodo</th>
                                    <th>id_obligacion</th>
                                    <th>actividadesejecutadas</th>
                                    <th>porcentaje_avance</th>
                                    <th>fecha_constancia</th>
                                                                        
                                </thead>
                                <tbody>
                                    @if($informeods->count())
                                    @foreach($informeods as $informe)
                                    <tr>
                                        
                                        <td>{{$informe->Codigo}}</td>
                                        <td>{{$informe->ods}}</td>
                                        <td>{{$informe->fechaperiodo}}</td>
                                        <td>{{$informe->id_obligacion}}</td>
                                        <td>{{$informe->actividadesejecutadas}}</td>
                                        <td>{{$informe->porcentajeavance}}</td>
                                        <td>{{$informe->fechaconstancia}}</td>
                                        
                                        <td><a class="btn btn-primary btn-xs" href="{{action('InformeodsController@edit', $informe->codigo)}}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                        <td>
                                            <form action="{{action('InformeodsController@destroy', $informe->Registro)}}" method="POST">
                                                {{csrf_field()}}
                                                <input type="hidden" name="_method" value="DELETE">

                                                <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>

                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="8">Sin informes</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        {{$informeods->links()}}
                    </div>
                </div>
            </div>
        </section>

    </div>

<a href="{{ route('informe.pdf') }}" class="btn btn-sm btn-primary">
            Descargar productos en PDF
        </a>


    <div class="row" style="border-style: none; border-color: blue;">

        <div>
          <a class="buy-with-crypto"
             href="https://commerce.coinbase.com/checkout/5ce185e5-4dff-4886-9384-ed3a079e00d7">
            <span>Buy with Crypto</span>
          </a>
          <script src="https://commerce.coinbase.com/v1/checkout.js">
          </script>
        </div>

    </div>


</div>
@endsection