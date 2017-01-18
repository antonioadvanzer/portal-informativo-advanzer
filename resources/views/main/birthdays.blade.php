@extends('layouts.main')

@section('content')
<!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-calendar"></i>
                        <h1>Historial de Cumpleaños</h1>
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
	            		<p>&Aacute;lbumes:</p>
	            	</div>
	            </div>
	            <div class="row">
		                
                        <!--<div class="container">
                            
                            <div class="circulares">
                                
                                @foreach($birthdays as $b)
                                <?php $img = URL::to($b->getImages->first()['path']) ?>
                                
                                <a class="circular" href="{{ URL::to('noticias/ver_noticia/'.$b->id) }}">
                                    <span class="circular-header" style="background-image: url('{{ $img }}');">
                                        <span class="circular-title">
                                            <h3>{{ $b->title }}</h3>
                                        </span>
                                    </span>
                                    <span class="circular-summary">
                                        {{ $b->summary }}
                                    </span>
                                    <span class="circular-meta">
                                        Publicado: {{ $b->created_at }}
                                    </span>
                                </a>
                                    
                                @endforeach
                                
                            </div>
                            
                        </div>-->
                        <div class="container">
                            <div class="birthday_history" align="center">
                                <ul class="box">
                                  @foreach($birthdays as $b)
                                    <li>
                                        <img src="{{URL::to($b->getImages->first()['path'])}}" />
                                        <br><br>
                                        <p>{{ (strlen($t = $b->title) > 27) ? substr($t,0,27)."..." : $t}}</p>
                                        
                                        <small><a href="{{ URL::to('historial_de_cumpleaños/ver_album/'.$b->id) }}">Ver mas</a></small>
                                    </li>
                                    @endforeach
                                </ul>
                              </div>
                            </div>
                    
                        <div id="pag">
		                {{ $birthdays->links() }}
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