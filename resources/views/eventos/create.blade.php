@extends('layouts.app')

@section('content')


<br>
<br>
<br>
<br>
<br>


        {{ Form::open(['route' => 'eventos.store', 'method' => 'post', 'role' => 'form']) }}
        <div id="" class="" tabindex="-1">
            <div class="modal-dialog">

                <div class="content" style="background-color: white; opacity: 0.7;">
                        
                    
                    <div class="modal-header">
                        <h4>Registrar Nuevo Evento</h4>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            {{ Form::label('date_start', 'Evento') }}
                            {{ Form::text('title', old('date_start'), ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('time_start', 'Descripción') }}
                            {{ Form::text('actividades', old('time_start'), ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('date_end', 'Fecha') }}
                            {{ Form::text('start', old('date_end'), ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('color', 'Color') }}
                            {{ Form::text('date_start', old('date_start'), ['class' => 'form-control']) }}
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dissmiss="">Cancelar</button>
                        {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
                    </div>
                </div>
            </div>
            

        </div>
        {{ Form::close() }}

@endsection