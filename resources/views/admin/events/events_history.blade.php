@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">&Aacute;lbumes de Eventos</div>
                    
				</div>
                
                <div id="confirmModal" class="modalDialog">
                    <div class="contact-form wow fadeInLeft">
                        <a href="#close" title="Close" class="close">X</a>
                        <div align="center">
                            <h4>¿Estas seguro(a) que deseas eliminar este &Aacute;lbum?</h4>
                            
                            <a class="button" id="confirmDeleteCircular">Aceptar</a>
                            <a class="button" href="#close">Cancelar</a>
                            <br/>
                            <br/>
                        </div>
                    </div>
                </div>
            
  				<div class="panel-body">
                    <a class="btn btn-success" href="{{ URL::to('advanzer-admin/nuevo_evento') }}">Nuevo</a><br><br>
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
                            @foreach($events as $bir => $e)
							<tr class="odd gradeX">
								<td>{{ $e->title }}</td>
								<td>{{ $e->summary }}</td>
                                
                                <?php 
                                    $max_length = 80;
                                    $s = $e->content;
                                    if (strlen($s) > $max_length)
                                    {
                                        $offset = ($max_length - 3) - strlen($s);
                                        $s = substr($s, 0, strrpos($s, ' ', $offset)) . '...';
                                    }
                                ?>
                                
								<td>{{ $s }}</td>
                                <td>{{ $e->date }}</td>
                                <td>
                                    <a class="glyphicon glyphicon-edit" href="{{ URL::to('advanzer-admin/editar_event').'/'.$e->id }}"></a>
                                    <a id="{{ $e->id }}" class="glyphicon glyphicon-remove deleteCircular" href="#confirmModal"></a>
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
    $("#event-history").addClass("current");
    
    var circular = "";
    var url = "{{ URL::to('advanzer-admin/eliminar_evento') }}"
    
    $("#confirmDeleteCircular").click( function () {
        window.location.href = circular;
    });
    
    $(".deleteCircular").click( function (event){
        
        circular = url + '/' + event.target.id;
    });
    
</script>
    
<link href="{{ URL::to('vendors/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" media="screen">

<script src="{{ URL::to('vendors/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::to('vendors/datatables/dataTables.bootstrap.js') }}"></script>
<script src="{{ URL::to('js/admin/tables.js') }}"></script>
        
@endsection