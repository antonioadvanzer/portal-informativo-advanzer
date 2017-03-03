@extends('layouts.admin')

@section('content')
<meta name="_token" content="{!! csrf_token() !!}"/>
<div class="row">
    <div class="col-md-8">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Editar Album</div>
                <div class="panel-options">
                  <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                  <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                </div>
            </div>
            <div class="panel-body">
                <div id="nus" class="alert alert-success hide"><span>¡Guardado con Exito!</span></div>
                <div id="nuf" class="alert alert-danger hide"><span>¡Falla al Guardar!</span></div>
                <form id="newCircular" role="form" method="post" action="{{ URL::to('advanzer-admin/actualizar_album') }}" enctype="multipart/form-data">
                    <fieldset>
                        <input id="_token" type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input id="id" type="hidden" name="id" value="{{ $album->id }}">
                        
                        <div class="form-group">
                            <label>T&iacute;tulo</label>
                            <input id="title" name="title" class="form-control" placeholder="" type="text" value="{{ $album->title }}" required>
                        </div>
                        <div class="form-group">
                            <label>Sumario</label>
                            <input id="summary" name="summary" class="form-control" placeholder="" type="text" value="{{ $album->summary }}" required>
                        </div>
                        <div class="form-group">
                            <label>Contenido</label>
                            <textarea id="content" name="content" class="form-control" placeholder="" rows="12" required>{{ $album->content }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Fecha</label><br>
                            <input id="date" name="date" class="datepicker form-control" data-date-format="yyyy/dd/mm" value="{{ str_replace('-', '/', $album->date) }}">
                        </div>
                        
                        <div class="form-group">
                            <label>Imagenes Actuales</label>
                            <div>
                                <div style="display: block;" id="formdiv">
                                    <input name="imgs[]" value="-1" type="hidden">
                                @foreach($pictures as $pic)
                                <div id="{{ 'acpic'.$pic->id }}" name="{{ 'acpic'.$pic->id }}" class="abcd">
                                    <input type="hidden" name="imgs[]" value="{{ $pic->id }}">
                                    <img id="{{ 'previewimg'.$pic->id }}" src="{{ URL::to($pic->path) }}">
                                    <img alt="delete" src="{{ URL::to('img/admin/windows/x.png') }}" id="img" onclick="deleteImage('{{ $pic->id }}')" >
                                </div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Agregar mas Imagenes</label>
                            <div>
                                <div id="maindiv">
                                    <div id="formdiv">
                                        <div style="display: block;" id="filediv">
                                            <input onchange="chim(0)" id="file0" name="file[]" type="file" class="file">
                                            <label id="plus" for="file0"><img id="impl" src="{{ URL::to('img/admin/windows/plus-24-512.png') }}"></label><br><br>
                                        </div>
                                        <input type="hidden" id="add_more" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset><br><br><br>
                    <div>
                        <input id="imgurl" type="hidden" value="{{ URL::to('img/admin/windows/x.png') }}"/>
                        <input id="imgplus" type="hidden" value="{{ URL::to('img/admin/windows/plus-24-512.png') }}"/>
                        <input class="btn btn-success" type="submit" value="Actualizar">
                        <a class="btn btn-primary" href="{{ URL::to('advanzer-admin/historial_de_cumpleaños') }}">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
        <script src="{{ URL::to('js/admin/own/addImages.js') }}"></script>
        <script>
            $("#birthday-history").addClass("current");
            
            $('.datepicker').datepicker({
                format: 'yyyy/mm/dd'
            });
            
            $("#newCircular").on('submit',(function(e){ 
               
                $.ajaxSetup({
                    headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
                });
                e.preventDefault();
                $.ajax({
                  
                    url: "{{ URL::to('advanzer-admin/actualizar_album') }}",
                    type: "POST",
                    data: new FormData(this),
                    dataType: "html",
                    processData: false,
                    contentType: false
                    
                }).done(function(data) {
                    console.log(data);
                    window.location.href = "#nus";
                    $("#nus").removeClass("hide");
                    //location.reload();
                    
                }).fail(function(data) {
                    console.log(data);
                    $("#nuf").removeClass("hide");
                    window.location.href = "#nuf";              
                });
                     
            }));
            
            function deleteImage(idimg){
                $("#acpic"+idimg).remove();
            }

        </script>
@endsection