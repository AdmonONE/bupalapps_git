@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="" style="text-align: center;">
                    <?php
                        echo "Fecha: " . date("d") . "/" . date("m") . "/" . date("Y") . "<br>" . "Semana " . date("W");

                        echo "<h3>Gestión Diaria </h3>";
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
    </div>

    <div class="row" style="text-align: center; border-style: solid; border-color: black;">

        <section class="content">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-left"><h3>Sistemas</h3></div>
                        <div class="pull-right">
                            <div class="btn-group">
                                <a href="{{ route('registrar.create') }}" class="btn btn-info">Registrar Actividad</a>
                            </div>
                        </div>
                        <div class="table-container">
                            <table id="entidad_sistemas" class="table table-bordred table-striped">
                                <thead>
                                    <th>Registro</th>
                                    <th>Codigo</th>
                                    <th>Area</th>
                                    <th>Programa</th>
                                    <th>Actividad</th>
                                    <th>Detalle</th>
                                    <th>Evento_Especial</th>
                                    <th>SUE</th>
                                    <th>CIE_10</th>
                                    <th>Profesional_Tratante</th>                                    
                                </thead>
                                <tbody>
                                    @if($registrar->count())
                                    @foreach($registrar as $registro)
                                    <tr>
                                        <td>{{$registro->Registro}}</td>
                                        <td>{{$registro->Codigo}}</td>
                                        <td>{{$registro->Area}}</td>
                                        <td>{{$registro->Programa}}</td>
                                        <td>{{$registro->Actividad}}</td>
                                        <td>{{$registro->Detalle}}</td>
                                        <td>{{$registro->Evento_Especial}}</td>
                                        <td>{{$registro->SUE}}</td>
                                        <td>{{$registro->CIE_10}}</td>
                                        <td>{{$registro->Profesional_Tratante}}</td>
                                        <td><a class="btn btn-primary btn-xs" href="{{action('RegistrarController@edit', $registro->Registro)}}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                        <td>
                                            <form action="{{action('RegistrarController@destroy', $registro->Registro)}}" method="POST">
                                                {{csrf_field()}}
                                                <input type="hidden" name="_method" value="DELETE">

                                                <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>

                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="8">Sin registros</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        {{$registrar->links()}}
                    </div>
                </div>
            </div>
        </section>

    </div>


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