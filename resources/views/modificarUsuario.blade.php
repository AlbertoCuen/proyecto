<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificar usuario</title>
	<link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 well">
				<h1>Modificar usuario</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<form action="{{url('actualizarUsuario')}}/{{$usuario->id}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-group">
						<label for="">Nombre:</label>
						<input value="{{$usuario->nombre}}" type="text" class="form-control" name="nombre">
					</div>
					<div class="form-group">
						<label for="">Edad:</label>
						<input value="{{$usuario->edad}}" type="text" class="form-control" name="edad">
					</div>
					<div class="form-group">
						<label for="">Correo:</label>
						<input value="{{$usuario->correo}}" type="text" class="form-control" name="correo">
					</div>
					<input type="submit" class="btn btn-primary">
					<a href="{{url('/usuarios')}}" class="btn btn-danger">Cancelar</a>
				</form>
			</div>
		</div>
	</div>

</body>
</html>