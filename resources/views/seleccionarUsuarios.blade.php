<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Asignar usuarios</title>
		<link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}"> <!--asset es para que jale el archivo a cualquier profundidad-->
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 well">
					<h1>Asignar usuarios a pryectos</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<form action="{{url('/seleccionarUsuarios')}}" method="POST">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class=" form-group">
							<label for="">Proyectos:</label>
							<select class="form-control" name="proyectos" id="">
								@foreach($proyectos as $p)
									<option value="{{$p->id}}">{{$p->descripcion}}</option>
								@endforeach
							</select>
							<br>
							<input class="btn btn-primary" type="submit" value="Mostrar">
						</div>
					</form>
					<form action="{{url('/actualizarUsuariosProyectos')}}/{{$id}}" method="POST">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>#</th>
									<th>Nombre</th>
									<th>Edad</th>
									<th>Correo</th>
									<th>Seleccionar</th>
								</tr>
							</thead>
							<tbody>
								@foreach($usuarios as $u)
									<tr>
										<td>{{$u->id}}</td>
										<td>{{$u->nombre}}</td>
										<td>{{$u->edad}}</td>
										<td>{{$u->correo}}</td>
										<td><input type="checkbox" name="seleccionar[]" value="{{$u->id}}"></td>
									</tr>
									@endforeach
									<tr class="text-center">
										<td colspan="5">
											<input class="btn btn-success" type="submit" value="Agregar">
										</td>
									</tr>
							</tbody>
						</table>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>