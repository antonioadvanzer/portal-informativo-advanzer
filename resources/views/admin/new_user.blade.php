@extends('layouts.admin')

@section('content')
<meta name="_token" content="{!! csrf_token() !!}"/>
<div class="row">
    <div class="col-md-6">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Nuevo Usuario Admininistrador</div>
                <div class="panel-options">
                  <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                  <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                </div>
            </div>
            <div class="panel-body">
                <div id="nus" class="alert alert-success hide"><span>¡Guardado con Exito!</span></div>
                <div id="nuf" class="alert alert-danger hide"><span>¡Falla al Guardar!</span></div>
                <!--<form id="newuser" role="form" method="post" action="{{ URL::to('advanzer-admin/guardar_nuevo_usuario') }}">-->
                <div id="newuser">
                    <fieldset>
                        <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
                        <div class="form-group">
                            <label>Nombre de Usuario</label>
                            <input id="name" name="name" class="form-control" placeholder="" type="text" required>
                        </div>
                        <div class="form-group">
                            <label>Correo El&eacute;cronico</label>
                            <input id="email" name="email" class="form-control" placeholder="" type="email" required>
                        </div>
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input id="password" name="password" class="form-control" placeholder="" type="password" required>
                        </div>
                    </fieldset>
                    <div>
                        <button id="actionAdd" class="btn btn-primary" type="submit">Guardar</button>
                        <!--<input class="btn btn-primary" type="submit" value="Guardar">-->
                    </div>
                </div>
                <!--</form>-->
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
        <script>
            
            $("#users").addClass("current");
            
            $("#name").keydown(function(){
                $(this).removeClass("invalid");
            });
            $("#password").keydown(function(){
                $(this).removeClass("invalid");
            });
            $("#email").keydown(function(){
                $(this).removeClass("invalid");
            });
           
            $("#actionAdd").click(function(){
                
                var name = $("#name");
                var password = $("#password");
                var email = $("#email");
                
                if(name.val() == ""){
                    
                    name.addClass("invalid");
                    return;
                    
                }
                if(email.val() == ""){
                    
                    email.addClass("invalid");
                    return;
                    
                }
                if(password.val() == ""){
                    
                    password.addClass("invalid");
                    return;
                    
                }
                
                $.ajaxSetup({
                    headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
                });
                
                $.ajax({
                  
                    url: "{{ URL::to('advanzer-admin/guardar_nuevo_usuario') }}",
                    type: "POST",
                    data:{
                        _token: $('meta[name=_token]').attr('content'),
                        name: name.val(),
                        email: email.val(),
                        password: password.val()
                        },
                    dataType: "text"
                    
                }).done(function() {
                  $("#nus").removeClass("hide");
                }).fail(function(data) {console.log(data);
                  $("#nuf").removeClass("hide");
                });
                
                
                
            });

        </script>
@endsection