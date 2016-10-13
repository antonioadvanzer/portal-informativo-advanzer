@extends('layouts.main')

@section('content')
<!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-birthday-cake"></i>
                        <h1>Cumpleaños del Mes</h1>
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
                
                <div class="">
                    <img class="img-thumbnail" src="{{ URL::to('img/cumpleaños/'.$calendar->path) }}">
                </div>
                
	            <div class="row">
	            	<div class="col-sm-12 portfolio-masonry">
		                
                        <div class="portfolio-box web-design">
		                	
		                </div>
                        
	                </div>
	            </div>
                
	        </div>
        </div>
@endsection

@section('script')
        <script>
            $("#graphics").addClass("active");
        </script>
@endsection