@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Elementos de Carrusel</div>
                    
				</div>
                
                <div id="confirmModal" class="modalDialog">
                    <div class="contact-form wow fadeInLeft">
                        <a href="#close" title="Close" class="close">X</a>
                        <div align="center">
                            <h4>¿Estas seguro(a) que deseas eliminar este elemento?</h4>
                            
                            <a class="button" id="confirmDeleteCircular">Aceptar</a>
                            <a class="button" href="#close">Cancelar</a>
                            <br/>
                            <br/>
                        </div>
                    </div>
                </div>
            
  				<div class="">
                    <!--<a class="btn btn-success" href="{{ URL::to('advanzer-admin/nueva_noticia') }}">Nuevo</a><br><br>-->
                    
                    <h1 class="title"></h1>
                    
                    <section class="section-container">
                      <ul>
                        @foreach($elements as $e)
                        <li class="list-item">
                            <a class="removeItem" id="{{ $e->circular->id }}"><img width="30px" src="{{ URL::to('img/elementos/remove.png') }}"></a>
                            {{ $e->circular->title }}
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