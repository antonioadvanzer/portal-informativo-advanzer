@extends('layouts.main')

@section('content')
<!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-book"></i>
                        <h1>UDEM - Educación</h1>
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
	                    
                        <p>Todos los colaboradores Advanzer y Entuizer pueden disfrutar de los siguientes descuentos en colegiatura a nivel posgrado con la Universidad de Monterrey.</p>
                        
                        <p>Los montos mostrados en la siguiente tabla muestran el esquema de descuentos y son la oferta máxima a aplicar.</p>
                        
                        <img class="img-thumbnail" src="{{ URL::to('img/beneficios/Tabla 1 udem.png') }}">
                        <br><br>
                        
                        <img class="img-thumbnail" src="{{ URL::to('img/beneficios/Tabla 2 udem.png') }}">
                        <br><br>
                        
                        <p>*Estos beneficios no son acumulables con otras becas o ayudas financieras que otorga la UDEM, de tal forma que el colaborador aspirante a alumno podrá elegir entre estos beneficios según convenga a sus intereses, dentro de la normatividad del reglamento y las políticas de beca vigentes, sujetándose a la disponibilidad de recursos económicos de la institución.</p>
                        
                        
                        <h3>Especificaciones</h3>
                        
                        <p>Estos beneficios no son acumulables con otras becas o ayudas financieras que otorga la UDEM, de tal forma que el colaborador aspirante a alumno podrá elegir entre estos beneficios según convenga a sus intereses, dentro de la normatividad del reglamento y las políticas de beca vigentes, sujetándose a la disponibilidad de recursos económicos de la institución.</p>
                        
                        <p>En caso de no acreditar alguna o algunas de las materias cursadas en cualquiera de los cuatrimestres, el colaborador deberá de pagar el 100% del costo de dicha materia.</p>
                        
                        <p>En caso de obtener una calificación menor a 85/100 y mayor a 70/100, el colaborador deberá pagar igualmente un porcentaje de la inversión:</p>
                        
                        <img class="img-thumbnail" src="{{ URL::to('img/beneficios/Porcentajes 1 udem.png') }}">
                        <br><br>
                        
                        <p>En caso de desertar y/o suspender la maestría, por cualquier causa ajena a la UDEM, el colaborador deberá pagar a la institución académica un porcentaje de la inversión.</p>
                        
                        <img class="img-thumbnail" src="{{ URL::to('img/beneficios/Porcentajes 2 udem.png') }}">
                        <br><br>
                        
                        <p>Si tienes alguna duda o estás interesado en disfrutar de este beneficio para ti o algún familiar directo contacta a Capital Humano para orientarte.</p>
                        
                        <h3>¿Dónde puedo consultar los cursos y posgrados disponibles?</h3>
                        
                        <p>Visita la página <a href="http://www.udem.edu.mx" target="_blank">www.udem.edu.mx</a> para consultar la oferta educativa para Posgrados y Educación Continua.</p>
                        
                        <p><b>Si tienes alguna duda o estás interesado en disfrutar de este beneficio para ti o algún familiar directo contacta a Capital Humano para orientarte.</b></p>
                        
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