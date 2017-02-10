@extends('layouts.admin')

@section('content')
<meta name="_token" content="{!! csrf_token() !!}"/>
<div class="row">
    <div class="col-md-8">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Editar Noticia</div>
                <div class="panel-options">
                  <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                  <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                </div>
            </div>
            <div class="panel-body">
                <div id="nus" class="alert alert-success hide"><span>¡Guardado con Exito!</span></div>
                <div id="nuf" class="alert alert-danger hide"><span>¡Falla al Guardar!</span></div>
                <form id="newCircular" role="form" method="post" action="{{ URL::to('advanzer-admin/actualizar_noticia') }}" enctype="multipart/form-data">
                    <fieldset>
                        <input id="_token" type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input id="id" type="hidden" name="id" value="{{ $circular->id }}">
                        
                        <div class="form-group">
                            <label>T&iacute;tulo</label>
                            <input id="title" name="title" class="form-control" placeholder="" type="text" value="{{ $circular->title }}" required>
                        </div>
                        <div class="form-group">
                            <label>Sumario</label>
                            <input id="summary" name="summary" class="form-control" placeholder="" type="text" value="{{ $circular->summary }}" required>
                        </div>
                        <div class="form-group">
                            <label>Contenido</label>
                            <textarea id="content" name="content" class="form-control" placeholder="" rows="12" required>{{ $circular->content }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Imagenes Actuales</label>
                            <div>
                                <div style="display: block;" id="formdiv">
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
                        <div id="urls" class="form-group">
                            <label>URL</label><br>
                            <a id="addUrl" href="#urls" class="btn btn-default" role="button">Agregar</a>
                            <div id="links" class="col-sm-10">
                                <?php $lk = 1; ?>
                                @foreach($links as $l)
                                <div id="{{ 'link'.$lk }}" class="alert bg-info">
                                    <button id="{{ 'remove-link'.$lk }}" type="button" class="exit-link" aria-label="Close" value="{{ 'link'.$lk }}">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <label>Direcci&oacute;n</label>
                                    <input id="{{ 'url'.$lk }}" name="{{ 'url'.$lk }}" class="form-control" type="url" value="{{$l->url}}">
                                    <label>Descripci&oacute;n</label>
                                    <input id="{{ 'url-description'.$lk }}" name="{{ 'url-description'.$lk }}" class="form-control" placeholder="" type="text" value="{{$l->description}}" required>
                                </div>
                                <?php $lk++; ?>
                                @endforeach
                            </div>
                            <input id="cant-links" name="cant-links" type="hidden" value="{{ $lk }}">
                        </div>
                    </fieldset><br><br><br>
                    <div>
                        <input id="imgurl" type="hidden" value="{{ URL::to('img/admin/windows/x.png') }}"/>
                        <input id="imgplus" type="hidden" value="{{ URL::to('img/admin/windows/plus-24-512.png') }}"/>
                        <input class="btn btn-success" type="submit" value="Actualizar">
                        <a class="btn btn-primary" href="{{ URL::to('advanzer-admin/noticias') }}">Cancelar</a>
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
            $("#news").addClass("current");
            
            $("#newCircular").on('submit',(function(e){ 
                   
            
                
                $.ajaxSetup({
                    headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
                });
                e.preventDefault();
                $.ajax({
                  
                    url: "{{ URL::to('advanzer-admin/actualizar_noticia') }}",
                    type: "POST",
                    /*data:{
                        _token: $('meta[name=_token]').attr('content'),
                        /*name: name.val(),
                        email: email.val(),
                        password: password.val()
                        
                        },*/
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
            
            var urlcont = {{ $lk }};
            $("#addUrl").click(function (){
                //alert("asd");
                div = '<div id="link'+urlcont+'" class="alert bg-info">'
                            +'<button id="remove-link'+urlcont+'" type="button" class="exit-link" aria-label="Close" value="link'+urlcont+'">'
                            +'<span aria-hidden="true">&times;</span>'
                            +'</button>'
                            +'<label>Direcci&oacute;n</label>'
                            +'<input id="url'+urlcont+'" name="url'+urlcont+'" class="form-control" type="url">'
                            +'<label>Descripci&oacute;n</label>'
                            +'<input id="url-description'+urlcont+'" name="url-description'+urlcont+'" class="form-control" placeholder="" type="text" required>'
                        +'</div>';
                
                $("#links").append(div);
                
                $("#remove-link"+urlcont).click(function(){
                    //$("#link"+urlcont).remove();alert("a");
                    
                    $("#"+$(this).attr("value")).remove();
                    
                });
                
                $("#cant-links").val(urlcont);
                
                urlcont++;
            });
            
            $(".exit-link").each(function(){
                $(this).click(function(){
                    $("#"+$(this).attr("value")).remove();
                });
            });

        </script>
@endsection