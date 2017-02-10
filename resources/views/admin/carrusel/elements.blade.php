@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Elementos de Carrusel</div>
                    
				</div>
                
  				<div class="">
                    <!--<a class="btn btn-success" href="{{ URL::to('advanzer-admin/nueva_noticia') }}">Nuevo</a><br><br>-->
                    
                    <h1 class="title"></h1>
                    
                    <section class="section-container">
                      <ul>
                        @foreach($elements as $e)
                        <li class="list-item">
                            <a class="removeItem" id="{{ $e->circular()->first()->id }}"><img width="30px" src="{{ URL::to('img/elementos/remove.png') }}"></a>
                            {{ $e->circular()->first()->getType()->first()->name ." - ". $e->circular()->first()->title }}
                        </li>
                        @endforeach
                      </ul>
                    </section>
  					
  				</div>
  			</div>
</div>

@endsection

@section('script')
    
<script>
    $("#carrusel").addClass("current");
    
    var urlE = "{{ URL::to('advanzer-admin/cambiar_estado_elemento_carrusel') }}"
    
    $(".removeItem").click( function (event){
        
        window.location.href = urlE + '/' + this.id;
        
    });
    
</script>
    
        
@endsection