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
	            		<p>Comunicaci&oacute;n Interna</p>
	            	</div>
	            </div>

	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3>1. Definición</h3>
	                    
                        <p>
                        La Comunicación Interna es el proceso que permite a los empleados de la organización realizar la labor encomendada a través de transmitirse la información recíprocamente e interpretarla.
                            <br>
                        La Comunicación interna cumple una serie de funciones que le permiten a la organización mejorar la eficacia en toda su actividad interior, lo cual redundará, sin duda, en una mayor competitividad externa de la compañía. 
                        </p>
                            
                    </div>
	            </div>
                
                <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3>2. Objetivo</h3>
	                    
                        <p>
                        Esta política tiene como objetivo normar los criterios de comunicados internos de las diversas áreas de la organización buscando facilitar:
                        </p>
                        
                        <ul>
                            <li>
                                La comunicación oportuna entre la empresa y su gente
                            </li>
                            <li>
                                La comunicación entre la gente
                            </li>
                        </ul>
                            
                    </div>
	            </div>
                
                <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3>3. Medios de Comunicaci&oacute;n</h3>
	                    
                        <p>
                            Se consideran medios de difusión y/o comunicación oficiales en la Organización:
                        </p>
                        
                        <ul>
                            <li>
                                Correo electrónico de la empresa: los correos electrónicos deben ser concisos y precisos en el tema a tratar. Así mismo deben involucrar solamente a las personas que tengan injerencia en el tema a tratar.
                            </li>
                            <li>
                                <b>Teléfono/Celular:</b> este medio permite la comunicación inmediata para temas de relevancia. En el caso de los celulares personales, solamente el propietario puede compartir su número con quien considere necesario.
                            </li>
                            <li>
                                <b>Portal de Capital Humano:</b> en este medio se publican y actualizan temas tales como: políticas y procedimientos, estructura organizacional, eventos internos, cumpleaños, etc.
                            </li>
                            <li>
                                <b>Portal de Mercadotecnia:</b> en este medio se publican y dan a conocer a todos los colaboradores de Advanzer los eventos, reconocimientos y logros en los que la empresa ha tenido alguna participación.
                            </li>
                            <li>
                                <b>Whatsapp:</b> esta app facilita la comunicación cuando se requiere un dato urgente en particular y se pretende que no sustituya al correo electrónico sino que su uso sea solamente en casos particulares en donde se requiera una respuesta inmediata.
                            </li>
                            <li>
                                <b>Skype:</b> esta herramienta facilita la comunicación entre las áreas cuando el tema a tratar implica intercambio inmediato de ideas.
                            </li>
                        </ul>
                            
                    </div>
	            </div>
                
                <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3>4. Comunicaci&oacute;n Empresa – Colaboradores</h3>
	                    
                        <p>
                            Las áreas autorizadas para emitir comunicados a toda la organización son: Dirección General, Capital Humano, Administración y Mercadotecnia.
                            <br>
                            Los medios que la empresa tiene para difundir información son: el correo electrónico, el Portal de Capital Humano y el Portal de Mercadotecnia.
                        </p>
                        
                        <p>Los criterios que deben observarse para que alguna de estas áreas emita un comunicado son los siguientes:</p>
                        
                        <ul>
                            <li>La información debe ser relevante para toda la organización.</li>

                            <li>El asunto de mensaje debe diferenciarse con la frase “Comunicado Organizacional: Título del mensaje”. Este título deberá ser conciso y que represente de manera global el motivo del correo.</li>

                            <li>El cuerpo del mensaje debe ser claro, puntual y estructurado. Si se requiere ahondar o ser muy específico, se deberá adjuntar un archivo en formato PDF que contenga el detalle o bien, una liga que enlace el lugar para descargarlo de algún repositorio.</li>

                            <li>Los comunicados deben emitirse en el template designado para cada una de las áreas autorizadas.</li>

                            <li>El área emisora es responsable de la información y alcance de la misma.</li>

                            <li>En caso de alguna corrección utilizar FW y en el asunto anteponer: FE DE ERRATAS</li>

                            <li>El lenguaje utilizado en los comunicados debe ser congruente a la Visión 2020, es decir, considerar los siguientes elementos:

                                <ul>
                                    <li>Tratar de relacionar el comunicado con alguno de los pilares que forman de la Visión</li>

                                    <li>El tono del comunicado debe leerse “amigable”  sin perder su institucionalidad</li>
                                </ul>
                            </li>
                        </ul>
                        
                        <p>Si algún área diferente a las mencionadas requiere comunicar información a toda la organización, deberá hacerlo a través de Capital Humano vía su Gerente o Director.</p>
                        
                        <ul>
                            <li>Llenar correctamente toda la información solicitada en el formato <a href="#formato">“Petición de Comunicado Organizacional”</a>.</li>

                            <li>Solicitar la publicación al menos 3 días hábiles antes de la fecha de emisión, considerando que el comunicado está correcto y no hay cambios en el mismo.</li>
                        </ul>
                    </div>
	            </div>
                
                <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3>5.  Comunicaci&oacute;n entre Colaboradores</h3>
	                    
                        <p>
                            Los medios oficiales para la comunicación entre colaboradores son: correo electrónico, teléfono, WhatsApp y Skype.
                                <br>
                            Los criterios que norman la comunicación entre colaboradores son:
                        </p>
                        
                        <ul>
                            <li>
                                <i>Correo El&eacute;ctronico</i><br><br>
                                <ul>
                                    <li>La información se comparte solamente con quien debe tener acceso a ella.</li>

                                    <li>No deberá marcársele copia a personas ajenas al tema tratado salvo que el ir copiado tenga alguna implicación relevante.</li>

                                    <li>Este medio no debe utilizarse para temas personales, tales como: ventas, reuniones, invitaciones, etc.</li>

                                    <li>Cualquier información de la Organización y/o el cliente debe ser emitida vía el correo institucional.</li>
                                </ul>
                                <br>
                            </li>
                            <li>
                                <i>Tel&eacute;fono/Celular</i><br><br>
                                <ul>
                                    <li>Las llamadas que se realicen o reciban y que impliquen tratar temas confidenciales, deberán ser atendidas a discreción en algún área que así lo permita.</li>

                                    <li>Las llamadas a celulares personales, en horario fuera de oficina, se deberán realizar en horarios prudentes (ejemplo: evitar llamar a partir de las 9:00 pm o muy temprano en fin de semana).</li>

                                    <li>No deberán compartirse los números celulares de un colaborador. con terceros. La única persona autorizada a compartir un número celular personal es el propio colaborador.</li>
                                </ul>
                                <br>
                            </li>
                            <li>
                                <i>Whatsapp</i><br><br>
                                <ul>
                                    <li>El WhatsApp deberá utilizarse cuando se requiere tratar algún tema que implique una respuesta inmediata.</li>

                                    <li>Esta app deberá ser considerada un medio para agilizar la comunicación entre colaboradores, especialmente cuando no se está físicamente en la oficina o bien no se tiene acceso al correo electrónico.</li>

                                    <li>El realizar grupos de colaboradores dentro de la app ayuda a facilitar el tratar temas con mayor agilidad que si se realiza por correo.</li>

                                    <li>Esta app no sustituye al correo electrónico por lo que los temas sensibles deberán quedar documentados por correo.</li>
                                </ul>
                                <br>
                            </li>
                            <li>
                                <i>Skype</i><br><br>
                                <ul>
                                    <li>Es el comunicador oficial para temas que requieren intercambio de ideas inmediato</li>

                                    <li>Este medio no deberá utilizarse para realizar pedidos que requieran un proceso. Los procesos deben llevarse de acuerdo a como han sido establecidos.</li>

                                    <li>Esta herramienta no sustituye al correo electrónico por lo que los temas sensibles deberán quedar documentados por correo.</li>
                                </ul>
                                <br>
                            </li>
                        </ul>
                            
                    </div>
	            </div>
                
                <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3>6. Servicio de Seguimiento de Comunicaci&oacute;n Enviada</h3>
	                    
                        <p>
                            Existen comunicados que por su trascendencia o importancia requieren de un seguimiento en relación a si ha sido leído o no por el receptor. Para facilitar este seguimiento se cuenta con una herramienta de envío que nos permite determinar los siguientes indicadores:
                        </p>
                        
                        <ul>
                            <li>% de colaboradores que abren el mensaje vs total de mensaje enviados</li>

                            <li>% de colaboradores que no abren el mensaje.</li>

                            <li>Tiempo exacto de recepción y lectura.</li>

                            <li>Seguimiento a links o archivos adjuntos que puedan ir incluidos en el mensaje.</li>

                            <li>En cualquiera de los casos anteriores se puede identificar a los colaboradores.</li>
                            
                        </ul>
                            
                        <p>Puntos a considerar:</p>
                        
                        <ul>
                            <li>
                                Solamente los Directores podrán solicitar Gestión de Mensajes especificando los indicadores de su interés en el formato <a href="#formato">“Petición de Comunicado Organizacional”</a>.
                            </li>
                            <li>
                                Los indicadores solicitados deberán tener una justificación de peso para su análisis.
                            </li>
                            <li>
                                La información se entregará 1 semana después de la fecha límite de lectura que el Director le asigne al comunicado.
                            </li>
                        </ul>
                        
                    </div>
	            </div>
                
                <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3>7. Imagen Institucional</h3>
	                    
                        <p>
                            Todo correo (Outlook o Gmail) de la Organización deberá incluir la firma institucional que se le asigna a cada colaborador al ingresar a laborar. Esta firma no debe ser modificada.
                            <br>
                            La firma se compone de la siguiente información:
                        </p>
                        
                        <ul>
                        
                            <li>Nombre y primer apellido</li>

                            <li>Área a la que pertenece</li>

                            <li>Dirección y teléfono de la oficina</li>

                            <li>Correo electrónico</li>

                            <li>Página web de la empresa</li>

                        </ul>
                            
                        <p>
                            No deberá incluirse ninguna información adicional a la mencionada.
                            <br>
                            Cualquier observación no contenida en esta Política deberá ser resuelta por la Dirección General.
                        </p>
                        
                    </div>
	            </div>
                
	        </div>
        </div>

        <div id="formato" class="call-to-action-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-12 call-to-action-text wow fadeInLeftBig animated" style="visibility: visible; animation: fadeInLeftBig; -webkit-animation: fadeInLeftBig;">
	                    <p class="fa fa-file-text-o">
	                    	Petici&oacute;n de Comunicado Organizacional.
	                    </p>
	                    <div class="call-to-action-button">
	                        <a target="_blank" class="big-link-3" href="https://docs.google.com/a/advanzer.com/forms/d/1_WSYtE5N98kMtSCh_856ohe7QML22VswBa3UTbS9Pwg/viewform">Ir Ahora</a>
                            
	                    </div>
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