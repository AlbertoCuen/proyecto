<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>Lista de usuarios en proyecto</title>
</head>
<body>
	<h1>Listado de usuarios</h1>
	<h2>Proyecto: {{$proyecto->descripcion}}</h2>
	<hr>
	@if($usuarios != null)
	<table>
		<tr>
			<td>Nombre</td>
			<td>Edad</td>
		</tr>
	@foreach($usuarios as $u)
		<tr>
			<td>{{$u->nombre}}</td>
			<td>{{$u->edad}}</td>
		</tr>
	@endforeach	
	</table>
	@else
	<h2>No hay usuarios asignados al proyecto</h2>
	@endif
</body>
</html>