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
	            		<p>D&iacute;as Festivos</p>
	            	</div>
	            </div>

	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3>1. Premisas B&aacute;sicas</h3>
	                    
                        <ul style="list-style-type:none">
                            <li>
                                <b>a.</b> De acuerdo al artículo 74 de la Ley Federal del Trabajo, se establecen los siguientes días de descanso obligatorio:
                                
                                <table class="responstable" style="width:50%;">
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Festejo</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            1 de Enero
                                        </td>
                                        <td>
                                            Año Nuevo
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            1er Lunes de Febrero
                                        </td>
                                        <td>
                                            Día de la Constitución
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            3er Lunes de Marzo
                                        </td>
                                        <td>
                                            Natalicio de Benito Juárez
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            1 de Mayo
                                        </td>
                                        <td>
                                            Día del Trabajo
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            16 de Septiembre
                                        </td>
                                        <td>
                                            Día de la Independencia
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            3er Lunes de Noviembre
                                        </td>
                                        <td>
                                            Día de la Revolución Mexicana
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            1 de Diciembre
                                        </td>
                                        <td>
                                            Cada 6 años: Toma de Poder Presidencial
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            25 de Diciembre
                                        </td>
                                        <td>
                                            Festejo de Navidad
                                        </td>
                                    </tr>
                                </table>
                                <br>
                            </li>
                            <li>
                                <b>b.</b>  Adicionalmente la empresa otorga:
                                
                                <ul>
                                    <li> Jueves y Viernes Santo</li>

                                    <li> ½ día del 10 de Mayo</li>

                                    <li> 24 de Diciembre</li>

                                    <li> 31 de Diciembre</li>
                                </ul>
                                <br>
                            </li>
                            <li>
                                <b>c.</b>  Capital Humano deberá informar a inicio de año los días correspondientes al año en curso. Así mismo notificar a todo el personal 1 día antes de cada día festivo.
                            </li>
                        </ul>
                        
	                </div>
	            </div>
                
                <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3>2. Procedimiento</h3>
	                    
                        <ul type="a">
                            <li>
                                Capital Humano mandará un correo a todo el personal 1 día antes de cada día festivo.
                            </li>

                            <li>
                                El empleado deberá revisar con su superior inmediato su asignación y si podrá disfrutarlo debido a la naturaleza del negocio de la empresa (Consultoría).
                            </li>

                            <li>
                                Si acaso hubiera alguna razón por la cual no pudiera disfrutar un empleado algún Día Festivo Oficial (Punto 8.1.a) el líder del mismo deberá mandar un correo a Capital Humano para que sea pagado conforme a la ley.
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