<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<div class="jumbotron">
					<h1>Nombre: {{$nombre}}</h1>
					<h1>Edad: {{$edad}}</h1>
					<hr>
				</div>
			</div>
		</div>
	</div>
</body>
</html

