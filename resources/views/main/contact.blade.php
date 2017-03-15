@extends('layouts.main')

@section('content')
<meta name="_token" content="{!! csrf_token() !!}"/>
<!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="glyphicon glyphicon-phone-alt"></i>
                        <h1>Contacto</h1>
                        <p>Nos ponemos a tus órdenes para todo tema relacionado con el área.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="openModal" class="modalDialog">
            <div class="col-sm-7 contact-form wow fadeInLeft">
                <a href="#close" title="Close" class="close">X</a>
	                    <p>
	                    	
	                    </p>
                        <div id="s" class="alert alert-success" style="display:none">Enviado con &eacute;xito</div>
                        <div id="f" class="alert alert-danger" style="display:none">Falla al enviar</div>
	                    <form role="form" action="" method="post">
	                    	<div class="form-group">
	                    		<label for="contact-name">Nombre</label>
	                        	<input type="text" name="name" placeholder="Ingresa tu nombre..." class="contact-name" id="contact-name">
	                        </div>
	                    	<div class="form-group">
	                    		<label for="contact-email">Email</label>
	                        	<input type="text" name="email" placeholder="Ingresa tu dirección de correo..." class="contact-email" id="contact-email">
	                        </div>
	                        <div class="form-group">
	                        	<label for="contact-subject">Asunto</label>
	                        	<input type="text" name="subject" placeholder="Tu asunto..." class="contact-subject" id="contact-subject">
	                        </div>
	                        <div class="form-group">
	                        	<label for="contact-message">Mensaje</label>
	                        	<textarea name="message" placeholder="Tu mensaje..." class="contact-message" id="contact-message"></textarea>
	                        </div>
	                        <button id="actionSend" type="submit" class="btn">Enviar</button>
	                    </form>
	                </div>
        </div>
        
        
        <!--  -->
        <div class="services-full-width-container">
        	<div class="container">
	            <div class="row">
	            
                    <div class="col-sm-6 services-half-width-text wow fadeInUp card">
	                    
                        <input type="hidden" value="0">
                        
                        <img src="{{ URL::to('img/contacto/122 - Micaela Llano.jpg') }}" class="img-fluid img-thumbnail image-card">
                        
                        <h4>Micaela Llano</h4>
                        <h3>Capital Humano</h3>
                        <!--<p>micaela.llano@advanzer.com</p>-->
                        
                        <a id="m1" class="fa fa-envelope-o btn send-mail" href="#openModal"></a>
                        
	                </div>
                    <div class="col-sm-6 services-half-width-text wow fadeInUp card">
                        
                        <img src="{{ URL::to('img/contacto/amira1.jpg') }}" class="img-fluid img-thumbnail image-card">
                        
                        <h4>Amira Ch&aacute;vez</h4>
	                    <h3>Capital Humano</h3>
                        <!--<p>amira.chavez@advanzer.com</p>-->
                        
                        <a id="m2" class="fa fa-envelope-o btn send-mail" href="#openModal"></a>
                        
	                </div>
                    
                    <div class="col-sm-6 services-half-width-text wow fadeInUp card">
                        
                        <img src="{{ URL::to('img/contacto/melissa 1.jpg') }}" class="img-fluid img-thumbnail image-card">
                        
                        <h4>Melissa P&eacute;rez</h4>
	                    <h3>Capital Humano</h3>
                        <!--<p>melissa.perez@advanzer.com</p>-->
                        
                        <a id="m3" class="fa fa-envelope-o btn send-mail" href="#openModal"></a>
                    
	                </div>
                    
                    <div class="col-sm-6 services-half-width-text wow fadeInUp card">
                        
                        <img src="{{ URL::to('img/contacto/karla1.jpg') }}" class="img-fluid img-thumbnail image-card">
                        
                        <h4>Karla Navarro</h4>
	                    <h3>Capital Humano</h3>
                        <!--<p>karla.navarro@advanzer.com</p>-->
                        
                        <a id="m4" class="fa fa-envelope-o btn send-mail" href="#openModal"></a>
                    
	                </div>
                    
                    <div class="col-sm-6 services-half-width-text wow fadeInUp card">
                        
                        <img src="{{ URL::to('img/contacto/martin 1.jpg') }}" class="img-fluid img-thumbnail image-card">
                        
                        <h4>Mart&iacute;n Garza</h4>
	                    <h3>Finanzas</h3>
                        <!--<p>martin.garza@advanzer.com</p>-->
                        
                        <a id="m5" class="fa fa-envelope-o btn send-mail" href="#openModal"></a>
                    
	                </div>
                    
                    <div class="col-sm-6 services-half-width-text wow fadeInUp card">
                        
                        <img src="{{ URL::to('img/contacto/167.jpg') }}" class="img-fluid img-thumbnail image-card">
                        
                        <h4>Rom&aacute;n Uranga</h4>
	                    <h3>Contabilidad</h3>
                        <!--<p>roman.uranga@advanzer.com</p>-->
                        
                        <a id="m6" class="fa fa-envelope-o btn send-mail" href="#openModal"></a>
                    
	                </div>
                    
                    <div class="col-sm-6 services-half-width-text wow fadeInUp card">
                        
                        <img src="{{ URL::to('img/contacto/carlos1.jpg') }}" class="img-fluid img-thumbnail image-card">
                        
                        <h4>Adri&aacute;n Dom&iacute;guez</h4>
	                    <h3>Contabilidad</h3>
                        <!--<p>carlos.dominguez@advanzer.com</p>-->
                        
                        <a id="m7" class="fa fa-envelope-o btn send-mail" href="#openModal"></a>
                    
	                </div>
                    
                    <div class="col-sm-6 services-half-width-text wow fadeInUp card">
                        
                        <img src="{{ URL::to('img/contacto/keren.jpg') }}" class="img-fluid img-thumbnail image-card">
                        
                        <h4>Keren Lozano</h4>
	                    <h3>Vi&aacute;ticos</h3>
                        <!--<p>keren.lozano@advanzer.com</p>-->
                        
                        <a id="m8" class="fa fa-envelope-o btn send-mail" href="#openModal"></a>
                    
	                </div>
                    
                    <div class="col-sm-6 services-half-width-text wow fadeInUp card">
                        
                        <img src="{{ URL::to('img/contacto/anaid1.jpg') }}" class="img-fluid img-thumbnail image-card">
                        
                        <h4>Anaid Montoya</h4>
	                    <h3>Asistente Direcci&oacute;n</h3>
                        <!--<p>anaid.montoya@advanzer.com</p>-->
                        
                        <a id="m9" class="fa fa-envelope-o btn send-mail" href="#openModal"></a>
                    
	                </div>
                    
                    <div class="col-sm-6 services-half-width-text wow fadeInUp card">
                        
                        <img src="{{ URL::to('img/contacto/230.jpg') }}" class="img-fluid img-thumbnail image-card">
                        
                        <h4>Wendy Uribe</h4>
	                    <h3>Recepci&oacute;n Ciudad de M&eacute;xico</h3>
                        <!--<p>awendy.uribe@advanzer.com</p>-->
                        
                        <a id="m10" class="fa fa-envelope-o btn send-mail" href="#openModal"></a>
                    
	                </div>
                    
                    <div class="col-sm-6 services-half-width-text wow fadeInUp card">
                        
                        <img src="{{ URL::to('img/contacto/166.jpg') }}" class="img-fluid img-thumbnail image-card">
                        
                        <h4>Belinda L&oacute;pez</h4>
	                    <h3>Project Controlling</h3>
                        <!--<p>belinda.lopez@advanzer.com</p>-->
                        
                        <a id="m11" class="fa fa-envelope-o btn send-mail" href="#openModal"></a>
                    
	                </div>
                    
                    <!--<div class="col-sm-6 services-half-width-text wow fadeInUp card">
                        
                        <img src="{{ URL::to('img/contacto/198.jpg') }}" class="img-fluid img-thumbnail image-card">
                        
                        <h4>Adriana Peralta</h4>
	                    <h3>Gesti&oacute;n Administrativa</h3>
                        <p>adriana.peralta@advanzer.com</p>
                        
                        <a id="m10" class="fa fa-envelope-o btn send-mail" href="#openModal"></a>
                    
	                </div>-->

                    <div class="col-sm-6 services-half-width-text wow fadeInUp card">
                        
                        <img src="{{ URL::to('img/contacto/33.jpg') }}" class="img-fluid img-thumbnail image-card">
                        
                        <h4>Gabriela Rodr&iacute;guez</h4>
                        <h3>Mercadotecnia</h3>
                        <!--<p>gabriela.rodriguez@advanzer.com</p>-->
                        
                        <a id="m12" class="fa fa-envelope-o btn send-mail" href="#openModal"></a>
                    
                    </div>
                    
                    <div class="col-sm-6 services-half-width-text wow fadeInUp card">
                        
                        <img src="{{ URL::to('img/contacto/39.jpg') }}" class="img-fluid img-thumbnail image-card">
                        
                        <h4>Rodolfo Cort&eacute;s</h4>
                        <h3>Arquitectura de Soluciones</h3>
                        <!--<p>rodolfo.cortes@advanzer.com</p>-->
                        
                        <a id="m13" class="fa fa-envelope-o btn send-mail" href="#openModal"></a>
                    
                    </div>
                    
                    <div class="col-sm-6 services-half-width-text wow fadeInUp card">
                        
                        <img src="{{ URL::to('img/contacto/alejandra1.jpg') }}" class="img-fluid img-thumbnail image-card">
                        
                        <h4>Alejandra Torres</h4>
	                    <h3>Arquitectura de Soluciones</h3>
                        <!--<p>alejandra.torres@advanzer.com</p>-->
                        
                        <a id="m14" class="fa fa-envelope-o btn send-mail" href="#openModal"></a>
                    
	                </div>
                    
                    <div class="col-sm-6 services-half-width-text wow fadeInUp card">
                        
                        <img src="{{ URL::to('img/contacto/zama 1.jpg') }}" class="img-fluid img-thumbnail image-card">
                        
                        <h4>Juan Carlos Zamarr&oacute;n</h4>
                        <h3>Arquitectura de Soluciones</h3>
                        <!--<p>juancarlos.zamarron@advanzer.com</p>-->
                        
                        <a id="m15" class="fa fa-envelope-o btn send-mail" href="#openModal"></a>
                    
                    </div>
                    
	            </div>
	        </div>
        </div>
@endsection

@section('script')
        <script>
            //$("#company").addClass("active");
            $("#contact").addClass("active");
            
            var destinatario = "";
            
            $(document).ready(function(){
                
                $(".send-mail").click(function(){
                    destinatario = this.id;
                    //alert($('meta[name=_token]').attr('content'));
                });
                
                $("#actionSend").click(function(){
                    
                    var name = $("#contact-name");
                    var email = $("#contact-email");
                    var subject = $("#contact-subject");
                    var message = $("#contact-message");
                    
                    $.ajaxSetup({
                        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
                    });
                    
                    $.ajax({
                  
                        url: "{{ URL::to('contacto/contactarEmpleado') }}",
                        type: "POST",
                        data:{
                            _token: $('meta[name=_token]').attr('content'),
                            name: name.val(),
                            email: email.val(),
                            subject: subject.val(),
                            message: message.val(),
                            employed: destinatario
                            },
                        dataType: "text"
                    
                    }).done(function(data) {
                        console.log(data);
                        //window.location.href = "#nus";
                        //$("#nus").removeClass("hide");
                        $("#s").show("slow");
                        name.val("");
                        email.val("");
                        subject.val("");
                        message.val("");
                    }).fail(function(data) {
                        console.log(data);
                        //window.location.href = "#nuf";
                        //$("#nuf").removeClass("hide");
                        $("#f").show("slow");
                    });

                });
                
            });
            
            
        </script>
@endsection