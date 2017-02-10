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
                
                <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3><i>Enlaces</i></h3><br>
	                    @if($links = $circular->getLinks()->get())
                            @foreach($links as $l)
                                <h4>{{ $l->description }}</h4>
                                <p><a href="{{ $l->url}}" target="_blank">{{ $l->url}}</a></p>
                                <br>
                            @endforeach
                        @endif
	                </div>
	            </div>

	            <div class="row">
	            	<div id="" class="">
	            		
                        <div class="media">
                            
                            @foreach($images as $image)
                            <a class="thumbnail">
                                <img src="{{ URL::to($image->path) }}">
                            </a>
                            @endforeach
                            
                            <div class="thumb-viewer">
                                <a class="prev"></a>
                                <a class="next"></a>
                                <a class="exit">x</a>
                                <div class="viewer-body">
                                </div>
                            </div>
                        </div>
                        
	            	</div>
	            </div><br><br><br>
                
	        </div>
        </div>
@endsection

@section('script')
        <script>
            $("#publications").addClass("active");
            
            $(function() {
               var thumbnail =  $('.thumbnail');
               var container = $('.viewer-body');
               var exit = $('.exit');
               var next = $('.next');
               var prev = $('.prev');

               thumbnail.click(function(){
                var content = $(this).html();
                thumbnail.removeClass('open');
                $(this).addClass('open');
                $('body').addClass('view-open');
                container.html(content);
              });

              next.click(function() {
                var total = $('.media .thumbnail').length;
               if ($('.open').index() === total- 1){
                   $('.thumbnail:last-child').addClass('open');
                }
              else{$('.open').removeClass('open').next().toggleClass('open');}
                 var content = $('.open').html();
                 container.html(content);
              });

              prev.click(function() {
                if ($('.open').index() == 0){$('.thumbnail:first-child').addClass('open');}
                else{ $('.open').removeClass('open').prev().toggleClass('open');}
                 var content = $('.open').html();
                 container.html(content);
              });

               exit.click(function() {$('body').removeClass('view-open'); });  

            });
        </script>
@endsection