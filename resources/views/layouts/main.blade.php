<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Advanzer - Portal Informativo</title>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="icon" href="{{ URL::to('img/logos/favicon.ico') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
    
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="{{ URL::to('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/animate.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ URL::to('flexslider/flexslider.css') }}">
    <!--<link rel="stylesheet" href="{{ URL::to('css/form-elements.css') }}">-->
    <link rel="stylesheet" href="{{ URL::to('css/media-queries.css') }}">
    
    @if(session('empresa') == "advanzer.com")
    <link rel="stylesheet" href="{{ URL::to('css/advanzer/style.css') }}">
    @elseif(session('empresa') == "entuizer.com")
    <link rel="stylesheet" href="{{ URL::to('css/entuizer/style.css') }}">
	@else
    <link rel="stylesheet" href="{{ URL::to('css/advanzer/style.css') }}">
    @endif
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <!--<link rel="shortcut icon" href="img/logos/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="tos/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="tos/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="tos/ico/apple-touch-icon-72-precomposed.png">-->
        <!--<link rel="apple-touch-icon-precomposed" href="tos/ico/apple-touch-icon-57-precomposed.png">-->

    
    <!-- Javascript -->
    <script src="{{ URL::to('js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ URL::to('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('js/bootstrap-hover-dropdown.min.js') }}"></script>
    <script src="{{ URL::to('js/jquery.backstretch.min.js') }}"></script>
    <script src="{{ URL::to('js/wow.min.js') }}"></script>
    <script src="{{ URL::to('js/retina-1.1.0.min.js') }}"></script>
    <script src="{{ URL::to('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::to('flexslider/jquery.flexslider-min.js') }}"></script>
    <script src="{{ URL::to('js/jflickrfeed.min.js') }}"></script>
    <script src="{{ URL::to('js/masonry.pkgd.min.js') }}"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <!--<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>-->
    <script src="{{ URL::to('js/jquery.ui.map.min.js') }}"></script>
    <script src="{{ URL::to('js/scripts.js') }}"></script>

</head>
<body>
	<div class="container">
		<a href="#" class="">
		    <img style="max-width:300px;" width="50%" src="{{ URL::to('img/logos/AD_logo.png') }}" class="img-fluid">
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    <img style="max-width:300px;" width="50%" src="{{ URL::to('img/logos/EN_logo.png') }}" class="img-fluid">
		</a>
		<br/>
		<br/>
	</div>

    <!-- Top menu -->
	<nav class="navbar" role="navigation">
		<div class="container main-menu">
            <!--<div class="col-md-3" >
                <p>
                    <img style="float: right; margin: 0px 0px 15px 15px;" src="img/logos/AD_logo.png" class="img-fluid">
                    <img style="float: right; margin: 0px 0px 15px 15px;" src="img/logos/EN_logo.png" class="img-fluid">
                </p>
            </div>-->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="top-navbar-1">
				<ul class="nav navbar-nav navbar-right">
					<!--<li class="dropdown active">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
							<i class="fa fa-home"></i><br>Principal <!--<span class="caret"></span>--
						</a>
						<ul class="dropdown-menu dropdown-menu-left" role="menu">
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="index-2.html">Home 2</a></li>
						</ul>
					</li>-->
                    <li id="home">
						<a href="{{ URL::to('') }}"><i class="fa fa-home"></i><br>Principal</a>
					</li>
                    <li id="about" class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
							<i class="fa fa-bookmark"></i><br>¿Qui&eacute;nes Somos? <span class="caret"></span>
						</a>
                        <ul class="dropdown-menu dropdown-menu-left" role="menu">
                            <li id="birthday">
                                <a href="{{ URL::to('identidad/advanzer') }}"><i class="fa"></i>&nbsp;&nbsp;Advanzer</a>
                            </li>
							<li id="news" >
                                <a href="{{ URL::to('identidad/entuizer') }}"><i class="fa"></i>&nbsp;&nbsp;Entuizer</a>
                            </li>
						</ul>
                    </li>
					<li id="organization" >
						<a href="{{ URL::to('under_construction') }}"><i class="fa fa-sitemap"></i><br>Estructura Organizacional</a>
					</li>
					<li id="politics">
						<a href="{{ URL::to('politicas') }}"><i class="fa fa-th-list"></i><br>Políticas</a>
					</li>
					<!---->
                    <li id="graphics">
						<a href="{{ URL::to('material_grafico') }}"><i class="fa fa-picture-o"></i><br>Identidad Corporativa</a>
					</li>
					<li id="publications" class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
							<i class="fa fa-bookmark"></i><br>Publicaciones <span class="caret"></span>
						</a>
						<ul class="dropdown-menu dropdown-menu-left" role="menu">
                            <li id="birthday">
                                <a href="{{ URL::to('cumpleaños_del_mes') }}"><i class="fa fa-birthday-cake"></i>&nbsp;&nbsp;Calendario de Cumpleaños</a>
                            </li>
                            <li id="birthday-history">
                                <a href="{{ URL::to('historial_de_cumpleanos') }}"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Historial de Cumpleaños</a>
                            </li>
							<li id="news" >
                                <a href="{{ URL::to('noticias') }}"><i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;Noticias</a>
                            </li>
                            <li id="news" >
                                <a href="{{ URL::to('historial_de_eventos') }}"><i class="fa fa-calendar-o"></i>&nbsp;&nbsp;Historial de Eventos</a>
                            </li>
						</ul>
                    </li>
					<li id="job">
						<a href="{{ URL::to('mi_desempeño') }}"><i class="fa fa-user"></i><br>Mi Desempeño</a>
					</li>
                    <!--<li id="cart">
						<a href="{{ URL::to('despensa') }}"><i class="fa fa-shopping-cart"></i><br>Despensa</a>
					</li>
                    <li id="sgmm">
						<a href="{{ URL::to('sgmm') }}"><i class="fa fa-info"></i><br>SGMM</a>
					</li>-->
                    <li id="benefits">
						<a href="{{ URL::to('beneficios') }}"><i class="fa fa-thumbs-up"></i><br>Beneficios</a>
					</li>
                    <li id="contact" >
                        <a href="{{ URL::to('contacto') }}"><i class="glyphicon glyphicon-phone-alt"></i><br>Contacto</a>
                    </li>
                    <!--<li id="company" class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
							<i class="fa fa-users"></i><br>Nosotros <span class="caret"></span>
						</a>
						<ul class="dropdown-menu dropdown-menu-left" role="menu">
							
							
						</ul>
                    </li>-->
				</ul>
			</div>
		</div>
	</nav>

	<!-- Maint Container-->
	@yield('content')

	<!-- Footer -->
	<footer>
		<div class="container">
		    
	    <div class="row">
	    	<!--<div class="fe col-sm-12 wow fadeIn">-->
            <div class="fe col-sm-12">
	    		<div class="footer-border"></div>
	    	</div>
	    </div>
	    
	    <div class="row">
	        <!--<div class=" fe col-sm-7 footer-copyright wow fadeIn">-->
            <div class=" fe col-sm-7 footer-copyright">
	            <p>Advanzer/Entuizer 2017</p>
	        </div>
	        <!--<div class="col-sm-5 footer-social wow fadeIn">
	            <a href="#"><i class="fa fa-facebook"></i></a>
	            <a href="#"><i class="fa fa-dribbble"></i></a>
	            <a href="#"><i class="fa fa-twitter"></i></a>
	            <a href="#"><i class="fa fa-pinterest"></i></a>
	        </div>-->
	    </div>

	</div>
	</footer>
@yield('script')
</body>
</html>