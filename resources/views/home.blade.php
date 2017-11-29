@extends('layouts.app')



@section('content')

    <script>
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

                select: function(start){
                    start = moment(start.format());
                    $('#responsive-modal').modal('show');

                },
                events: 'http://localhost/bienestar.palmira.unal.edu.co/eventos'
            });
        });
    </script>

    <!--  wrapper -->
    <div class="wrapper col-md-8" style="margin-top: 12%; margin-left: 10%; width: 160%;">

        <!-- user image section-->
        <div style="color: white; width: 100%;" class="user-section">
            <div class="user-section-inner">
                
                

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            
                                <h3 class="col-md-3" class="" style="width: 25%; margin-right: -4%; color: white;">{{ Auth::user()->name }} <span class="caret"></span></h3>
                                <img src="{{ Auth::user()->avatar }}" alt="">
                            </a>


                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Cerrar Sesión
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>

                                    
                                </li>
                            </ul>



   

            </div>
 



                            

        </div>
        <!--end user image section-->
                    <div class="menu_admin" style="width: 30%; margin-top: 1%; margin-left: -1%;">
            <div class="menu_bar">
                <a href="#" class="bt-menu"><span class="icon-home"></span> Menu</a>
            </div>
            <nav>
                <ul>
                


      
                    <li><a href="regIndex"><span class="icon-calendar"></span> Oficio</a></li>
                    <li><a href="#"><span class="icon-calendar"></span> Auditorio</a></li>
                    <li><a href="#"><span class="glyphicons-group"></span> Evento</a></li>
                    <!--<li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>-->
                </ul>

            </nav>

            
                <!-- end side-menu -->


        </div>


<div style="margin-top: 0%;" id='calendar'></div>


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
