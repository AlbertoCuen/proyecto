@extends('master')
@section('encabezado')
<h1>Seccion de usuarios</h1>
@stop
@section('contenido')
					<a href="{{url('registrarUsuario')}}" class="btn btn-success">Nuevo usuario
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
					</a>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Edad</th>
							<th>Correo</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					<tbody>
						@foreach($usuarios as $u)
							<tr>
								<td>{{$u->id}}</td>
								<td>{{$u->nombre}}</td>
								<td>{{$u->edad}}</td>
								<td>{{$u->correo}}</td>
								<td><a href="{{url('eliminarUsuario')}}/{{$u->id}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Eliminar</a>
									<a href="{{url('modificarUsuario')}}/{{$u->id}}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Editar</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
@stop
