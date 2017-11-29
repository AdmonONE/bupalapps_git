@extends('layouts.app')

@section('content')

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@foreach ($eventos as $evento)
<div style="border-color: white; border-style: solid; background-color: white; width: 100px; float: left;">
    {{ $evento->start }}

</div>

    <div style="background-color: red; width: 200px; float: left;">
        <p>{{ $evento->title }}</p>
        <p>{{ $evento->actividades }}</p>
    </div>
    
    <br>
    <br>
    <hr>
@endforeach














@endsection
