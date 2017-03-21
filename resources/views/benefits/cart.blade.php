@extends('layouts.main')

@section('content')
<!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-shopping-cart"></i>
                        <h1>Vales de Despensa </h1>
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
                    <div class="col-sm-12 portfolio-filters wow fadeInLeft">
                        <h3>En Advanzer y Entuizer, todos los colaboradores cuentan con el beneficio de Vales de Despensa.</h3>
                    </div>
                </div>
                
                <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    
                        <h3>¿Cómo funciona?</h3>

                        <p>A través de tu tarjeta OneCard, recibirás la Segunda Quincena de cada mes, una recarga de saldo de acuerdo a la siguiente tabla:</p>
                        
                        
                        <table class="responstable" style="width:50%;">
                                    <tr>
                                        <th>Posici&oacute;n</th>
                                        <th>Monto</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            Chofer/Intendencia
                                        </td>
                                        <td>
                                            $576.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Analista/Entrenamiento/Asistente
                                        </td>
                                        <td>
                                            $720.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Consulto/Especialista/Ing. Telecom
                                        </td>
                                        <td>
                                            $864.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Consulto Sr./Especialista Sr./Ing. Telecom Sr.
                                        </td>
                                        <td>
                                            $1,009.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Gerente/SAP Master
                                        </td>
                                        <td>
                                            $1,153.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Gerente Sr./SAP Expert
                                        </td>
                                        <td>
                                            $1,297.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Socio/Director
                                        </td>
                                        <td>
                                            $1,500.00
                                        </td>
                                    </tr>
                                </table>
                        
                        <p>La tarjeta la puedes utilizar en todo el territorio nacional en cualquier tienda de autoservicio que cuente con terminal para tarjeta de crédito y en restaurantes tipo fast food en donde <b>NO VENDAN BEBIDAS ALCOH&Oacute;LICAS.</b> </p>
                        
                        <h4>FAQ</h4>
                        <br>
                        
                        <h3>¿Cómo me registro en la página de OneCard?</h3>
                        <ul type="circle">
                            <li><p>Ingresa a <a href="http://onecard.mx/" target="_blank">http://onecard.mx/</a></p></li>
                            <li><p>Da clic a "Consulta tu saldo" ubicado en la parte superior derecha</p></li>
                            <li><p>Da clic a "Registrar"</p></li>
                            <li><p>Completa los datos que se te solicitan y da clic a "Registrar"</p></li>
                            <li><p>Si al registrarte todos los datos son correctos, te mostrará la pantalla en donde podrás revisar tu saldo.</p></li>
                        </ul>
                        
                        <h3>¿Cómo puedo consultar mi saldo?</h3>
                        <ul type="circle">
                            <li><p>El primer paso es registrarte en la página de One Card</p></li>
                            <li><p>Ingresa a http://onecard.mx/</p></li>
                            <li><p>Da clic a "Consulta tu saldo" ubicado en la parte superior derecha</p></li>
                            <li><p>Ingresa el usuario y contraseña que diste de alta al registrarte</p>
                                <ul type="circle">
                                    <li><p>Si es la 1a vez que realizas este paso, ingresa a "Configuración" y da de alta tu tarjeta</p></li>
                                    <li><p>Da clic a "Consulta tu saldo" ubicado en la parte superior derecha</p></li>
                                    <li><p>Si ya diste de alta tu tarjeta, ingresa a "Tarjetas" y aparecerá tu saldo actual</p></li>
                                    <li><p>Si das clic a "Saldo" te aparecerán los últimos 10 movimientos que hayas realizado</p></li>
                                </ul>
                            </li>
                            <li><p>También puedes consultar tu saldo desde Monterrey en el 8248-8251 o de otros estados en el 01800 0200 222.</p></li>
                        </ul>
                        
                        <h3>¿Cómo obtengo la app para consultar desde mi celular?</h3>
                        <p>Descarga la App en <a href="https://www.google.com/url?q=https%3A%2F%2Fitunes.apple.com%2Fapp%2Fid961694908&sa=D&sntz=1&usg=AFQjCNFmoSiUAGRNHyvluS_dR7flmi3PnQ" target="_blank">iOS</a> o <a href="https://play.google.com/store/apps/details?id=com.oc.onecard" target="_blank">Android</a> para revisar saldo, movimientos y bloquear/desbloquear </p>
                        
                        <h3>¿Qu&eacute; hago si extrav&iacute;o o me roban mi tarjeta electr&oacute;nica?</h3>
                        <p>Debes comunicarte de inmediato a  Servicio al Cliente: 01 (81) 8248 8250 ó serviciocliente@onecard.mx de Lunes a Viernes de 8 a 20 hrs. y Sábados de 10 a 18 hrs.</p>
                        
                        <h3>¿Cómo solicito la reposición de mi tarjeta o cómo solicito una tarjeta adicional?</h3>
                        <p>Env&iacute;a un correo a Micaela Llano (micaela.llano@advanzer.com) para que tu tarjeta sea solicitada. La reposición o adicional tiene un costo de $20.00 que te será descontado del saldo de tu tarjeta.</p>
                        
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