@extends('layouts.main')

@section('content')
<!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-th-list"></i>
                        <h1>Pol&iacute;ticas </h1>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>

<!-- Services Full Width Text -->
 <!--       <div class="services-full-width-container">
        	<div class="container">
            	
                <div class=row align="center">
                    <a onclick="window.history.back();">
                        <img width="5%" style="min-width: 50px" src="{{ URL::to('img/elementos/back.png') }}" alt="" >
                    </a>
                </div>
                
        		<div class="row">
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
	            		<p>Ausencias</p>
	            	</div>
                    
	            </div>

	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    
                        La ausencia a las labores por parte del colaborador de la cual haya conocimiento con antelación podrá ser autorizada como permiso (con goce o sin goce de sueldo) de acuerdo a los lineamientos que continuación se describen:
                        
	                    <ul type="1">
                            
                            <li>
                                <h5>Permiso con Goce de Sueldo</h5>
                                
                                <ul type="a">
                                    <li>Las situaciones previstas por Capital Humano dentro de las cuales se podrá autorizar un permiso con Goce de Sueldo serán las siguientes: 
                                    
                                        <table class="responstable" style="width:50%;">
                                            <tr>
                                                <th>Ocasi&oacute;n</th>
                                                <th>D&iacute;as Autorizados</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Matrimonio
                                                </td>
                                                <td>
                                                    Dos d&iacute;as h&aacute;biles
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Nacimiento de hijos
                                                </td>
                                                <td>
                                                    Cinco d&iacute;as h&aacute;biles
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Fallecimiento de C&oacute;nyuge
                                                </td>
                                                <td>
                                                    Dos d&iacute;as h&aacute;biles
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Fallecimiento de Hermanos
                                                </td>
                                                <td>
                                                    Dos d&iacute;as h&aacute;biles
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Fallecimiento de Hijos
                                                </td>
                                                <td>
                                                    Tres d&iacute;as h&aacute;biles
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Fallecimiento de Padres
                                                </td>
                                                <td>
                                                    Tres d&iacute;as h&aacute;biles
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Fallecimiento de Padres Pol&iacute;ticos
                                                </td>
                                                <td>
                                                    Tres d&iacute;as h&aacute;biles
                                                </td>
                                            </tr>
                                        </table>
                                        
                                    </li>
                                    
                                    <li>Procedimiento
                                        <br><br>
                                        <ul type="i">
                                            <li>Ingresar al Portal Personal, llenar la Solicitud de Ausencia y enviarla a notificación del Superior Inmediato o Líder de Proyecto.</li>

                                            <li>Este tipo de solicitudes, llegan autorizadas por defecto tanto al Superior Inmediato como a Capital Humano</li>
                                        </ul>
                                        
                                    </li>
                                </ul>
                                
                            </li>
                            
                            <li>
                                <h5>Ausencias por enfermedad</h5>
                                
                                <ul type="a">
                                    <li> Si se trata de Incapacidad por parte del IMSS, se deberá subir a la solicitud de Ausencia, el comprobante expedido por el Instituto para que proceda el pago de los días de ausencia</li>
                                    <li>Si se trata de Ausencia por enfermedad y la atención fue de forma particular deberá subir a la Solicitud de Ausencia, el comprobante médico para que proceda el pago de los días de ausencia.</li>
                                    <li>Procedimiento
                                        
                                        <ul type="i">
                                            <li>El colaborador deberá ingresar a su Portal Personal y llenar y enviar la Solicitud de Ausencia, marcando como motivo “Enfermedad</li>

                                            <li>Deberá subir en el campo correspondiente, el comprobante médico que justifique los días de ausencia</li>

                                            <li>El Superior Inmediato/Líder de Proyecto y Capital Humano serán notificados de los días, enfermedad y comprobante de la misma vía correo electrónico.</li>
                                        </ul>
                                        
                                    </li>
                                </ul>
                                
                            </li>
                            
                            <li>
                                <h5>Otras Ausencias</h5>
                                    
                                <ul type="a">    
                                    
                                    <li>En el caso que algún colaborador sepa con antelación que requerirá ausentarse de sus labores por una situación específica y justificada y el motivo no sea contemplado dentro del punto anterior, deberá primeramente considerar solicitar los días de ausencia vía vacaciones.</li>

                                    <li>En caso de no contar con días disponibles se llenará la Solicitud de Ausencia y los días solicitados serán sin goce de sueldo, salvo autorización expresa justificada por el Director de Área.</li>

                                    <li>El periodo máximo de Permiso de Ausencia es de 5 días</li>

                                    <li>Procedimiento
                                        
                                        <ul type="i">
                                            <li>El colaborador deberá ingresar a su Portal Personal y llenar y enviar la Solicitud de Ausencia, marcando como                                          motivo “Otros” y especificando en el campo de Observaciones el motivo de la ausencia.</li>

                                            <li>Una vez autorizada por su Superior Inmediato/Líder de Proyecto pasará a validación a Capital Humano.</li>

                                            <li>Una vez que cuente con las autorizaciones requeridas, el colaborador será notificado si fue autorizado o no su permiso.</li>
                                        </ul>
                                    
                                    </li>
                                    
                                </ul>
                                
                            </li>
                            
                        </ul>
                        
                        <div class="alert alert-info">
                            Cualquier situación no expuesta en esta Política, deberá verificarse con Capital Humano.
                        </div>
                        
	                </div>
	            </div>
                
	        </div>
        </div>
-->
    
           <div class="services-full-width-container">
        	<div class="container">
            	
                <div class=row align="center">
                    <a onclick="window.history.back();">
                        <img width="5%" style="min-width: 50px" src="{{ URL::to('img/elementos/back.png') }}" alt="" >
                    </a>
                </div>
                
                <div class="row">
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
                        <span class="politic-icon icon-absences"></span>
                        <p class="politic-tittle">Ausencias</p>
	            	</div>
	            </div>
                
                <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    
	                    <h3>Objetivo:</h3>
                        <p>Dar a conocer el procedimiento oficial autorizado que cada empleado debe seguir al momento de solicitar un permiso de ausencia.</p>
                        
                        <h3>Alcance:</h3>
                        <p>Esta política aplica a toda la organización.</p>
                        
                        
	                </div>
	            </div>
                
                
	        </div>
        </div>

    <div class="call-to-action-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-12 call-to-action-text wow fadeInLeftBig animated" style="visibility: visible; animation: fadeInLeftBig; -webkit-animation: fadeInLeftBig;">
	                    <p>
	                    	Conoce el detalle de la Política y el Formulario de Solicitud en tu Portal Personal
	                    </p>
	                    <div class="call-to-action-button">
	                        <a target="_blank" class="big-link-3" href="http://intranet.advanzer.com:3000/#/sevicios/permisos_de_ausencia">Ir Ahora</a>
	                    </div>
	                </div>
	            </div>
	        </div>
        </div>
@endsection

@section('script')
        <script>
            $("#politics").addClass("active");
        </script>
@endsection