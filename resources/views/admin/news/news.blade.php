@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Noticias</div>
                    
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
                                    <a class="glyphicon glyphicon-remove" href="{{ URL::to('advanzer-admin/eliminar_usuario').'/'.$n->id }}"></a>
                                    <a class="glyphicon glyphicon-edit" href="{{ URL::to('advanzer-admin/eliminar_usuario').'/'.$n->id }}"></a>
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
</script>
    
<link href="{{ URL::to('vendors/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" media="screen">

<script src="{{ URL::to('vendors/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::to('vendors/datatables/dataTables.bootstrap.js') }}"></script>
<script src="{{ URL::to('js/admin/tables.js') }}"></script>
        
@endsection