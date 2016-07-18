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
	            		<p>Vi&aacute;ticos y Gastos de Viaje</p>
                        
	            	</div>
                    
	            </div>

	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    
	                    <p>En esta sección se encuentran los lineamientos para solicitar Viáticos (procedimiento, formatos, tarifas y conceptos autorizados) así como las instrucciones para realizar la Comprobación de Gastos.<br>
                        Es muy importante que las descargues y tengas a la mano cada vez que vayas a realizar un trámite.<br>
                        Para cualquier duda relacionada a esta política, puedes contactar a:<br>
                        Román Uranga<br>
                        roman.uranga@advanzer.com<br>
                        Tel. 8286-9690 ext. 9695</p>
                        
                        <h5>NOTAS:</h5>
                        
                        <ul>
                            <li>No olvides utilizar los formatos según la empresa que te paga la nómina: Advanzer o Serzium.</li>
                            <li>Firma de conformidad la última hoja del Manual de Políticas y Procedimientos para Viáticos y Gastos de Viaje y entrégala a Capital Humano.</li>
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