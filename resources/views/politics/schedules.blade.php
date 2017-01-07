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
            	
                <div class=row align="center">
                    <a onclick="window.history.back();">
                        <img width="5%" style="min-width: 50px" src="{{ URL::to('img/elementos/back.png') }}" alt="" >
                    </a>
                </div>
                
        		<div class="row">
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
	            		<p>Horarios</p>
	            	</div>
	            </div>

	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3></h3>
	                    
                        Partiendo de la naturaleza de nuestro giro como empresa el horario de labores en Advanzer, es el tiempo oficial que el colaborador presta sus servicios a la compañía. En esta política se establecen los criterios a seguir.<br><br>
                        
                        <ul>
                            
                            <li>
                                <b>1. Horario</b>
                                    <br><br>
                                <ul type="a">
                                    <li>El horario para todo el personal que labora en las oficinas de Advanzer es:
                                        <br>
                                             <p>- Lunes a Viernes de 9:00 a 18:30 horas con 1 hora para comer</p>
                                    </li>

                                    <li>El personal que labora en las instalaciones del cliente deberá apegarse al horario oficial que el cliente tiene establecido y/o el proyecto haya definido.</li>

                                    <li>El personal que se encuentre sin asignación deberá asistir a las Oficinas y apegarse al horario establecido.
                                    </li>
                                </ul>
                            </li>
                                <br>
                            <li>
                                <b>2. Variaciones en horario</b>
                                    <br><br>
                                En Advanzer nos interesa nuestro personal y entendemos que pueden llegar a existir situaciones particulares que puedan justificar que de manera ocasional haya alguna variación en el horario establecido.
                                    <br>
                                Ante estos casos, se deberá seguir el siguiente procedimiento:
                                    <br><br>
                                <ul type="a">
                                    <li>
                                        Deberá notificársele personalmente y por escrito la situación particular al Director del área.
                                    </li>
                                    <li>
                                        Si el Director, a su criterio, autoriza el caso particular, éste deberá informar por escrito a Capital Humano los motivos y el periodo de tiempo en que el colaborador atenderá en otro horario sus actividades laborales
                                    </li>
                                    <li>
                                        Capital Humano, si el caso lo amerita, informará a la Dirección General del caso en particular.
                                    </li>
                                </ul>
                                
                            </li>
                                <br>
                            <li>
                                <b>3. Exclusiones</b>
                                    <br><br>
                                Ningún colaborador por cuenta propia podrá variar su horario sin autorización previa de su Director de Área.
                                    <br>
                                Es responsabilidad de cada Dirección asegurar el cumplimiento de esta política, sancionar verbalmente en caso de ser necesario y reportar a Capital Humano en caso de reincidencia.
                            </li>
                        
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