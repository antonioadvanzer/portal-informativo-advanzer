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
        <div class="services-full-width-container">
        	<div class="container">
            	
        		<div class="row">
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
	            		<p>Bono Anual Consultor&iacute;a</p>
	            	</div>
	            </div>

	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3>1. Objetivo</h3>
	                    <p>
	                    	Establecer de forma clara los lineamientos para el pago de Bono Anual de Consultoría de Advanzer.
	                	</p>
	                </div>
	            </div>

	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3>2. Alcance</h3>
	                    <p>
	                    	Esta política aplica para todos los recursos de los tracks de SAP y Consultoría de Negocios de Advanzer con una antigüedad mayor a 3 meses.
	                	</p>
	                </div>
	            </div>

	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3>3. Lineamientos</h3>
	                    
                        <p>Para el pago de Bono se tomarán en cuenta los siguientes conceptos:</p>
                        
                        <ul>
                            <li><b>Resultado del negocio:</b> margen neto de acuerdo a lo presupuestado al inicio del año. Este resultado se presentará en porcentaje con respecto al presupuesto acordado.</li>

                            <li><b>Horas facturadas:</b> son las horas que el recurso reportó en Harvest para cada proyecto en el que participó.</li>

                            <li><b>Resultado de objetivos:</b> es el resultado de la evaluación de desempeño anual de cada recurso.</li>  

                            <li><b>Compromisos Internos:</b> cumplir con la carga de horas en Harvest en tiempo y forma. Presentar los gastos de viaje en tiempo y forma de acuerdo a lo establecido en la política respectiva. Actualizar el CV formato Advanzer semestralmente.</li>
	                	</ul>
	                </div>
	            </div>

	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3>4. Monto de Bono</h3>
	                    
                        <p>El monto de bono al 100% corresponde al 20% del sueldo anual del recurso, lo que representa 2.4 meses de sueldo en el caso             de los recursos SAP.</p>
                        <p>El monto de bono al 100% corresponde al 10% del sueldo anual del recurso, lo que representa 1.2 meses de sueldo en el caso             de los recursos NO SAP.</p>

	                </div>
	            </div>

	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3>5. Procedimientos y Reglas</h3>
	                    
                        <p>Para que aplique el pago de bono deberán observarse las siguientes reglas:</p> 

                        <ul>
                            <li>El resultado del negocio debe ser mínimo del 85%</li>

                            <li>Las horas facturadas del recurso en proyecto durante el año deben ser mínimo de (1,632 horas) (80%) o proporcional para                     recursos con antigüedad entre 6 meses y 1 año</li>

                            <li>El resultado de objetivos deberá ser:
                                <ul>
                                    <li>C  <i>“cumple las expectativas”</i>: base de cálculo: 100%</li>
                                    <li>B <i>“excede expectativas”</i>: base de cálculo: 105%</li>
                                    <li>A <i>“Role Model”</i>: base de cálculo: 110%</li>
                                </ul>
                            </li>

                            <li>Los 3 compromisos internos deben ser cumplidos</li>
                        </ul>

                        <p>Cualquiera de las 4 reglas anteriores que no se cumplan, deja sin validez cualquier cálculo, por lo que no aplica el pago de                     bono.</p>

                        <p>Si las 4 reglas se cumplen, se observará lo siguiente para el cálculo del monto a pagar:</p>

                        <ul>
                            <li>Se multiplican el % de resultado de negocio y el % de horas facturadas en proyecto durante el año y esto nos dará el % a                     pagar.</li>
                        </ul>
                        
                        <p>Por Ejemplo:</p>
                        
                        <ul>
                            <li>Resultado de negocio: 90%</li>

                            <li>Porcentaje de horas facturadas del recurso: 95%</li>

                            <li>El % de bono a pagar será del 85.5%, sobre el 100%, 105% o 110% de acuerdo al rating anual.</li>

                            <li>El cálculo del bono se realizará con el sueldo que el recurso percibió durante el año que se está evaluando (inmediato anterior).</li>

                            <li>El pago del bono se realizará el mes inmediato posterior a la evaluación de desempeño y deberá dársele a conocer al recurso                 durante su sesión de feedback.</li>
                        </ul>
                        
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