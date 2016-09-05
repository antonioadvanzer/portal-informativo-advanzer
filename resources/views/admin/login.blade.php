<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="{{ URL::to('img/logos/favicon.ico') }}">

        <title>Advanzer - Iniciar Sesión</title>

        <!--<link rel="stylesheet" href="css/style.css">-->
        <link rel="stylesheet" href="{{ URL::to('css/admin/style.css') }}">

    </head>


    <body class="align">

        <div class="site__container">

            <div class="grid__container">
                
                <div><p> {{ date('F j, Y, g:i A') }}  </p></div>
                
                <form action="{{ URL::to('advanzer-admin/iniciar_sesion') }}" method="post" class="form form--login">
                
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form__field">
                      <label class="fontawesome-user" for="login__username"><span class="hidden">Nombre de Usuario</span></label>
                      <input id="login__username" name="login__username"  type="text" class="form__input" placeholder="Nombre de Usuario" value="{{ old('login__username') }}" required>
                    </div>

                    <div class="form__field">
                      <label class="fontawesome-lock" for="login__password"><span class="hidden">Contraseña</span></label>
                      <input id="login__password" name="login__password" type="password" class="form__input" placeholder="Contraseña" value="{{ old('login__password') }}" required>
                    </div>

                    <div class="form__field">
                      <input type="submit" value="Iniciar Sesión">
                    </div>
                    
                    @if (Session::has('flash_error'))
                        <div class="form__field">
                            <input id="alert" type="text" class="form__input alert" value="{{ Session::get('flash_error') }}" disabled>
                            
                        </div>
                    @endif
                    
                </form>

              <!--<p class="text--center">Not a member? <a href="#">Sign up now</a> <span class="fontawesome-arrow-right"></span></p>-->

            </div>
            
            

        </div>

    </body>
</html>