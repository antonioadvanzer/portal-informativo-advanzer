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

        <div id="integridad" class="modalDialog tableE">
            <div class="" style="max-width:700px;">
                <a href="#close" title="Close" class="close">X</a>
                
                <table class="responstable" style="width:100%;">
                    <tr>
                        <td>
                            <h4><img width="15%" class="img-thumbnail" src="{{ URL::to('img/valores_entuizer/EN_VALORES_1INTEGRIDAD VF.png') }}">
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

        <div id="proactividad" class="modalDialog tableE">
            <div class="" style="max-width:700px;">
                <a href="#close" title="Close" class="close">X</a>
                <table class="responstable" style="width:100%;">
                    <tr>
                        <td>
                            <h4><img width="15%" class="img-thumbnail" src="{{ URL::to('img/valores_entuizer/EN_VALORES_2PROACTIVIDAD VF.png') }}">
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

        <div id="compromiso" class="modalDialog tableE">
            <div class="" style="max-width:700px;">
                <a href="#close" title="Close" class="close">X</a>
                <table class="responstable" style="width:100%;">
                    <tr>
                        <td>
                            <h4><img style="float:left; margin-right:10px;" width="15%" class="img-thumbnail" src="{{ URL::to('img/valores_entuizer/EN_VALORES_3COMPROMISO VF.png') }}">
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

        <div id="colaboracion" class="modalDialog tableE">
            <div class="" style="max-width:700px;">
                <a href="#close" title="Close" class="close">X</a>
                <table class="responstable" style="width:100%;">
                    <tr>
                        <td>
                            <h4><img width="15%" class="img-thumbnail" src="{{ URL::to('img/valores_entuizer/EN_VALORES_4COLABORACION VF.png') }}">
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

        <div id="gestion_al_cambio" class="modalDialog tableE">
            <div class="" style="max-width:700px;">
                <a href="#close" title="Close" class="close">X</a>
                <table class="responstable" style="width:100%;">
                    <tr>
                        <td>
                            <h4><img style="float:left; margin-right:10px;" width="15%" class="img-thumbnail" src="{{ URL::to('img/valores_entuizer/EN_VALORES_5GESTION DEL CAMBIO VF.png') }}">
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

        <div id="pensamiento_creativo" class="modalDialog tableE">
            <div class="" style="max-width:700px;">
                <a href="#close" title="Close" class="close">X</a>
                <table class="responstable" style="width:100%;">
                    <tr>
                        <td>
                            <h4>
                                <img style="float:left; margin-right:10px;" width="15%" class="img-thumbnail" src="{{ URL::to('img/valores_entuizer/EN_VALORES_6PENSAMIENTO CREATIVO VF.png') }}">
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
	                    <h3>¿Qui&eacute;n es Entuizer?</h3>
	                    <p>
	                    	Empresa especializada en el desarrollo de proyectos relacionados con la regulación, investigación e innovación en tecnologías de la información y del conocimiento aplicables a sector público y privado.
	                	</p>
                        <p>
                            Nuestra gente es nuestro mayor activo, aplicamos nuestra experiencia para beneficio de nuestros clientes.
                        </p>
	                </div>
	            </div>

	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3>Misi&oacute;n?</h3>
	                    <p>
	                    	Generar valor y confianza para nuestros clientes y colaboradores.
	                </div>
	            </div>

                <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3>Visi&oacute;n</h3>
	                    <p>
	                    	Convertirnos en aliados estratégicos de nuestros clientes para el desarrollo e implementación de soluciones y de tecnologías innovadoras que les ayuden en la toma de decisiones a través 
                            de nuestro entendimiento de los mercados, del diseño de propuestas concretas y de la capacitación continua del capital humano.
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
	                	      
                            <nav id="entuizer">
                                  <UL>
                                   <li class="var_nav">
                                      <div class="link_bg"></div>
                                      <div class="link_title">
                                        <div class=icon> 
                                            <img class="img-thumbnail" src="{{ URL::to('img/valores_entuizer/EN_VALORES_1INTEGRIDAD VF.png') }}">
                                        </div>
                                        <a href="#integridad"><span>Integridad</span></a>
                                      </div>
                                   </li>
                                   <li class="var_nav">
                                      <div class="link_bg"></div>
                                      <div class="link_title">
                                        <div class=icon> 
                                            <img class="img-thumbnail" src="{{ URL::to('img/valores_entuizer/EN_VALORES_2PROACTIVIDAD VF.png') }}">
                                        </div>
                                        <a href="#proactividad"><span>Proactividad</span></a>
                                      </div>
                                   </li>
                                   <li class="var_nav">
                                      <div class="link_bg"></div>
                                      <div class="link_title">
                                        <div class=icon> 
                                           <img class="img-thumbnail" src="{{ URL::to('img/valores_entuizer/EN_VALORES_3COMPROMISO VF.png') }}"> 
                                        </div>
                                        <a href="#compromiso"><span>Compromiso</span></a>
                                      </div>
                                   </li>
                                   <li class="var_nav">
                                      <div class="link_bg"></div>
                                      <div class="link_title">
                                        <div class=icon> 
                                            <img class="img-thumbnail" src="{{ URL::to('img/valores_entuizer/EN_VALORES_4COLABORACION VF.png') }}">
                                        </div>
                                      <a href="#colaboracion"><span>Colaboración</span></a>
                                      </div>
                                   </li>
                                      <li class="var_nav">
                                      <div class="link_bg"></div>
                                      <div class="link_title">
                                        <div class=icon> 
                                            <img class="img-thumbnail" src="{{ URL::to('img/valores_entuizer/EN_VALORES_5GESTION DEL CAMBIO VF.png') }}">
                                        </div>
                                      <a href="#gestion_al_cambio"><span>Adaptabilidad al Cambio</span></a>
                                      </div>
                                   </li>
                                      <li class="var_nav">
                                      <div class="link_bg"></div>
                                      <div class="link_title">
                                        <div class=icon> 
                                            <img class="img-thumbnail" src="{{ URL::to('img/valores_entuizer/EN_VALORES_6PENSAMIENTO CREATIVO VF.png') }}">
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