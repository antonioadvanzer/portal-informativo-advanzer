@extends('layouts.main')

@section('content')
<!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-life-ring"></i>
                        <h1>SGMM</h1>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Dudas y respuestas -->
        <div class="services-half-width-container">
        	<div class="container">
                
                <div class=row align="center">
                    <a onclick="window.history.back();">
                        <img width="5%" style="min-width: 50px" src="{{ URL::to('img/elementos/back.png') }}" alt="" >
                    </a>
                </div>
                
	            <div class="row">
	                <div class="col-sm-6 services-full-width-text wow fadeInLeft">
	                    <h3>1. ¿Cómo reporto mi siniestro?</h3>
	                    
                        <p>
	                    	Ante cualquier necesidad médica llamar al <b>01 (800) 911 9999</b>: Asistencia médica telefónica las 24 horas.
                            <br/>
                            <strong>Orientación en caso de enfermedad o accidente:</strong>
                            
	                    </p>
                        
                        <p><b>Importante:</b> Favor de tener a la mano tú número de póliza (FW50667B) y certificado.
                        </p>
                        
                        <img src="{{ URL::to('img/sgmm/Foto-Autos.jpg') }}" style="max-width:400px;" width="100%" class="img-fluid">
                        
	                </div>
	                <div class="col-sm-6 services-full-width-text wow fadeInUp">
	                    <h3>2. ¿Qué puedo encontrar en <a href="http://www.axa.mx" target="_blank">www.axa.mx</a>?</h3>
	                    
                        <p>Directorio médico, directorio de hospitales, informe médico, solicitud de rembolso, solicitud de programación, solicitud de pago directo.</p>
                        
                        <p>Consulta los hospitales de tu póliza desde <a href="https://www.google.com/url?q=https%3A%2F%2Faxa.mx%2Fweb%2Fservicios-axa%2Fprestadores-de-servicios&sa=D&sntz=1&usg=AFQjCNFtDAKbrtczIwA2l4SXjcn7gve49A" target="_blank"><i>Aquí</i></a>, o llamando a Asistencia Médica Telefónica <b>(01 (800) 911 9999).</b></p>
                        
                        <img src="{{ URL::to('img/sgmm/Tipos-de-seguros.jpg') }}" style="max-width:400px;" width="100%" class="img-fluid">
	                </div>
	            </div>
	        </div>
        </div>
        
        <!--  -->
        <div class="services-full-width-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3>3. ¿Cómo tramito mi reclamación?</h3>
	                    <p>
	                    	
	                	</p>
	                </div>
                    
                    <div class="col-sm-6 services-half-width-text wow fadeInUp">
	                    <h3>Rembolso</h3>
                        
                        <h4>Solicita al médico que te atendió, que llene el Informe Médico de AXA.</h4>
	                    
                        <ul type="1"> 
                            <li>Llenado por el asegurado el formato de  rembolso de gastos médicos.</li>

                            <li>Identificación oficial del paciente.</li>

                            <li>Documentos fiscales de documentos a rembolsar.
                            <br>(Para las facturas de estudios favor de  anexar resultados o interpretaciones médicas para facturas de medicamentos anexar copia de la receta médica).</li>

                            <li>AXA rembolsa tus gastos a través de transferencia electrónica bancaria o con una orden de pago. Es importante mencionar en la Solicitud de Rembolso el medio de pago en que deseas que AXA te rembolse tus gastos. En caso de solicitar transferencia electrónica, anexar copia de estado de cuenta.</li>

                            <li>Comprobante de domicilio.</li>
                            
                        </ul>
                        
                        <h4><b>Lugar para entrega de documentos: En el módulo más cercano de AXA, asesor o agente, o directamente al email siniestros@ers.com.mx <br> Tel: 0181-8242-2735 Ext 131</b></h4>
	                </div>
                    
                    <div class="col-sm-6 services-half-width-text wow fadeInUp">
	                    <h3>Programaci&oacute;n de Servicios</h3>
                        
                        <h4>Para esta solicitud, es necesario que presentes toda la documentación necesaria al menos cinco días antes de la cirugía:</h4>
	                    
                        <ul type="1"> 
                            <li>Solicitud de programación de servicios médicos.</li>

                            <li>Informe médico.</li>

                            <li>Copia de los estudios de laboratorio y/o gabinete, con su interpretación en donde se haya confirmado el diagnóstico.</li>

                            <li>Copia de la tarjeta del seguro o póliza.</li>

                            <li>Copia de identificación oficial del paciente.</li>
                            
                        </ul>
                        
	                </div>
                    
	            </div>
	        </div>
        </div>
        
        <!--  -->
        <div class="services-full-width-container">
        	<div class="container">
	            <div class="row">
	                
                    <div class="col-sm-6 services-half-width-text wow fadeInUp">
	                    <h3>Urgencia Médica</h3>
	                    
                        <h4>A continuación te presentamos los pasos que debes seguir en caso que tengas una urgencia médica:</h4>
                        
                        <ul type="1"> 
                            <li>Acude al área de urgencias en algún hospital en convenio.</li>

                            <li>El hospital reporta tu ingreso a través de nuestro Centro de Contacto.</li>

                            <li>Los documentos que debes presentar, en el módulo hospitalario de AXA o con alguno de nuestros representantes médicos:
                            
                                <ul>
                                    <li>Solicitud de pago directo.</li>
                                    <li>Informe Médico.</li>
                                    <li>Credencial de AXA o póliza.</li>
                                    <li>Identificación oficial vigente del paciente.</li>
                                </ul>
                            </li>
                            <li>AXA determinará si tu atención médica de urgencia está cubierta por tu póliza en un lapso de 48 horas entregándole carta de autorización, donde indicara monto autorizado, hospital, honorarios autorizados al equipo médico, deducible y coaseguro.</li>
                            <li>Antes de salir del hospital, tienes que liquidar tu deducible, coaseguro y/ o gastos no cubiertos por tu póliza. </li>
                        </ul>
                    
	                </div>
                    <div class="col-sm-6 services-half-width-text wow fadeInUp">
	                    <h3>Facturaci&oacute;n</h3>
	                    
                        <h4>Para gastos médicos distintos a enfermería, honorarios médicos y medicamentos; el recibo o factura debe venir a nombre de AXA Seguros.
                        <br>Los datos fiscales son:</h4>
                        
                        <table class="responstable" style="width:100%">
                            <tr>
                                <td>
                                    <ul>
                                        <li>Razón social: AXA SEGUROS S.A. DE C.V.</li>

                                        <li>RFC: ASE931116231</li>

                                        <li>Domicilio fiscal: 
                                            <br>Av. Félix Cuevas 366, Piso 6

                                            Col. Tlacoquemécatl

                                            Del. Benito Juárez, 03200, México, DF
                                        </li>
                                    </ul>
                                    
                                </td>
                            </tr>
                        </table>
                        
	                </div>
                    
	            </div>
	        </div>
        </div>

        <div class="services-full-width-container">
        	<div class="container">
	            <div class="row">
	                
                    <div class="col-sm-6 services-half-width-text wow fadeInUp">
	                    <h3>Formatos descargables:</h3>
                        <ul>
                            <li>
                                <i class="fa fa-file-pdf-o"></i>
                                <a target="_blank" href="https://docs.google.com/a/advanzer.com/viewer?a=v&pid=sites&srcid=YWR2YW56ZXIuY29tfHBvbGl0aWNhcy1yaHxneDo1NjdmZDZhMmQ5YTEyYTAw">CONDICIONES GENERALES AXA (LINEA HOSP)</a>
                            </li>
                            <li>
                                <i class="fa fa-file-pdf-o"></i>
                                <a target="_blank" href="https://docs.google.com/a/advanzer.com/viewer?a=v&pid=sites&srcid=YWR2YW56ZXIuY29tfHBvbGl0aWNhcy1yaHxneDo1MTJhY2UwYjY4ZWU1NDlm">Carta Cobertura AXA</a>
                            </li>
                            <li>
                                <i class="fa fa-file-pdf-o"></i>
                                <a target="_blank" href="https://docs.google.com/a/advanzer.com/viewer?a=v&pid=sites&srcid=YWR2YW56ZXIuY29tfHBvbGl0aWNhcy1yaHxneDoyOTQ1NjM2MDdjNTdjMWQ0">GM_FORMATO SINIESTROS_InformeMedico_AI346_9sep2015</a>
                            </li>
                            <li>
                                <i class="fa fa-file-pdf-o"></i>
                                <a target="_blank" href="https://docs.google.com/a/advanzer.com/viewer?a=v&pid=sites&srcid=YWR2YW56ZXIuY29tfHBvbGl0aWNhcy1yaHxneDo1ODcyZDZjZDRiNjYyZmY2">GM_FORMATO SINIESTROS_PagoDirecto_AI347_9sep2015</a>
                            </li>
                            <li>
                                <i class="fa fa-file-pdf-o"></i>
                                <a target="_blank" href="https://docs.google.com/a/advanzer.com/viewer?a=v&pid=sites&srcid=YWR2YW56ZXIuY29tfHBvbGl0aWNhcy1yaHxneDo0OGU0ZjRiZWQ1NjA1Njc">GM_FORMATO SINIESTROS_SolicitudProgramacion_AI345_29</a>
                            </li>
                            <li>
                                <i class="fa fa-file-pdf-o"></i>
                                <a target="_blank" href="https://docs.google.com/a/advanzer.com/viewer?a=v&pid=sites&srcid=YWR2YW56ZXIuY29tfHBvbGl0aWNhcy1yaHxneDoyY2RmMzRkMDdkOTgwMjc3">GM_FORMATO SINIESTROS_SolicitudRembolso</a>
                            </li>
                        </ul>
                    
	                </div>
                    
	            </div>
	        </div>
        </div>
        
@endsection

@section('script')

        <script>
            $("#sgmm").addClass("active");
        </script>
@endsection