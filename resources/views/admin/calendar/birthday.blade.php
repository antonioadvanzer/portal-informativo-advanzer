@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Mural de Cumpleaños del Mes</div>
                    
				</div>
                
  				<div class="">
                    
                    <h1 class="title"></h1>
                    
                    <section class="section-container">
                        
                        <div class="panel-body">
                            
                            <form id="newCircular" role="form" method="post" action="{{ URL::to('advanzer-admin/cambiar_mural') }}" enctype="multipart/form-data">
                            
                                <fieldset>
                                    <input id="_token" type="hidden" name="_token" value="{{ csrf_token() }}">
                                    
                                    <div class="form-group">
                                        <label>Imagen</label>
                                         <input id="mural" name="mural" type="file" class="" required>

                                    </div>
                                    <div class="form-group">
                                        <label>Imagen Actual</label>
                                        <img class="img-thumbnail" src="{{ URL::to('img/cumpleaños/'.$calendar->path) }}">
                                    </div>
                                </fieldset><br>
                                <div>
                                    <input class="btn btn-primary" type="submit" value="Guardar">
                                </div>
                            
                            </form>
                        </div>
        
                        
                    </section>
  					
  				</div>
  			</div>
</div>

@endsection

@section('script')
    
<script>
    $("#birthday").addClass("current");
</script>
    
        
@endsection