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
        
        <!-- Políticas -->
        <div class="portfolio-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
	            		<p>Selecciona la pol&iacute;tica que quieres ver:</p>
	            	</div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-12 portfolio-masonry">
		                
                        <div class="portfolio-box web-design">
		                	<div class="portfolio-box-container">
			                	<!--<img src="{{ URL::to('img/politicas/Talento.png') }}" alt="" data-at2x="{{ URL::to('img/politicas/Talento.png') }}">-->
                                <span class="icon-attracting-talent"></span>
			                	<div class="portfolio-box-text">
			                		<h3><a href="{{ URL::to('politicas/atraccion_de_talento') }}">Atracci&oacute;n de Talento</a></h3>
			                		<p></p>
			                	</div>
			                </div>
		                </div>
                        @if(session('empresa') == "advanzer.com")
                        <div class="portfolio-box web-design">
		                	<div class="portfolio-box-container">
			                	<!--<img src="{{ URL::to('img/politicas/grafico-signo-dolar-tantoporciento.jpg') }}" alt="" data-at2x="{{ URL::to('img/politicas/grafico-signo-dolar-tantoporciento.jpg') }}">-->
                                <span class="icon-annual-bonus"></span>
			                	<div class="portfolio-box-text">
			                		<h3><a href="{{ URL::to('politicas/bono_anual_consultoria') }}">Bono Anual Consultor&iacute;a</a></h3>
			                		<p></p>
			                	</div>
			                </div>
		                </div>
                        @endif
                        
                        <div class="portfolio-box web-design">
		                	<div class="portfolio-box-container">
			                	<!--<img src="{{ URL::to('img/politicas/Carpeta.gif') }}" alt="" data-at2x="{{ URL::to('img/politicas/Carpeta.gif') }}">-->
                                <span class="icon-letters-and-constancies"></span>
			                	<div class="portfolio-box-text">
                                    <h3><a href="{{ URL::to('politicas/cartas_y_constancias_laborales') }}">Cartas y Constancias Laborales</a></h3>
			                		<p></p>
			                	</div>
			                </div>
		                </div>
                        
                        <div class="portfolio-box web-design">
		                	<div class="portfolio-box-container">
			                	<!--<img src="{{ URL::to('img/politicas/certificaciones1.jpg') }}" alt="" data-at2x="{{ URL::to('img/politicas/certificaciones1.jpg') }}">-->
                                <span class="icon-certifications-and-courses"></span>
			                	<div class="portfolio-box-text">
                                    <h3><a href="{{ URL::to('politicas/certificaciones_y_cursos') }}">Certificaciones y Cursos</a></h3>
			                		<p></p>
			                	</div>
			                </div>
		                </div>
                        
                        <div class="portfolio-box web-design">
		                	<div class="portfolio-box-container">
			                	<!--<img src="{{ URL::to('img/politicas/Reglas-para-lucir-un-traje-perfecto.png') }}" alt="" data-at2x="{{ URL::to('img/politicas/Reglas-para-lucir-un-traje-perfecto.png') }}">-->
                                <span class="icon-dress-code"></span>
			                	<div class="portfolio-box-text">
                                    <h3><a href="{{ URL::to('politicas/codigo_de_vestimenta') }}">C&oacute;digo de vestimenta</a></h3>
			                		<p></p>
			                	</div>
			                </div>
		                </div>
                        
                        <div class="portfolio-box web-design">
		                	<div class="portfolio-box-container">
			                	<!--<img src="{{ URL::to('img/politicas/clima_laboral.jpg') }}" alt="" data-at2x="{{ URL::to('img/politicas/clima_laboral.jpg') }}">-->
                                <span class="icon-internal-comunication"></span>
			                	<div class="portfolio-box-text">
                                    <h3><a href="{{ URL::to('politicas/comunicacion_interna') }}">Comunicaci&oacute;n Interna</a></h3>
			                		<p></p>
			                	</div>
			                </div>
		                </div>
                        
                        <div class="portfolio-box web-design">
		                	<div class="portfolio-box-container">
			                	<!--<img src="{{ URL::to('img/politicas/f620x0-186428_186446_28.jpg') }}" alt="" data-at2x="{{ URL::to('img/politicas/f620x0-186428_186446_28.jpg') }}">-->
                                <span class="icon-free-days"></span>
			                	<div class="portfolio-box-text">
                                    <h3><a href="{{ URL::to('politicas/dias_festivos') }}">D&iacute;as Festivos</a></h3>
			                		<p></p>
			                	</div>
			                </div>
		                </div>
                        
                        <div class="portfolio-box web-design">
		                	<div class="portfolio-box-container">
			                	<!--<img src="{{ URL::to('img/politicas/tiempo-laboral-podria-traducirse-productividad_ELFIMA20140822_0006_1.jpg') }}" alt="" data-at2x="{{ URL::to('img/politicas/tiempo-laboral-podria-traducirse-productividad_ELFIMA20140822_0006_1.jpg') }}">-->
                                <span class="icon-schedules"></span>
			                	<div class="portfolio-box-text">
                                    <h3><a href="{{ URL::to('politicas/horarios') }}">Horarios</a></h3>
			                		<p></p>
			                	</div>
			                </div>
		                </div>
                        
                        <div class="portfolio-box web-design">
		                	<div class="portfolio-box-container">
			                	<!--<img src="{{ URL::to('img/politicas/89340.jpg') }}" alt="" data-at2x="{{ URL::to('img/politicas/89340.jpg') }}">-->
                                <span class="icon-absences"></span>
			                	<div class="portfolio-box-text">
                                    <h3><a href="{{ URL::to('politicas/ausencias_y_permisos') }}">Ausencias y Permisos</a></h3>
			                		<p></p>
			                	</div>
			                </div>
		                </div>
                        
                        <div class="portfolio-box web-design">
		                	<div class="portfolio-box-container">
			                	<!--<img src="{{ URL::to('img/politicas/vacaciones_contrato_formacion.jpg.pagespeed.ce.-jD08Ou2eR.jpg') }}" alt="" data-at2x="{{ URL::to('img/politicas/vacaciones_contrato_formacion.jpg.pagespeed.ce.-jD08Ou2eR.jpg') }}">-->
                                <span class="icon-vacations"></span>
			                	<div class="portfolio-box-text">
                                    <h3><a href="{{ URL::to('politicas/vacaciones') }}">Vacaciones</a></h3>
			                		<p></p>
			                	</div>
			                </div>
		                </div>
                        
                        <div class="portfolio-box web-design">
		                	<div class="portfolio-box-container">
			                	<!--<img src="{{ URL::to('img/politicas/distribuir-viaticos-m7rp14pf25vaijdfqpko6u6mehl369gu56n1hn68d4.jpg') }}" alt="" data-at2x="{{ URL::to('img/politicas/distribuir-viaticos-m7rp14pf25vaijdfqpko6u6mehl369gu56n1hn68d4.jpg') }}">-->
                                <span class="icon-travel"></span>
			                	<div class="portfolio-box-text">
                                    <h3><a href="{{ URL::to('politicas/viaticos_y_gastos_de_viaje') }}">Vi&aacute;ticos y Gastos de Viaje</a></h3>
			                		<p></p>
			                	</div>
			                </div>
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