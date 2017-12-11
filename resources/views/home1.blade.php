@extends('layouts.app')

{{ Session::get('message') }}

@section('content')

<!--navegacion efectos-->
    
    <link rel="stylesheet" type="text/css" href="{{ url('public/CircleHoverEffects/css/common.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/CircleHoverEffects/css/style5.css') }}" />
    <script type="text/javascript" src="{{ url('public/CircleHoverEffects/js/modernizr.custom.79639.js') }}"></script> 
    <!--navegacion efectos-->

        <!-- user image section-->
        <div style="color: white; width: 100%; vertical-align: middle; margin-top: 12%; text-align: center;" class="user-section">
            <div class="user-section-inner">
                
                

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            
                                <h3 class="col-md-3" class="" style="width: 100%;  color: blue;">
                                    <!--{{ Auth::user()->area }}-->
                                    {{ Auth::user()->name }}
                                    <span class="caret"></span></h3>
                                <!--<img src="{{ Auth::user()->avatar }}" alt="">-->
                            </a>


                            <ul class="dropdown-menu" role="menu" style="margin-left: 50%; margin-top: 3%;">
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

        <section class="main" style="margin-top: 0%; font-size: 10px;">
            <ul class="ch-grid">
            @if(Auth::user()->area == '10')
                
                    <a href="viewreg/create?tipo=20">
                        <li>
                            <div class="ch-item ch-img-1">              
                                <div class="ch-info-wrap">
                                    <div class="ch-info">
                                        <div class="ch-info-front ch-img-1"></div>
                                        <div class="ch-info-back">
                                            <h3>Registrar Oficio P.SAI</h3>
                                            <br>
                                            <p>Acompañamiento Integral</p>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </li>
                    </a>

                    <a href="viewreg/create?tipo=30">
                    <li>
                        <div class="ch-item ch-img-2">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-2"></div>
                                    <div class="ch-info-back">
                                        <h3>Registrar Oficio P.SAFD</h3>
                                        <br>
                                        <p>Actividad Física y Deportes</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    </a>

                    <a href="viewreg/create?tipo=40">
                    <li>
                        <div class="ch-item ch-img-3">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-3"></div>
                                    <div class="ch-info-back">
                                        <h3>Registrar Oficio P.SCUL</h3>
                                        <br>
                                        <p>Cultura</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    </a>

                    <a href="viewreg/create?tipo=50">
                    <li>
                        <div class="ch-item ch-img-4">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-4"></div>
                                    <div class="ch-info-back">
                                        <h3>Registrar Oficio P.SGFS</h3>
                                        <br>
                                        <p>Gestión y Fomento Socioeconómico</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    </a>

                    <a href="viewreg/create?tipo=60">
                    <li>
                        <div class="ch-item ch-img-">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-5"></div>
                                    <div class="ch-info-back">
                                        <h3>Registrar Oficio P.SUS<</h3>
                                        <br>
                                        <p>Salud Estudiantil</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    </a>


                
            

            @endif


            @if(Auth::user()->area == '20')
                
                    <a href="viewreg/create?tipo=20">
                        <li>
                            <div class="ch-item ch-img-1">              
                                <div class="ch-info-wrap">
                                    <div class="ch-info">
                                        <div class="ch-info-front ch-img-1"></div>
                                        <div class="ch-info-back">
                                            <h3>Registrar Oficio P.SAI</h3>
                                            <br>
                                            <p>Acompañamiento Integral</p>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </li>
                    </a>

                    

                
            

            @endif

            @if(Auth::user()->area == '30')
                
                    

                    <a href="viewreg/create?tipo=30">
                    <li>
                        <div class="ch-item ch-img-2">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-2"></div>
                                    <div class="ch-info-back">
                                        <h3>Registrar Oficio P.SAFD</h3>
                                        <br>
                                        <p>Actividad Física y Deportes</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    </a>

                    

                
            

            @endif


            @if(Auth::user()->area == '40')
                
                    <a href="viewreg/create?tipo=40">
                    <li>
                        <div class="ch-item ch-img-3">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-3"></div>
                                    <div class="ch-info-back">
                                        <h3>Registrar Oficio P.SCUL</h3>
                                        <br>
                                        <p>Cultura</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    </a>


                
            

            @endif

            @if(Auth::user()->area == '50')
                
                    <a href="viewreg/create?tipo=50">
                    <li>
                        <div class="ch-item ch-img-4">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-4"></div>
                                    <div class="ch-info-back">
                                        <h3>Registrar Oficio P.SGFS</h3>
                                        <br>
                                        <p>Gestión y Fomento Socioeconómico</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    </a>


                
            

            @endif

            @if(Auth::user()->area == '60')
                
                    <a href="viewreg/create?tipo=60">
                    <li>
                        <div class="ch-item ch-img-5">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-5"></div>
                                    <div class="ch-info-back">
                                        <h3>Registrar Oficio P.SUS</h3>
                                        <br>
                                        <p>Salud Estudiantil</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    </a>


                
            

            @endif

                    <a href="viewreg/create?tipo=10">
                    <li>
                        <div class="ch-item ch-img-6">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-6"></div>
                                    <div class="ch-info-back">
                                        <h3>Registrar Oficio P.DBU</h3>
                                        <br>
                                        <p>Dirección de Bienestar Universitario</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    </a>
                </ul>
            </section>

@stop
