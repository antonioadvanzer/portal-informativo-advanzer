@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title"><h1>Bienvenido(a)</h1></div>

                <div class="panel-options">
                    <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                    <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                </div>
            </div>
            <div class="panel-body">
                Dentro de esta portal podras administrar la sección de noticias, elementos visuales, usuarios y otros aspectos
                
                <br><br>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
        <script>
           $("#main").addClass("current");
        </script>
@endsection