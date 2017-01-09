@extends('layouts.main')

@section('content')
<!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-picture-o"></i>
                        <!--<h1>Material Gr&aacute;fico</h1>-->
                        <h1>Identidad Corporativa</h1>
                        <p>Nuestros folletos, presentaciones y más materiales corporativos</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Políticas -->
        <div class="portfolio-container">
	        <div class="container">
	            
                @if(session('empresa') == "advanzer.com")
                <div class="row">
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
	            		<p>Publicidad:</p>
	            	</div>
	            </div>
                
	            <div class="row">
	            	<div class="col-sm-12 portfolio-masonry">
		                
                        <div class="portfolio-box web-design">
		                	<div class="portfolio-box-container">
			                	<img src="{{ URL::to('img/material_grafico/einstein.png') }}">
			                	<div class="portfolio-box-text">
			                		<h3><a href="{{ URL::to('documentos/Albert Einstein.pdf') }}">Albert Eisten</a></h3>
			                		<p></p>
			                	</div>
			                </div>
		                </div>
                        
                        <div class="portfolio-box web-design">
		                	<div class="portfolio-box-container">
			                	<img src="{{ URL::to('img/material_grafico/jobs.png') }}">
			                	<div class="portfolio-box-text">
			                		<h3><a href="{{ URL::to('documentos/Steve Jobs.pdf') }}">Steve Jobs</a></h3>
			                		<p></p>
			                	</div>
			                </div>
		                </div>
                        
	                </div>
	            </div>
                @endif
                
                <div class="row">
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
	            		<p>Plantillas:</p>
	            	</div>
	            </div>
                
                <div class="row">
	            	<div class="col-sm-12 portfolio-masonry">
		                
                        <div class="portfolio-box web-design">
		                	<div class="portfolio-box-container">
			                	<img src="{{ URL::to('img/material_grafico/plantilla_advanzer.png') }}">
			                	<div class="portfolio-box-text">
			                		<h3><a href="{{ URL::to('documentos/2015 Template Advanzer.pptx') }}">Advanzer</a></h3>
			                		<p></p>
			                	</div>
			                </div>
		                </div>
                        
                        <div class="portfolio-box web-design">
		                	<div class="portfolio-box-container">
			                	<img src="{{ URL::to('img/material_grafico/plantilla_entuizer.png') }}">
			                	<div class="portfolio-box-text">
			                		<h3><a href="{{ URL::to('documentos/2015 Template ENTUIZER.pptx') }}">Entuizer</a></h3>
			                		<p></p>
			                	</div>
			                </div>
		                </div>
                        
	                </div>
	            </div>
                
                <div class="row">
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
	            		<p>Manual de Indentidad:</p>
	            	</div>
	            </div>
                
                <div class="row">
	            	<div class="col-sm-12 portfolio-masonry">
		                
                        <div class="portfolio-box web-design">
		                	<div class="portfolio-box-container">
			                	<img src="{{ URL::to('img/material_grafico/identidad_advanzer.png') }}">
			                	<div class="portfolio-box-text">
			                		<h3><a href="{{ URL::to('documentos/Manual de Identidad Advanzer.pdf') }}">Advanzer</a></h3>
			                		<p></p>
			                	</div>
			                </div>
		                </div>
                        
                        <div class="portfolio-box web-design">
		                	<div class="portfolio-box-container">
			                	<img src="{{ URL::to('img/material_grafico/identidad_entuizer.png') }}">
			                	<div class="portfolio-box-text">
			                		<h3><a href="{{ URL::to('documentos/Manual de Identidad Entuizer.pdf') }}">Entuizer</a></h3>
			                		<p></p>
			                	</div>
			                </div>
		                </div>
                        
	                </div>
	            </div>
                
                <!--<div class="row">
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
	            		<p>Folletos:</p>
	            	</div>
	            </div>-->
                
                <!--<div class="row">
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
	            		<p>Wallpapers:</p>
	            	</div>
	            </div>-->
                
                <!--<div class="row">
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
	            		<p>Videos:</p>
	            	</div>
	            </div>-->
                
	        </div>
        </div>
@endsection

@section('script')
        <script>
            $("#graphics").addClass("active");
        </script>
@endsection