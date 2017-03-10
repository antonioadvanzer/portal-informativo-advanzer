@extends('layouts.main')

@section('content')
<!-- Slider -->
        <div class="slider-container">
            <div class="container">
                
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 slider">
                        <div class="flexslider">
                            <ul class="slides">
                                <!--<li data-thumb="{{ URL::to('img/slider/1.jpg') }}">
                                    <img src="{{ URL::to('img/slider/1.jpg') }}">
                                    <div class="flex-caption">
                                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                    	Lorem ipsum dolor sit amet, consectetur.
                                    </div>
                                </li>
                                <li data-thumb="{{ URL::to('img/slider/2.jpg') }}">
                                    <img src="{{ URL::to('img/slider/2.jpg') }}">
                                    <div class="flex-caption">
                                    	Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                                    	lobortis nisl ut aliquip ex ea commodo consequat.
                                    </div>
                                </li>
                                <li data-thumb="{{ URL::to('img/slider/3.jpg') }}">
                                    <img src="{{ URL::to('img/slider/3.jpg') }}">
                                    <div class="flex-caption">
                                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                    	Lorem ipsum dolor sit amet, consectetur.
                                    </div>
                                </li>-->
                                
                                @foreach($news as $new)
                                <!--<li data-thumb="{{ URL::to($new->image->path) }}">-->
                                <li data-thumb="">
                                        <img src="{{ URL::to($new->image->path) }}">
                                    <div class="flex-caption">
                                    	{{ $new->circular->summary }}
                                        <br>
                                        
                                        @if($new->circular->type==1)
                                        <a class="btn btn-success" href="{{ URL::to('noticias/ver_noticia/'.$new->image->id_circular) }}" aria-label="Settings">
                                          <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            Ir a la Noticia
                                        </a>
                                        @elseif($new->circular->type==2)
                                        <a class="btn btn-success" href="{{ URL::to('historial_de_cumpleanos/ver_album/'.$new->image->id_circular) }}" aria-label="Settings">
                                          <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            Ir al Cumpleaños
                                        </a>
                                        @elseif($new->circular->type==3)
                                        <a class="btn btn-success" href="{{ URL::to('historial_de_eventos/ver_album/'.$new->image->id_circular) }}" aria-label="Settings">
                                          <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                            Ir al Evento
                                        </a>
                                        @endif
                                        
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="services-half-width-container">
        	<div class="container" align="center">
                
                <div style="width: 962px" align="center">
                    <div class="row" align="center">
	                <div class="col-sm-6 services-full-width-text wow fadeInLeft" align="center">
	                    <h3>Advanzer</h3>
	                    
                        <p>
	                    	Av. El Roble 660-2, Edificio Vitro, Nivel 6<br>
                            Col. Valle del Campestre<br>
                            San Pedro Garza García, Nuevo León 66265<br>
                            México
	                    </p>
                        
	                </div>
	                <div class="col-sm-6 services-full-width-text wow fadeInUp" align="center">
	                    <h3>Entuizer</h3>
	                    
                        <p>Ave. Miguel de Cervantes Saavedra <br>
                            #301 Torre Norte, Piso 12<br>
                            Miguel Hidalgo, C.P. 11560
                        </p>
                        
	                </div>
	            </div>
                </div>
            </div>
        </div>
@endsection

@section('script')
<script>
    $("#home").addClass("active");
</script>
@endsection