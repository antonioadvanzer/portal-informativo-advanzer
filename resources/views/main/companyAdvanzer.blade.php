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

        <div id="integridad" class="modalDialog tableA">
            <div class="" style="max-width:700px;">
                <a href="#close" title="Close" class="close">X</a>
                
                <table class="responstable" style="width:100%;">
                    <tr>
                        <td>
                            <h4><img width="15%" class="img-thumbnail" src="{{ URL::to('img/valores_advanzer/ADV_VALORES_1INTEGRIDAD VF.png') }}">
                            Actuamos acorde a nuestros principios.</h4>
                        </td>
                    </tr>
                    <tr>
                        
                        <td>
                            Este valor hace alusión a la congruencia entre “think, believe and do”, así mismo incluye conceptos como:
                            
                            <ul>
                                <li>Honradez</li>
                                <li>Franqueza</li>
                                <li>Respeto</li>
                                <li>Puntualidad</li>
                                <li>Lealtad</li>
                                <li>Disciplina</li>
                            </ul>
                            
                        </td>
                    </tr>
                    
                </table>
                
            </div>
        </div>

        <div id="proactividad" class="modalDialog tableA">
            <div class="" style="max-width:700px;">
                <a href="#close" title="Close" class="close">X</a>
                <table class="responstable" style="width:100%;">
                    <tr>
                        <td>
                            <h4><img width="15%" class="img-thumbnail" src="{{ URL::to('img/valores_advanzer/ADV_VALORES_2PROACTIVIDAD VF.png') }}">
                            Tenemos un genuino interés por hacer que las cosas sucedan.</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Proactividad significa asumir el pleno control de la conducta de modo activo.

                            Implica la toma de iniciativa en el desarrollo de acciones creativas y audaces para generar mejoras, haciendo prevalecer la libertad de elección sobre las circunstancias del contexto.
                        </td>
                    </tr>
                    
                </table>
            </div>
        </div>

        <div id="compromiso" class="modalDialog tableA">
            <div class="" style="max-width:700px;">
                <a href="#close" title="Close" class="close">X</a>
                <table class="responstable" style="width:100%;">
                    <tr>
                        <td>
                            <h4><img style="float:left; margin-right:10px;" width="15%" class="img-thumbnail" src="{{ URL::to('img/valores_advanzer/ADV_VALORES_3COMPROMISO VF.png') }}">
                            Aseguramos resultados óptimos en tiempo y forma, dirigiéndonos de manera profesional con responsabilidad, formalidad y ética en la práctica de nuestras labores.</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Consta de tres elementos:
                            
                            <ul>
                                <li>Promesa</li>
                                <li>Seguimiento</li>
                                <li>Cumplimiento</li>
                            </ul>
                            Para construir una cultura de compromiso es necesaria la constancia, realizando acciones coherentes y encaminadas en la misma dirección, para conseguir una base de legitimidad y credibilidad entre los empleados.
                        </td>
                    </tr>
                    
                </table>
            </div>
        </div>

        <div id="colaboracion" class="modalDialog tableA">
            <div class="" style="max-width:700px;">
                <a href="#close" title="Close" class="close">X</a>
                <table class="responstable" style="width:100%;">
                    <tr>
                        <td>
                            <h4><img width="15%" class="img-thumbnail" src="{{ URL::to('img/valores_advanzer/ADV_VALORES_4COLABORACION VF.png') }}">
                            Promovemos la suma de esfuerzos para el logro de objetivos.</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            El trabajo en equipo para alcanzar las metas establecidas, aprovechando y compartiendo la experiencia de los diferentes miembros de la organización. 
                        </td>
                    </tr>
                    
                </table>
            </div>
        </div>

        <div id="gestion_al_cambio" class="modalDialog tableA">
            <div class="" style="max-width:700px;">
                <a href="#close" title="Close" class="close">X</a>
                <table class="responstable" style="width:100%;">
                    <tr>
                        <td>
                            <h4><img style="float:left; margin-right:10px;" width="15%" class="img-thumbnail" src="{{ URL::to('img/valores_advanzer/ADV_VALORES_5GESTION DEL CAMBIO VF.png') }}">
                            Buscamos cambios para mejorar. Impulsamos una cultura de cambio constante y adaptación para evolucionar hacia mejores prácticas.</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Creemos que “siempre hay un método mejor”, que se alcanza paso a paso con  pequeñas innovaciones y mejoras, adoptadas por toda la organización. Teniendo como resultado el incremento de la calidad, servicio y  reducción de costos. 
                        </td>
                    </tr>
                    
                </table>
            </div>
        </div>

        <div id="pensamiento_creativo" class="modalDialog tableA">
            <div class="" style="max-width:700px;">
                <a href="#close" title="Close" class="close">X</a>
                <table class="responstable" style="width:100%;">
                    <tr>
                        <td>
                            <h4>
                                <img style="float:left; margin-right:10px;" width="15%" class="img-thumbnail" src="{{ URL::to('img/valores_advanzer/ADV_VALORES_6PENSAMIENTO CREATIVO VF.png') }}">
                            Incentivamos las ideas y soluciones diferentes, flexibles e innovadoras que marquen la diferencia agregando valor al negocio.</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Este valor hace referencia a promover en los colaboradores un pensamiento activo, no conformista, flexible para observar la realidad desde distintos ángulos, con apertura al cambio para buscar alternativas y soluciones diferentes ante las demandas que se presenten.
                        </td>
                    </tr>
                    
                </table>
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
	                    
                        <div id="valores" align="center">
                            <h3>¿Cuáles son nuestros valores?</h3>
	                    
	                    	<!--<ul>
		                    	<li>Flexibilidad</li>

								<li>Compromiso de equipo</li>

								<li>Dinamismo</li>

								<li>Orientados a resultados</li>

								<li>Pasión por los retos</li>

								<li>Profesionalismo</li>

								<li>Integridad</li>

								<li>Honestidad</li>
							</ul>-->
	                	      
                            <nav id="advanzer">
                                  <UL>
                                   <li class="var_nav">
                                      <div class="link_bg"></div>
                                      <div class="link_title">
                                        <div class=icon> 
                                            <img class="img-thumbnail" src="{{ URL::to('img/valores_advanzer/ADV_VALORES_1INTEGRIDAD VF.png') }}">
                                        </div>
                                        <a href="#integridad"><span>Integridad</span></a>
                                      </div>
                                   </li>
                                   <li class="var_nav">
                                      <div class="link_bg"></div>
                                      <div class="link_title">
                                        <div class=icon> 
                                            <img class="img-thumbnail" src="{{ URL::to('img/valores_advanzer/ADV_VALORES_2PROACTIVIDAD VF.png') }}">
                                        </div>
                                        <a href="#proactividad"><span>Proactividad</span></a>
                                      </div>
                                   </li>
                                   <li class="var_nav">
                                      <div class="link_bg"></div>
                                      <div class="link_title">
                                        <div class=icon> 
                                           <img class="img-thumbnail" src="{{ URL::to('img/valores_advanzer/ADV_VALORES_3COMPROMISO VF.png') }}"> 
                                        </div>
                                        <a href="#compromiso"><span>Compromiso</span></a>
                                      </div>
                                   </li>
                                   <li class="var_nav">
                                      <div class="link_bg"></div>
                                      <div class="link_title">
                                        <div class=icon> 
                                            <img class="img-thumbnail" src="{{ URL::to('img/valores_advanzer/ADV_VALORES_4COLABORACION VF.png') }}">
                                        </div>
                                      <a href="#colaboracion"><span>Colaboración</span></a>
                                      </div>
                                   </li>
                                      <li class="var_nav">
                                      <div class="link_bg"></div>
                                      <div class="link_title">
                                        <div class=icon> 
                                            <img class="img-thumbnail" src="{{ URL::to('img/valores_advanzer/ADV_VALORES_5GESTION DEL CAMBIO VF.png') }}">
                                        </div>
                                      <a href="#gestion_al_cambio"><span>Gestión al Cambio</span></a>
                                      </div>
                                   </li>
                                      <li class="var_nav">
                                      <div class="link_bg"></div>
                                      <div class="link_title">
                                        <div class=icon> 
                                            <img class="img-thumbnail" src="{{ URL::to('img/valores_advanzer/ADV_VALORES_6PENSAMIENTO CREATIVO VF.png') }}">
                                        </div>
                                      <a href="#pensamiento_creativo"><span>Pensamiento Creativo</span></a>
                                      </div>
                                   </li>
                                  </UL>
                                </nav>
                                
                                <br><br>
                            
                        </div>
                        
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