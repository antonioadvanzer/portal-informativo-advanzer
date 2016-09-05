<!DOCTYPE html>
<html>
  <head>
    <title>Advanzer - Panel de Administracion</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
    <link rel="icon" href="{{ URL::to('img/logos/favicon.ico') }}">
    
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">
      
    <!-- Bootstrap -->
    <!--<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="{{ URL::to('bootstrap/css/bootstrap.min.css') }}">
    <!-- styles -->
    <!--<link href="css/styles.css" rel="stylesheet">-->
    <link rel="stylesheet" href="{{ URL::to('css/admin/styles.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
      
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Panel de Administraci&oacute;n</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <!--<input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>-->
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuario <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Perfil</a></li>
	                          <li><a href="{{ URL::to('advanzer-admin/cerrar_session') }}">Cerrar Sesi&oacute;n</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>
      
    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li id="main" class=""><a href="{{ URL::to('advanzer-admin') }}"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li id ="users" ><a href="{{ URL::to('advanzer-admin/usuarios') }}"><i class="glyphicon glyphicon-user"></i> Usuarios</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-calendar"></i> Calendario</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-film"></i> Carrusel</a></li>
                    <li id ="news"><a href="{{ URL::to('advanzer-admin/noticias') }}"><i class="glyphicon glyphicon-list-alt"></i> Noticias</a></li>
                    <!--<li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
                    <li><a href="tables.html"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
                    <li><a href="buttons.html"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>
                    <li><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
                    <li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Pages
                            <span class="caret pull-right"></span>
                         </a>-->
                         <!-- Sub menu --
                         <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                        </ul>
                    </li>-->
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
		  
              <!-- Maint Container-->
	           @yield('content')
              
          </div>
		</div>
    </div>
      <br><br><br><br><br><br><br><br><br><br><br><br>
      <br><br>
    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Advanzer 2016 <a href='#'>Panel de Administraci&oacute;n</a>
            </div>
            
         </div>
      </footer>
    
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
      
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ URL::to('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('js/admin/custom.js') }}"></script>
    
      <!-- Scripts -->
      @yield('script')
      
  </body>
</html>