@extends('layouts.main')

@section('content')
<!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-th-list"></i>
                        <h1>Noticias </h1>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>

<!-- Services Full Width Text -->
        <div class="services-full-width-container">
        	<div class="container">
                
            	<div class=row align="center">
                    <a onclick="window.history.back();">
                        <img width="2%" style="min-width: 50px" src="{{ URL::to('img/elementos/back.png') }}" alt="" >
                    </a>
                </div>
                
        		<div class="row">
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
	            		<p>{{ $circular->title }}</p>
	            	</div>
	            </div>

	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3><i>{{ $circular->summary }}</i></h3><br>
	                    <p>
	                    	{{ $circular->content }}
	                	</p>
	                </div>
	            </div>

	            
	        </div>
        </div>
@endsection

@section('script')
        <script>
            $("#publications").addClass("active");
        </script>
@endsection