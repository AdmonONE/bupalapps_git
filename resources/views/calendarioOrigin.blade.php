@extends('layouts.app')

@section('content')
       
@endsection


@section('content2')

<!--<div class="row">
	<div clss="col-lg-12">
		<ol class="breadcrumb">
			<li class="active">Navegación: Home</li>
			<li><a href="{{ url('events') }}">Mostrar Eventos</a></li>
			<li><a href="{{ url('events/create') }}">Agregar nuevo evento</a></li>
		</ol>
	</div>
</div>-->

<div class="row">


		<div class="principal" style="">
		    
			
		</div>
	<div class="col-lg-12">
		<!--<div id='calendar' style="margin-top: 20px;"></div>-->

		<!--<div class="principal" style="width: 0px; height: 0px;">
		    
			<iframe src="http://localhost:8080/reservapp/" style="width: 90%; height: 1000px;" name="formularios"></iframe>
		</div>-->
		<script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			defaultDate: '2017-04-12',
			navLinks: true, // can click day/week names to navigate views
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'All Day Event',
					start: '2017-04-01'
				},
				{
					title: 'Long Event',
					start: '2017-04-07',
					end: '2017-04-10'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2017-04-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2017-04-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2017-04-11',
					end: '2017-04-13'
				},
				{
					title: 'Meeting',
					start: '2017-04-12T10:30:00',
					end: '2017-04-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2017-04-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2017-04-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2017-04-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2017-04-12T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2017-04-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2017-04-28'
				}
			]
		});
		
	});

</script>

<div id='calendar'></div>


	</div>



</div>


<!--<iframe src="http://192.168.100.50:8080/reservapp/" style="width: 90%; height: 800px; position: relative;" name="formularios"></iframe>-->

<!--<iframe src="http://localhost:8080/reservapp/" style="width: 90%; height: 800px; position: relative;" name="formularios"></iframe>-->



@endsection



@section('slideshow')


@endsection
