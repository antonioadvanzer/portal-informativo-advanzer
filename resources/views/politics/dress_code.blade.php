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
	            		<p>C&oacute;digo de Vestimenta</p>
	            	</div>
	            </div>

	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h4>Establece el código de vestimenta para todo el personal de Advanzer que se encuentra ubicado tanto en oficinas de la empresa como en las instalaciones de nuestros clientes.</h4>
	                    
                        <p>
                            
                        </p>
                            <ul>
                                <li>
                                    La identidad de ADVANZER es la expresión de quiénes somos y qué somos.
                                </li>
                                <li>
                                    Es de nuestro interés reflejar una imagen de profesionalismo, apertura y seriedad.
                                </li>
                                <li>
                                    La vestimenta es parte de nuestra imagen y como tal, debe de ser adecuada a lo que queremos expresar como empresa.
                                </li>
                                <li>
                                    Los directores deberán reportar via e-mail al recurso que falte a las normas descritas copiando a Capital Humano (Micaela Llano) y con esto se generará un warning
                                    <ul>
                                        <li>1 falta - Warning # 1</li>
                                        <li>2 faltas-  Warning # 2</li>
                                        <li>3 faltas-  No podrá obtener una calificación mayor a “C” en su evaluación de desempeño y el caso deberá evaluarse en la junta directiva anual de evaluación.</li>
                                    </ul>
                                </li>
                            </ul>
                        
                    </div>
	            </div>
                
                <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h4>La Vestimenta adecuada dependerá de Tu Asignación</h4>
	                    
                        <ul>   
                            <li>Si trabajas en las oficinas del cliente: Deberás vestir de Formal o Business Casual. El Director del Proyecto dará a conocer al equipo de trabajo de Advanzer el código que aplica de acuerdo a las Políticas del Cliente.</li>
                            <li>Si trabajas en las oficinas de Advanzer: Business Casual y aplica de Lunes a Viernes</li>
                            <li>El vestir mezclilla de corte clásico es permitido sólo los viernes.</li>
                            <li>Los shorts, ni los pantalones arriba de las rodillas, serán permisibles al vestir.</li>
                            <li>La vestimenta formal tradicional es requerida en caso de tener un compromiso previamente programado con algún cliente ese día.</li>
                        </ul>
                        
                        <p class="alert alert-info col-sm-7">
                          Aclarando que Business Casual en el ámbito laboral, significa vestir distinto al traje tradicional con la corbata, conservando el objetivo de mostrar la seriedad y el profesionalismo de la empresa. No puede confundirse ni asociarse con vestir relajadamente.  
                        </p>
                        
                    </div>
	            </div>
                
                <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h4>Permitido Mujeres</h4>
	                    
                        <table class="responstable" style="text-align: left;">
                            <tr>
                                <td style="text-align: left;">
                                    <ul>
                                        <li>Vestimenta limpia y planchada.</li>
                                        <li>Blusas de manga corta, ¾ y larga.</li>
                                        <li>Blusas sin manga estilo de oficina.</li>
                                        <li>Blusas con cuello “tortuga”.</li>
                                        <li>Playera tipo polo.</li>
                                        <li>Blazer o saco.</li>
                                        <li>Pantalón de vestir, de pinzas o corte de oficina.</li>
                                        <li>Pantalón corto, debajo de la rodilla.</li>
                                        <li>Coordinados.</li>
                                        <li>Faldas con 4 dedos horizontales arriba de la rodilla como máximo.</li>
                                        <li>Cualquier ropa de mezclilla de corte discreto solamente los viernes. (estando asignado a cliente, deberá apegarse a la política y código de vestimenta del cliente).</li>
                                        <li>Zapatos de piso, tacón bajo o alto.</li>
                                        <li>En caso de usar medias deberán ser tradicionales de colores neutros.</li>
                                    </ul>
                                </td>
                                <td>
                                    <img class="img-responsive" src="{{ URL::to('img/politicas/mujersi.jpg') }}">
                                </td>
                            </tr>
                        </table>
                        
                    </div>
	            </div>
                
                <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h4>No Permitido Mujeres</h4>
	                    
                        <table class="responstable" style="text-align: left;">
                            <tr>
                                <td style="text-align: left;">
                                    <ul>
                                        <li>Ropa arrugada, parchada o con orificios.</li>
                                        <li>Ropa con colores fosforescentes.</li>
                                        <li>Ropa deportiva, conjuntos de pants, sudaderas, playeras o uniforme de algún equipo de deportes.</li>
                                        <li>Playeras con logotipos de otras empresas.</li>
                                        <li>Bermudas o Shorts.</li>
                                        <li>Blusas de ombligueras, strapless, o que dejen al descubierto el abdomen.</li>
                                        <li>Blusas transparentes o con escotes pronunciados.</li>
                                        <li>Pantalones cortos arriba de la rodilla.</li>
                                        <li>Faldas o pantalones de piel.</li>
                                        <li>Tenis y sandalias conocidas como “pata de gallo”.</li>
                                        <li>Sombreros.</li>
                                        <li>Gorras.</li>
                                        <li>Pearcings a la vista.</li>
                                        <li>Chamarras rockeras</li>
                                    </ul>
                                </td>
                                <td>
                                    <img class="img-responsive" src="{{ URL::to('img/politicas/mujerno.jpg') }}">
                                </td>
                            </tr>
                        </table>
                        
                    </div>
	            </div>
                
                <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h4>Permitido Hombres</h4>
	                    
                        <table class="responstable" style="text-align: left;">
                            <tr>
                                <td style="text-align: left;">
                                    <ul>
                                        <li>Ropa arrugada, parchada o con orificios.</li>
                                        <li>Ropa con colores fosforescentes.</li>
                                        <li>Ropa deportiva, conjuntos de pants, sudaderas, playeras o uniforme de algún equipo de deportes.</li>
                                        <li>Playeras con logotipos de otras empresas.</li>
                                        <li>Bermudas o Shorts.</li>
                                        <li>Blusas de ombligueras, strapless, o que dejen al descubierto el abdomen.</li>
                                        <li>Blusas transparentes o con escotes pronunciados.</li>
                                        <li>Pantalones cortos arriba de la rodilla.</li>
                                        <li>Faldas o pantalones de piel.</li>
                                        <li>Tenis y sandalias conocidas como “pata de gallo”.</li>
                                        <li>Sombreros.</li>
                                        <li>Gorras.</li>
                                        <li>Pearcings a la vista.</li>
                                        <li>Chamarras rockeras.</li>
                                    </ul>
                                </td>
                                <td>
                                    <img class="img-responsive" src="{{ URL::to('img/politicas/hombresi.jpg') }}">
                                </td>
                            </tr>
                        </table>
                        
                    </div>
	            </div>
                
                
                <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h4>No Permitido Hombres</h4>
	                    
                        <table class="responstable" style="text-align: left;">
                            <tr>
                                <td style="text-align: left;">
                                    <ul>
                                        <li>Ropa arrugada, parchada o con orificios.</li>
                                        <li>Ropa con colores fosforescentes.</li>
                                        <li>Ropa deportiva, conjuntos de pants, sudaderas, playeras o uniforme de algún equipo de deportes.</li>
                                        <li>Playeras sin manga.</li>
                                        <li>Camisas traslúcidas.</li>
                                        <li>Corbatas con caricaturas o llamativas.</li>
                                        <li>Playeras transparentes o de lycra.</li>
                                        <li>Playeras con logotipos de otras empresas.</li>
                                        <li>Playeras con fotos, imágenes o leyendas.</li>
                                        <li>Playeras con palabras altisonantes.</li>
                                        <li>Bermudas o shorts.</li>
                                        <li>Pantalones de piel.</li>
                                        <li>Zapatos sin calcetines.</li>
                                        <li>Tenis y huaraches.</li>
                                        <li>Cinturón vaquero o con hebillas grandes.</li>
                                        <li>Sombreros vaqueros.</li>
                                        <li>Gorras.</li>
                                        <li>Aretes.</li>
                                        <li>Cabello debajo de los hombros.</li>
                                        <li>Pearcings a la vista.</li>
                                        <li>Chamarras rockeras.</li>
                                    </ul>
                                </td>
                                <td>
                                    <img class="img-responsive" src="{{ URL::to('img/politicas/hombreno.jpg') }}">
                                </td>
                            </tr>
                        </table>
                        
                    </div>
	            </div>
                
                <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h4>Consejos B&aacute;sicos</h4>
	                    
                        <table class="responstable">
                            <tr>
                                <th>Mujeres</th>
                                <th>Hombres</th>
                            </tr>
                            <tr>
                                <td>
                                    <ul>
                                        <li>Viste discretamente y formal en el trabajo, evita las blusas muy ajustadas, escotadas y cortas.</li>
                                        <li>Elige zapatos formales, de acuerdo a la temporada y de línea conservadora, siempre limpios.</li>
                                        <li>Sustituye las mayas estampadas o texturas gruesas, por las naturales y de tonos neutros.</li>
                                        <li>Luce un maquillaje natural y discreto.</li>
                                        <li>Peina tu cabello de manera sencilla, sin extravagancias.</li>
                                        <li>Refleja una imagen de respeto y profesionalismo.</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li>Viste alineadamente, evita el andar desfajado o arrugado.</li>
                                        <li>Cuida no aparentar imagen fachosa o relajada.</li>
                                        <li>Luce zapatos limpios usando siempre calcetines.</li>
                                        <li>Evita ropa ajustada u holgada.</li>
                                        <li>Porta camisas o camisetas bien planchadas de colores clásicos.</li>
                                        <li>Elige corbatas clásicas que lleguen a la hebilla.</li>
                                        <li>Cabello siempre corto.</li>
                                        <li>Refleja una imagen de respeto y profesionalismo.</li>
                                    </ul> 
                                </td>
                            </tr>
                        </table>
                        
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