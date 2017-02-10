@extends('layouts.main')

@section('content')
<meta name="_token" content="{!! csrf_token() !!}"/>
<!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="glyphicon "></i>
                        <h1></h1>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        
        
        <!--  -->
        <div class="services-full-width-container">
        	<div class="container">
	            <div class="row">
                    
                    
                    
                    <br>
	                <h1></h1>
                    
                    <iframe src='http://docs.google.com/gview?url={{$file}}&embedded=true' width ='100%' height='600'></iframe>
                    
	            </div>
	        </div>
        </div>
@endsection

@section('script')
        <script>
            
            $(document).ready(function(){
                $("#graphics").addClass("active");
            });
                
        </script>
@endsection