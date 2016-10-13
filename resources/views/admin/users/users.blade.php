@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Usuarios Administradores</div>
                    
				</div>
        
                <div id="openModal" class="modalDialog">
                    <div class="contact-form wow fadeInLeft">
                        <a href="#close" title="Close" class="close">X</a>
                        <div align="center">
                            <h4>¿Estas seguro(a) que deseas eliminar este Usuario?</h4>
                            <a class="button" id="confirmDeleteUser">Aceptar</a>
                            <a class="button" href="#close">Cancelar</a>
                            <br/>
                            <br/>
                        </div>
                    </div>
                </div>        
        
  				<div class="panel-body">
                    <a class="btn btn-success" href="{{ URL::to('advanzer-admin/nuevo_usuario') }}">Nuevo</a><br><br>
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>Usuario</th>
								<th>Email</th>
								<th>Contraseña</th>
                                <th>Acciones</th>
						</thead>
						<tbody>
                            @foreach($users as $user => $u)
							<tr class="odd gradeX">
								<td>{{ $u->name }}</td>
								<td>{{ $u->email }}</td>
								<td>{{ $u->password }}</td>
                                <td>
                                    @if(Auth::user()['attributes']['id'] != $u->id)
                                    <a id="{{ $u->id }}" class="glyphicon glyphicon-remove deleteUser" href="#openModal"></a>
                                    @endif
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
    $("#users").addClass("current");
    
    var circular = "";
    var url = "{{ URL::to('advanzer-admin/eliminar_usuario') }}"
    
    $("#confirmDeleteUser").click( function () {
        window.location.href = circular;
    });
    
    $(".deleteUser").click( function (event){
        
        circular = url + '/' + event.target.id;
    });
    
</script>
    
<link href="{{ URL::to('vendors/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" media="screen">

<script src="{{ URL::to('vendors/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::to('vendors/datatables/dataTables.bootstrap.js') }}"></script>
<script src="{{ URL::to('js/admin/tables.js') }}"></script>
        
@endsection