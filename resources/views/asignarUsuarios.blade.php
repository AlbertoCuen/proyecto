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
				<div class="col-xs-12 well">
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
				</div>
				<div class="col-xs-12">
					<table class="table talbe-hover">
						<thead>
							<tr>
								<td>#</td>
								<td>Descripcion</td>
								<td>PDF</td>
							</tr>
						</thead>	
						<tbody>
							@foreach($proyectos as $p)
							<tr>
								<td>{{$p->id}}</td>
								<td>{{$p->descripcion}}</td>
								<td>
									<a href="{{url('pdfProyectos')}}/{{$p->id}}">
										<span class="glyphicon glyphicon-file" aria-hidden="true"></span>
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>

					</table>
				</div>
			</div>
		</div>
	</body>
</html>
