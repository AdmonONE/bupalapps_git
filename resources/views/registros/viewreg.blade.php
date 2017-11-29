
@extends('layouts.app')



@section('content')

<h2 style="margin-top: 12%; text-align: center;">Registro de Oficios</h2>

<!--@foreach ($registros as $registro)

    <h2></h2><a href="/registros/{{ $registro->id }}">{{ $registro->numero }}</a></h2>

    {{ date('F d, Y', strtotime($registro->created_at)) }}
    
    <p>{{ $registro->fecha }}</p>
    <p>{{ $registro->area }}</p>
    <p>{{ $registro->destinatario }}</p>
    <p>{{ $registro->asunto }}</p>
    <h2><a href="/registros/{{ $registro->id }}/edit">Editar Registro</a></h2><br>
    <form class="" action="/registros/{{ $registro->id }}" method="post">
        <input type="hidden" name="_method" value="delete">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input class="btn btn-primary" type="submit" name="" value="Eliminar">
    </form>

    <hr>

@endforeach-->
<hr>






<table class="table" style="background-color: white;">
    <thead>
        <tr style="font-size: 16px">
            <th><strong>Numero</th>
            <th><strong>Fecha</strong></th>
            <th><strong>Area</strong></th>
            <th><strong>Destinatario</strong></th>
            <th><strong>Asunto</strong></th>
          <!--  <th>Acciones</th>-->
        </tr>
    </thead>
@foreach ($registros as $registro)
<tr>
    <td>
    <a href="salud/{{ $registro->id }}" class="btn btn-primary">{{ $registro->numero }}</a>
    </td>
    
    
    <td>{{ $registro->fecha }}</td>
    <td>{{ $registro->area }}</td>
    <td>{{ $registro->destinatario }}</td>
    <td>{{ $registro->asunto }}</td>
    <!--<td><a href="/home/{{ $registro->id }}/edit" class="btn btn-success">Editar Registro</a>
    <form class="" action="/home/{{ $registro->id }}" method="post">
        <input type="hidden" name="_method" value="delete">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input class="btn btn-primary" type="submit" name="" value="Eliminar">
    </form>
    </td>-->

    
</tr>
@endforeach
</table>

@stop