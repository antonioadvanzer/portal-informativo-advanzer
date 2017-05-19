@extends('layouts.main')

@section('content')
<!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-medkit"></i>
                        <h1>TDUMediAccess - Seguro de Vida</h1>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>

<!-- Services Full Width Text -->
        <div class="services-full-width-container">
        	<div class="container">
                
                <div class=row align="center">
                    <a onclick="window.history.back();">
                        <img width="5%" style="min-width: 50px" src="{{ URL::to('img/elementos/back.png') }}" alt="" >
                    </a>
                </div>
            	
                <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    
                        <p>Uno de los beneficios para todos los colaboradores Advanzer y Entuizer es la Tarjeta TDU S4 (Médica), la cual te incluye:</p>
                        
                        <ul type="circle">
                            <li><p>Seguro de reembolso de gastos médicos por accidentes de hasta $5,000</p></li>
                            <li><p>Seguro de indemnización por muerte accidental hasta por $50,000. </p></li>
                            <li><p>Costo preferente en consultas médicas</p></li>
                            <li><p>Un servicio de ambulancia gratis al año</p></li>
                            <li><p>Una campaña preventiva al año</p></li>
                        </ul>
                        
                        <h3>Cobertura</h3>
                        
                        <p>Para conocer la Red Médica, así como los términos y especificaciones de la cobertura puedes consultar en <a href="http://mediaccess.com.mx/tdu/" target="_blank">http://mediaccess.com.mx/tdu/</a></p>
                        
                        <p>Además tu tarjeta TDU S4 te da acceso a beneficios exclusivos durante todo el año y cuántas veces quieras en:</p>
                        
                        <ul type="circle">
                            <li><p>Restaurantes</p></li>
                            <li><p>Salud y belleza</p></li>
                            <li><p>Ropa y Accesorios</p></li>
                            <li><p>Autos</p></li>
                            <li><p>Entretenimiento</p></li>
                        </ul>
                        
                        
                        <p>En más de 9,500 establecimientos afiliados en toda la república mexicana.</p> 
                        
                        <p>Para conocer los establecimientos afiliados y funcionamiento de tu tarjeta puedes consultar <a href="http://www.tdu.com.mx/funciona.html" target="_blank">http://www.tdu.com.mx/funciona.html</a></p>
                        
                        <p>También puedes descargar la aplicación TDU para móvil y consultar los establecimientos participantes.</p>
                        
                        <h3>¿Necesitas Ayuda?</h3>
                        
                        <p>Si tienes alguna duda con el uso o cobertura de tu tarjeta, puedes comunicarte al centro de atención a clientes TDU (55) 5575 – 9556.</p>
                        
                        <h3>Extensión de Beneficios</h3>
                        
                        <p>Como un beneficio adicional para tu familia, TDU MediAccess ofrece la tarjeta para cónyuge e hijos (mayores de 5 años), con los mismos beneficios del titular. </p>

                        <h3>¿Cómo solicito una tarjeta adicional?</h3>
                        
                        <p>Cada tarjeta adicional tiene un costo de $400 anuales, o bien existe un paquete familiar que consta de 4 membresías adicionales por un precio de $1200 al año. </p>
                        
                        <p>Si estas interesado en adquirir alguna tarjeta, comunícate con Capital Humano para hacerte llegar el formato de solicitud.</p> 
                        
	                </div>
	            </div>

	        </div>
        </div>

@endsection

@section('script')
        <script>
            $("#benefits").addClass("active");
        </script>
@endsection