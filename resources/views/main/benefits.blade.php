@extends('layouts.main')

@section('content')
<!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-thumbs-up"></i>
                        <h1>Beneficios </h1>
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
	            		<p></p>
	            	</div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-12 portfolio-masonry">
		                
                        <div class="portfolio-box web-design">
		                	<div class="portfolio-box-container">
			                	<!--<img src="{{ URL::to('img/politicas/Talento.png') }}" alt="" data-at2x="{{ URL::to('img/politicas/Talento.png') }}">-->
                                <span class="icon-sgmm"></span>
			                	<div class="portfolio-box-text">
			                		<h3><a href="{{ URL::to('beneficios/sgmm') }}">Axa - Seguro de Gastos M&eacute;dicos Mayores</a></h3>
			                		<p></p>
			                	</div>
			                </div>
		                </div>
                        
                        <div class="portfolio-box web-design">
		                	<div class="portfolio-box-container">
			                	<!--<img src="{{ URL::to('img/politicas/Talento.png') }}" alt="" data-at2x="{{ URL::to('img/politicas/Talento.png') }}">-->
                                <span class="icon-cart"></span>
			                	<div class="portfolio-box-text">
			                		<h3><a href="{{ URL::to('beneficios/despensa') }}">One Card - Vales de Despensa</a></h3>
			                		<p></p>
			                	</div>
			                </div>
		                </div>
                        
                        <div class="portfolio-box web-design">
		                	<div class="portfolio-box-container">
			                	<!--<img src="{{ URL::to('img/politicas/Talento.png') }}" alt="" data-at2x="{{ URL::to('img/politicas/Talento.png') }}">-->
                                <span class="icon-education"></span>
			                	<div class="portfolio-box-text">
			                		<h3><a href="{{ URL::to('beneficios/educacion/tecmilenio') }}">Tec Milenio  - Educaci&oacute;n</a></h3>
			                		<p></p>
			                	</div>
			                </div>
		                </div>
                        
                        <div class="portfolio-box web-design">
		                	<div class="portfolio-box-container">
			                	<!--<img src="{{ URL::to('img/politicas/Talento.png') }}" alt="" data-at2x="{{ URL::to('img/politicas/Talento.png') }}">-->
                                <span class="icon-life-insurance"></span>
			                	<div class="portfolio-box-text">
			                		<h3><a href="{{ URL::to('beneficios/seguro_de_vida') }}">TDUMediAccess - Seguro de Vida</a></h3>
			                		<p></p>
			                	</div>
			                </div>
		                </div>
                        
	                </div>
	            </div>
                
                <div class="row">
	            	<div class="col-sm-12 portfolio-masonry">
                        
                        <div class="portfolio-box web-design">
		                	<div class="portfolio-box-container">
			                	<!--<img src="{{ URL::to('img/politicas/Talento.png') }}" alt="" data-at2x="{{ URL::to('img/politicas/Talento.png') }}">-->
                                <span class="icon-education-2"></span>
			                	<div class="portfolio-box-text">
			                		<h3><a href="{{ URL::to('beneficios/educacion/udem') }}">UDEM -Educación</a></h3>
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
            $("#benefits").addClass("active");
        </script>
@endsection