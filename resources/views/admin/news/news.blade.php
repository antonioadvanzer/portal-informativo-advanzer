@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Noticias</div>
                    
				</div>
                
                <div id="editModal" class="modalDialog">
                    <div class="contact-form wow fadeInLeft">
                        <a href="#close" title="Close" class="close">X</a>
                        <div align="center">
                            <h4>Publicar Noticia en Carrusel</h4>
                            <h5>Podra activar y desactivar la noticia dentro del carrusel, siempre que esta no sea eliminada del sistema</h5>
                            <br>
                            <br>
                            <h6>Estado: <a id="status" class="alert alert-info">Activo</a> </h6>
                            <br>
                            <br>
                            <a class="button" id="changeCircularStatus">Estado</a>
                            <br/>
                            <br/>
                        </div>
                    </div>
                </div>
        
                <div id="confirmModal" class="modalDialog">
                    <div class="contact-form wow fadeInLeft">
                        <a href="#close" title="Close" class="close">X</a>
                        <div align="center">
                            <h4>¿Estas seguro(a) que deseas eliminar esta Noticia?</h4>
                            <h5><b>Atenci&oacute;n:</b> esta acci&oacute;n tambi&eacute;n eliminará a los elementos de carrusel ligados.</h5>
                            <a class="button" id="confirmDeleteCircular">Aceptar</a>
                            <a class="button" href="#close">Cancelar</a>
                            <br/>
                            <br/>
                        </div>
                    </div>
                </div>
            
  				<div class="panel-body">
                    <a class="btn btn-success" href="{{ URL::to('advanzer-admin/nueva_noticia') }}">Nuevo</a><br><br>
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>Titulo</th>
								<th>Sumario</th>
								<th>Descripcion</th>
                                <th>Fecha</th>
                                <th>Acciones</th>
						</thead>
						<tbody>
                            @foreach($news as $new => $n)
							<tr class="odd gradeX">
								<td>{{ $n->title }}</td>
								<td>{{ $n->summary }}</td>
                                
                                <?php 
                                    $max_length = 80;
                                    $s = $n->content;
                                    if (strlen($s) > $max_length)
                                    {
                                        $offset = ($max_length - 3) - strlen($s);
                                        $s = substr($s, 0, strrpos($s, ' ', $offset)) . '...';
                                    }
                                ?>
                                
								<td>{{ $s }}</td>
                                <td>{{ $n->created_at }}</td>
                                <td>
                                    <a id="{{ $n->id }}" name="{{ $n->getElementsCarrusel()->first()['used'] }}" class="glyphicon glyphicon-list elementCarrusel" href="#editModal"></a>
                                    <a class="glyphicon glyphicon-edit" href="{{ URL::to('advanzer-admin/editar_noticia').'/'.$n->id }}"></a>
                                    <a id="{{ $n->id }}" class="glyphicon glyphicon-remove deleteCircular" href="#confirmModal"></a>
                                </td>
							</tr>
                            @endforeach
                        </tbody>
					</table>
  				</div>
  			</div>
</div>

@endsection

@section('script')
    
<script>
    $("#news").addClass("current");
    
    var circular = "";
    var url = "{{ URL::to('advanzer-admin/eliminar_noticia') }}"
    
    $("#confirmDeleteCircular").click( function () {
        window.location.href = circular;
    });
    
    $(".deleteCircular").click( function (event){
        
        circular = url + '/' + event.target.id;
    });
    
    var urlE = "{{ URL::to('advanzer-admin/cambiar_estado_elemento_carrusel') }}"
    
    $("#changeCircularStatus").click( function () {
        window.location.href = circular;
    });
    
    $(".elementCarrusel").click( function (event){
        
        circular = urlE + '/' + event.target.id;
        $("#status").html(event.target.name == 1 ? "Activo" : "Inactivo");
        $("#changeCircularStatus").html(event.target.name == 1 ? "Desactivar" : "Activar");
        
    });
    
</script>
    
<link href="{{ URL::to('vendors/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" media="screen">

<script src="{{ URL::to('vendors/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::to('vendors/datatables/dataTables.bootstrap.js') }}"></script>
<script src="{{ URL::to('js/admin/tables.js') }}"></script>
        
@endsection