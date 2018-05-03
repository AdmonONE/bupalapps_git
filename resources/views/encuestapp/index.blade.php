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

                <iframe width="475" height="720" seamless frameborder="0" scrolling="no" src="https://docs.google.com/a/unal.edu.co/spreadsheets/d/e/2PACX-1vTJogZ31Nqo8MGEwXPWXcxpiKO07nGlmikt0dAxaId7qORgjF_NwD-m78eFcMpOLmaAlAxbYXjfmneE/pubchart?oid=1168597496&amp;format=interactive"></iframe>

                <iframe width="475" height="225.5" seamless frameborder="0" scrolling="no" src="https://docs.google.com/a/unal.edu.co/spreadsheets/d/e/2PACX-1vTJogZ31Nqo8MGEwXPWXcxpiKO07nGlmikt0dAxaId7qORgjF_NwD-m78eFcMpOLmaAlAxbYXjfmneE/pubchart?oid=853866276&amp;format=interactive"></iframe>
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
                                

                                
                                </tbody>
                            </table>
                        </div>
                        
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