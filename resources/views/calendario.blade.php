@extends('layouts.app')

@section('content')







                <div class="collapse navbar-collapse" id="app-navbar-collapse">


                    


                    <!-- Left Side Of Navbar-->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>


                    <!--Logout-->
                    <!-- Right Side Of Navbar
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                    -->
                </div>


    <!--  wrapper -->
    <div class="wrapper col-md-8" style="margin-left: 10%; width: 150%;">

    <br>
    








    <div style="">
   


        </div>

<!--<div id="comslider_in_point_1314348"></div><script type="text/javascript">var oCOMScript1314348=document.createElement('script');oCOMScript1314348.src="http://commondatastorage.googleapis.com/comslider/target/users/1495353673x7c658c33d4d5cc619d7c64aa11804ab8/comslider.js?timestamp=1495354701";oCOMScript1314348.type='text/javascript';document.getElementsByTagName("head").item(0).appendChild(oCOMScript1314348);</script>-->

<!--<script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			//defaultDate: '2017-04-12',
			navLinks: true, // can click day/week names to navigate views
			editable: true,
			selectable: true,
            selectHelper: true,
            eventColor: '#378006',

            select: function(){
                window.location = "http://192.168.100.31/bienestar.palmira.unal.edu.co/eventos/create";
            },

        

            /*eventClick: function(calEvent, jsEvent, view) {
    alert('Event: ' + calEvent.title);
    // change the border color just for fun
    $(this).css('border-color', 'red');
} ,

eventClick: function(event, jsEvent, view) {
            console.log(event.id);
            window.location = "http://localhost/bienestar.palmira.unal.edu.co/eventos/create";
            },*/
			events: 'http://192.168.100.31/bienestar.palmira.unal.edu.co/eventos'
		});
		
	});

</script>-->




<br>
<br>
<br>
<br>
<br>



<!--<div id='calendar'>
    
</div>

<iframe style="" src="https://calendar.google.com/calendar/embed?src=sibu_pal%40unal.edu.co&ctz=America/Bogota" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>



<iframe src="https://calendar.google.com/calendar/embed?src=unal.edu.co_evcbno982j3gdq719ddu15ee70%40group.calendar.google.com&ctz=America/Bogota" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>-->

<iframe src="https://calendar.google.com/calendar/embed?src=unal.edu.co_fi5hub509edfs1u2nk3sdvf7ro%40group.calendar.google.com&ctz=America%2FBogota" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
	</div>






</div>



<!--
<div id="overlay" style="visibility: hidden; width: 20%; position: relative;">
 <div> 
    <object type="text/html" data="http://mailchi.mp/95489a946800/la-un-sede-palmira-presenta-primera-escuela-agrobiolgica?e=2e2b625246" width="800px" height="600px" style="overflow:auto;border:5px ridge blue">
    </object>
 </div>
</div>



<a href='#' onclick='overlay()'>Click here to show the overlay</a>
-->

<!--        <a href="javascript:void(0)" id="loadPage">Click To Load Web Page</a><br />
        <div id="pagecontainer" />-->




    </div>
    <!-- end wrapper -->

@endsection