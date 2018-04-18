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
                @if(count($errors)>0)
                <div class="alert alert-danger">
                    <strong>Error!</strong>Verifique los datos ingresados.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(Session::has('success'))
                <div class="alert alert-info">
                    {{Session::get('success')}}
                </div>
                @endif

                <div class="panel panel-heading">
                    <h3 class="panel-title">Nueva Actividad</h3>
                </div>
                <div class="panel-body">
                    <div class="table-container">
                        <form method="POST" action="{{ route('registrar.store') }} " role="form">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="Codigo" id="Codigo" class="form-control input-sm" placeholder="Codigo">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="Area" id="Area" class="form-control input-sm" placeholder="Area">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="Programa" id="Programa" class="form-control input-sm" placeholder="Programa">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="Actividad" id="Actividad" class="form-control input-sm" placeholder="Actividad">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="Detalle" id="Detalle" class="form-control input-sm" placeholder="Detalle">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="Evento_Especial" id="Evento_Especial" class="form-control input-sm" placeholder="Evento_Especial">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="SUE" id="SUE" class="form-control input-sm" placeholder="SUE">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="CIE_10" id="CIE_10" class="form-control input-sm" placeholder="CIE_10">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="Profesional_Tratante" id="Profesional_Tratante" class="form-control input-sm" placeholder="Profesional_Tratante">
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <input type="submit" value="Guardar" name="" class="btn btn-success btn-block"><a href="{{route('registrar.index')}}" class="btn btn-info btn-block">Listar Actividades</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ModalExample">
    Launch demo modal
</button>


    </div>



    <div class="row" style="border-style: none; border-color: blue;">


    </div>

    <!-- Modal HTML Markup -->
<div id="ModalExample" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">See more of this awesome website by logging in</h4>
            </div>
            <div class="modal-body">
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
                @if(count($errors)>0)
                <div class="alert alert-danger">
                    <strong>Error!</strong>Verifique los datos ingresados.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(Session::has('success'))
                <div class="alert alert-info">
                    {{Session::get('success')}}
                </div>
                @endif

                <div class="panel panel-heading">
                    <h3 class="panel-title">Nueva Actividad</h3>
                </div>
                <div class="panel-body">
                    <div class="table-container">
                        <form method="POST" action="{{ route('registrar.store') }} " role="form">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="materiales" id="materiales" class="form-control input-sm" placeholder="Materiales">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="estado" id="estado" class="form-control input-sm" placeholder="Estado">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="costo" id="costo" class="form-control input-sm" placeholder="Costo">
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <input type="submit" value="Guardar" name="" class="btn btn-success btn-block"><a href="" class="btn btn-info btn-block">Listar Actividades</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>


    <div class="row" style="border-style: none; border-color: blue;">

    </div>


</div>
            </div>
            <div class="modal-footer">
                :-)
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


</div>
@endsection