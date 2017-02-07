@extends('layouts.main')

@section('content')
<!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-book"></i>
                        <h1>Tec Milenio - Educación</h1>
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
	                    
                        <p>Todos los colaboradores Advanzer y Entuizer, así como sus familiares directos (cónyuges e hijos) pueden disfrutar de los siguientes descuentos en colegiatura a nivel preparatoria, profesional y posgrado con la Universidad Tec Milenio.</p>
                        
                        <p>Este beneficio es válido en cualquier campus de la República Mexicana.</p>
                        
                        <p>Los montos mostrados en la siguiente tabla muestran el esquema de descuentos y son la oferta máxima a aplicar.</p>
                        
                        <img class="img-thumbnail" src="{{ URL::to('img/beneficios/Tabla 1 TecM.png') }}">
                        <br><br>
                        
                        <img class="img-thumbnail" src="{{ URL::to('img/beneficios/Tabla 2 Tec M.png') }}">
                        <br><br>
                        
                        <p>*Para la apertura de los cursos tutorados es necesario la inscripción de al menos 7 personas y avisar con al menos una semana de anticipación.</p>
                        
                        <p>** Los descuentos en Educación Continua de grupo, de aplican con previa autorización del Director del Campus.
                        </p>
                        
                        <h3>Especificaciones</h3>
                        
                        <p>Las condiciones para que Univeridad Tec Milenio aplique los porcentajes máximos de descuento será validando los siguientes rubros:</p>
                        
                        <ul type="circle">
                            <li><p>Promedio del nivel académico anterior inmediato que tenga el colaborador que lo solicite.</p></li>
                            <li><p>Presupuesto disponible del campus que lo otorga.</p></li>
                            <li><p>Presupuesto disponible del campus que lo otorga</p></li>
                        </ul>
                        
                        <p>Los empleados y familiares directos podrán ser acreedores por primera vez a un porcentaje de descuento siempre y cuando se cumplan con las siguientes condiciones:</p>
                        
                        <ul type="circle">
                            <li><p>Ser alumno de nuevo ingreso.</p></li>
                            <li><p>Tener un promedio de 80/100 en su nivel académico anterior al momento de la inscripción.</p></li>
                            <li><p>Cumplir con los requisitos administrativos y académicos de admisión.</p></li>
                            <li><p>Los empleados y familiares directos deberán de identificarse por medio de una constancia laboral, gafete de asociado y/o documento que genere la relación con el empleado (en caso de familiares directos).</p></li>
                        </ul>
                        
                        <p>Al término de cada periodo académico y para poder continuar con el precio preferencial aplicable, deberá generar su refrendo siempre y cuando mantenga las condiciones con las que se otorgó.</p>
                        
                        <h3>¿Necesitas más información?</h3>
                        
                        <p>Si tienes alguna duda o estás interesado en disfrutar de este beneficio para ti o algún familiar directo contacta a Capital Humano para orientarte.</p>
                        
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