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
	                    <form role="form" action="" method="post">
	                    	<div class="form-group">
	                    		<label for="contact-name">Nombre</label>
	                        	<input type="text" id="name" name="name" placeholder="Ingresa tu nombre..." class="contact-name" id="contact-name">
	                        </div>
	                    	<div class="form-group">
	                    		<label for="contact-email">Email</label>
	                        	<input type="text" id="email" name="email" placeholder="Ingresa tu dirección de correo..." class="contact-email" id="contact-email">
	                        </div>
	                        <div class="form-group">
	                        	<label for="contact-subject">Asunto</label>
	                        	<input type="text" id="subject" name="subject" placeholder="Tu asunto..." class="contact-subject" id="contact-subject">
	                        </div>
	                        <div class="form-group">
	                        	<label for="contact-message">Mensaje</label>
	                        	<textarea id="message" name="message" placeholder="Tu mensaje..." class="contact-message" id="contact-message"></textarea>
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
                        
                        <img src="{{ URL::to('img/contacto/122.jpg') }}" class="img-fluid img-thumbnail image-card">
                        
                        <h4>Micaela Llano</h4>
                        <h3>Capital Humano</h3>
                        <p>micaela.llano@advanzer.com</p>
                        
                        <a id="m1" class="fa fa-envelope-o btn send-mail" href="#openModal"></a>
                        
	                </div>
                    <div class="col-sm-6 services-half-width-text wow fadeInUp card">
                        
                        <img src="{{ URL::to('img/contacto/68.jpg') }}" class="img-fluid img-thumbnail image-card">
                        
                        <h4>Amira Chavez</h4>
	                    <h3>Desarrollo de Talento</h3>
                        <p>amira.chavez@advanzer.com</p>
                        
                        <a id="m2" class="fa fa-envelope-o btn send-mail" href="#openModal"></a>
                        
	                </div>
                    
                    <div class="col-sm-6 services-half-width-text wow fadeInUp card">
                        
                        <img src="{{ URL::to('img/contacto/212.jpg') }}" class="img-fluid img-thumbnail image-card">
                        
                        <h4>Melissa Perez</h4>
	                    <h3>Reclutamiento</h3>
                        <p>melissa.perez@advanzer.com</p>
                        
                        <a id="m3" class="fa fa-envelope-o btn send-mail" href="#openModal"></a>
                    
	                </div>
                    
                    <div class="col-sm-6 services-half-width-text wow fadeInUp card">
                        
                        <img src="{{ URL::to('img/contacto/2132.jpg') }}" class="img-fluid img-thumbnail image-card">
                        
                        <h4>Karla Navarro</h4>
	                    <h3>Capital Humano</h3>
                        <p>karla.navarro@advanzer.com</p>
                        
                        <a id="m4" class="fa fa-envelope-o btn send-mail" href="#openModal"></a>
                    
	                </div>
                    
                    <div class="col-sm-6 services-half-width-text wow fadeInUp card">
                        
                        <img src="{{ URL::to('img/contacto/100.jpg') }}" class="img-fluid img-thumbnail image-card">
                        
                        <h4>Mart&iacuten Garza</h4>
	                    <h3>Finanzas</h3>
                        <p>martin.garza@advanzer.com</p>
                        
                        <a id="m5" class="fa fa-envelope-o btn send-mail" href="#openModal"></a>
                    
	                </div>
                    
                    <div class="col-sm-6 services-half-width-text wow fadeInUp card">
                        
                        <img src="{{ URL::to('img/contacto/167.jpg') }}" class="img-fluid img-thumbnail image-card">
                        
                        <h4>J&oacutese Rom&aacuten</h4>
	                    <h3>Finanzas</h3>
                        <p>roman.uranga@advanzer.com</p>
                        
                        <a id="m6" class="fa fa-envelope-o btn send-mail" href="#openModal"></a>
                    
	                </div>
                    
                    <div class="col-sm-6 services-half-width-text wow fadeInUp card">
                        
                        <img src="{{ URL::to('img/contacto/158.jpg') }}" class="img-fluid img-thumbnail image-card">
                        
                        <h4>Alejandra Torres</h4>
	                    <h3>General</h3>
                        <p>alejandra.torres@advanzer.com</p>
                        
                        <a id="m7" class="fa fa-envelope-o btn send-mail" href="#openModal"></a>
                    
	                </div>
                    
                    <div class="col-sm-6 services-half-width-text wow fadeInUp card">
                        
                        <img src="{{ URL::to('img/contacto/200.jpg') }}" class="img-fluid img-thumbnail image-card">
                        
                        <h4>Anaid Montoya</h4>
	                    <h3>Capital Humano</h3>
                        <p>anaid.montoya@advanzer.com</p>
                        
                        <a id="m8" class="fa fa-envelope-o btn send-mail" href="#openModal"></a>
                    
	                </div>
                    
                    <div class="col-sm-6 services-half-width-text wow fadeInUp card">
                        
                        <img src="{{ URL::to('img/contacto/166.jpg') }}" class="img-fluid img-thumbnail image-card">
                        
                        <h4>Belinda L&oacutepez</h4>
	                    <h3>Project Controlling</h3>
                        <p>belinda.lopez@advanzer.com</p>
                        
                        <a id="m9" class="fa fa-envelope-o btn send-mail" href="#openModal"></a>
                    
	                </div>
                    
                    <div class="col-sm-6 services-half-width-text wow fadeInUp card">
                        
                        <img src="{{ URL::to('img/contacto/198.jpg') }}" class="img-fluid img-thumbnail image-card">
                        
                        <h4>Adriana Peralta</h4>
	                    <h3>Gesti&oacuten Administrativa</h3>
                        <p>adriana.peralta@advanzer.com</p>
                        
                        <a id="m10" class="fa fa-envelope-o btn send-mail" href="#openModal"></a>
                    
	                </div>

                    <div class="col-sm-6 services-half-width-text wow fadeInUp card">
                        
                        <img src="{{ URL::to('img/contacto/33.jpg') }}" class="img-fluid img-thumbnail image-card">
                        
                        <h4>Gabriela Rodr&iacuteguez</h4>
                        <h3>Mercadotecnia</h3>
                        <p>gabriela.rodriguez@advanzer.com</p>
                        
                        <a id="m11" class="fa fa-envelope-o btn send-mail" href="#openModal"></a>
                    
                    </div>

                    <div class="col-sm-6 services-half-width-text wow fadeInUp card">
                        
                        <img src="{{ URL::to('img/contacto/39.jpg') }}" class="img-fluid img-thumbnail image-card">
                        
                        <h4>Rodolfo Cort&eacutes</h4>
                        <h3>Arquitectura de Soluciones</h3>
                        <p>rodolfo.cortes@advanzer.com</p>
                        
                        <a id="m12" class="fa fa-envelope-o btn send-mail" href="#openModal"></a>
                    
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
                    
                    var name = $("#name");
                    var email = $("#email");
                    var subject = $("#subject");
                    var message = $("#message");
                    
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
                    }).fail(function(data) {
                        console.log(data);
                        //window.location.href = "#nuf";
                        //$("#nuf").removeClass("hide");
                    });

                });
                
            });
            
            
        </script>
@endsection