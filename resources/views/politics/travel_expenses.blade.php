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
                        <span class="politic-icon icon-travel"></span>
                        <p class="politic-tittle">Vi&aacute;ticos y Gastos de Viaje</p>
	            	</div>
	            </div><br><br>

	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    
	                    <p>En esta sección se encuentran los lineamientos para solicitar Viáticos (procedimiento, formatos, tarifas y conceptos autorizados) así como las instrucciones para realizar la Comprobación de Gastos.<br>
                        Es muy importante que las descargues y tengas a la mano cada vez que vayas a realizar un trámite.<br>
                        Para cualquier duda relacionada a esta política, puedes contactar a:<br>
                        Juan Paulo Rodriguez<br>
                        juanpaulo.rodriguez@advanzer.com<br>
                        Ext. 1003</p>
                        
                        <h5>NOTAS:</h5>
                        
                        <ul>
                            <li>No olvides utilizar los formatos según la empresa que te paga la nómina: Advanzer o Serzium.</li>
                            <li>Firma de conformidad la última hoja del Manual de Políticas y Procedimientos para Viáticos y Gastos de Viaje y entrégala a Capital Humano.</li>
                        </ul>
                        
	                </div>
                    
                    <div class="col-sm-12 services-full-width-text wow fadeInLeft">
                        <h3>Formatos descargables:</h3>
                        <ul>
                            <li>
                                <i class="fa fa-file-pdf-o"></i>
                                <a href="{{ URL::to('documentos/Politicas para gastos de Viaje.pdf') }} ">Pol&iacute;ticas para Viaticos y Gastos de Viaje</a>
                            </li>
                            <li>
                                <i class="fa fa-file-excel-o"></i>
                                <a href="{{ URL::to('documentos/F1. Solicitud para viaje.xlsx') }}">F1. Solicitud de gastos de viaje</a>
                            </li>
                            <li>
                                <i class="fa fa-file-excel-o"></i>
                                <a href="{{ URL::to('documentos/F2. Comprobacion de gastos de viaje.xlsx') }}">F2. Comprobacion de gastos de viaje</a>
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