@extends('layouts.main')

@section('content')
<!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-building"></i>
                        <h1>Identidad</h1>
                        <p>En este espacio podrás encontrar informaci&oacute;n relacionada a nuestra identidad.</p>
                    </div>
                </div>
            </div>
        </div>
        
<!-- About Us -->
        <div class="services-full-width-container">
        	<div class="container">
            	
	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3>¿Qué es Advanzer?</h3>
	                    <p>
	                    	Somos una empresa que provee soluciones integrales en consultoría y tecnología dirigidas a Gobierno e Iniciativa Privada. Nuestra experiencia nos ha permitido desarrollar metodologías y modelos de procesos únicos que se reflejan en soluciones sólidas replicables e integradas a través de herramientas líderes, para beneficio de nuestros clientes.
                        </p>
                        <p>
                            En Advanzer, estamos comprometidos con escuchar a nuestros clientes para conocer a fondo el valor de su negocio y los retos a los cuáles se enfrentan. Tenemos la flexibilidad y dinamismo que provee nuestra experiencia para dar una respuesta ágil, eficiente, profesional y orientada al mejor resultado para nuestros clientes.
                            Nuestra gente es nuestro mayor activo, aplicamos nuestra experiencia para beneficio de nuestros clientes.
	                	</p>
	                </div>
	            </div>

	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3>¿Cuál es nuestra misión?</h3>
	                    <p>
	                    	Proveer servicios de consultoría reconociendo el valor del negocio de nuestros clientes tanto iniciativa privada como Gobierno a través de la experiencia y conocimiento de nuestro equipo, para crear modelos de operación más eficientes que incrementen y transformen el valor inicial de su negocio o gestión.
	                </div>
	            </div>

                <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3>¿Cuál es nuestra visión?</h3>
	                    <p>
	                    	Ser una empresa de consultoría con una plataforma empresarial en constante evolución, que genere una espiral de crecimiento para sus clientes y equipo.
	                	</p>
	                </div>
	            </div>

	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3>¿Cuáles son nuestros valores?</h3>
	                    
	                    	<ul>
		                    	<li>Flexibilidad</li>

								<li>Compromiso de equipo</li>

								<li>Dinamismo</li>

								<li>Orientados a resultados</li>

								<li>Pasión por los retos</li>

								<li>Profesionalismo</li>

								<li>Integridad</li>

								<li>Honestidad</li>
							</ul>
	                	
	                </div>
	            </div>

	        </div>
        </div>
@endsection

@section('script')
        <script>
            $("#company").addClass("active");
            $("#about").addClass("active");
        </script>
@endsection