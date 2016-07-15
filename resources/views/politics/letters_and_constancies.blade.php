@extends('layouts.main')

@section('content')
<!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-th-list"></i>
                        <h1>Pol&iacute;ticas </h1>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>

<!-- Services Full Width Text -->
        <div class="services-full-width-container">
        	<div class="container">
            	
        		<div class="row">
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
	            		<p>Cartas y Constancias Laborales</p>
	            	</div>
	            </div>

	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3></h3>
	                    <p>
                            Las cartas y constancias laborales/ingresos que puedas llegar a requerir para algún trámite, deberás solicitarlas a Capital Humano a trav&eacute;s del <a target="_blanck" href="http://intranet.advanzer.com:3000">Portal Personal</a>.
                        </p>
                        <p>
                            Deberás de recibir un correo de confirmación por parte de Capital Humano quien te hará llegar tu carta en un lapso de 72 horas después de que hayas recibido tu confirmación.
	                	</p>
	                </div>
	            </div>

	        </div>
        </div>

        <div class="call-to-action-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-12 call-to-action-text wow fadeInLeftBig animated" style="visibility: visible; animation: fadeInLeftBig; -webkit-animation: fadeInLeftBig;">
	                    <p>
	                    	Dentro de tu Portal Personal podras acceder a un <span class="violet">módulo</span> con un formulario requerido.
	                    </p>
	                    <div class="call-to-action-button">
	                        <a target="_blanck" class="big-link-3" href="http://intranet.advanzer.com:3000/solicitar_carta">Ir Ahora</a>
	                    </div>
	                </div>
	            </div>
	        </div>
        </div>
@endsection

@section('script')
        <script>
            $("#politics").addClass("active");
        </script>
@endsection