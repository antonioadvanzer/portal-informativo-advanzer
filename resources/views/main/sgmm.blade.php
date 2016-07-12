@extends('layouts.main')

@section('content')
<!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-info"></i>
                        <h1>SGMM</h1>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Dudas y respuestas -->
        <div class="services-half-width-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-6 services-half-width-text wow fadeInLeft">
	                    <h3>1. ¿Cómo reporto mi siniestro?</h3>
	                    
                        <p>
	                    	Llama al 01 800 201 6764 línea exclusiva para reporte de Siniestros GMM, disponible las 24 horas los 365 días del año.
                            <br/>
                            <strong>Orientación en caso de enfermedad o accidente:</strong>
                            
	                    </p>
                        
                        <ul>
                            <li>Centros de Atención Médica</li>
                            <li>Grupo de Especialistas Médicos</li>
                            <li>Coordinación Internamiento Centro Hospitalario</li>
                            <li>Información servicios médicos</li>
                            <li>Quejas y Comentarios</li>
                        </ul>
                        
                        <p>Importante. Favor de tener a la mano tu número de póliza (0293006) y certificado. Estos datos aparecen en tu credencial.
                        </p>
                        
                        <img src="{{ URL::to('img/sgmm/Foto-Autos.jpg') }}" style="max-width:400px;" width="100%" class="img-fluid">
                        
	                </div>
	                <div class="col-sm-6 services-half-width-text wow fadeInUp">
	                    <h3>2. ¿Qué puedo encontrar en <a href="http://www.segurosbanorte.com.mx" target="_blank">www.segurosbanorte.com.mx</a>?</h3>
	                    
                        <p>
	                    	Directorio Médico del plan Mas Visión Médica Colectivo, Informe Médico, Informe del Reclamante, Convenio Pago vía Transferencia.
	                    </p>
                        
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
	                    <h3>Programaci&oacute;n Cirug&iacute;a</h3>
	                    
                        <ul> 
                            <li>Llenado de INFORME MEDICO (con diagnóstico definitivo).</li>

                            <li>Llenado de INFORME DE RECLAMANTE (datos de contacto).</li>

                            <li>Copia de identificaciones del asegurado afectado</li>

                            <li>(IFE, FM3 o Pasaporte y Credencial Banorte).</li>

                            <li>Interpretación de estudios, en caso de programación de medicamentos, copia de receta médica (la original se entregará al recibir medicamento).</li>
                            
                            <li>Lugar: Oficina Seguros Banorte-Generali, Médico Coordinador plaza, asesor o agente o directamente al email: siniestros@ers.com.mx y tel. (0181) 8242-2735.</li>
                        </ul>
                        
	                </div>
                    
                    <div class="col-sm-6 services-half-width-text wow fadeInUp">
	                    <h3>Reporte Hospitalario</h3>
	                    
                        <ul> 
                            <li>Acudir al hospital de red (es indispensable presentar identificación oficial del asegurado).</li>

                            <li>El Hospital reporta ingreso a la Aseguradora a través de CAT.</li>

                            <li>Durante las primeras 24 horas del aviso lo visitará Ejecutivo de Servicio o Médico.</li>

                            <li>Coordinador de Plaza para asesoría e integración de información.</li>

                            <li>Una vez obtenida la información completa se otorga la carta cobertura la cual incluye: Monto Autorizado Hospital/Honorarios autorizados al equipo Médico/Deducible/Coaseguro.</li>
                            
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
	                    <h3>Reembolso</h3>
	                    
                        <ul> 
                            <li>Llenado de INFORME MEDICO (debe ser actualizado cada 3 meses).</li>

                            <li>Copia de Identificación oficial y Credencial Banorte.</li>

                            <li>Documentos fiscales de documentos a reembolsar (facturas, recibos de honorarios a nombre del Titular de póliza o de Banorte Generali).</li>

                            <li>Carta de autorización de Transferencia.</li>

                            <li>Copia de Estado de Cuenta con CLABE legible.</li>
                            
                        </ul>
                    
	                </div><div class="col-sm-6 services-half-width-text wow fadeInUp">
	                    <h3></h3>
	                    
                        <img src="{{ URL::to('img/sgmm/vias-de-reclamacion-668x400x80xX.jpg') }}" style="max-width:400px;" width="100%" class="img-fluid">
                    
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