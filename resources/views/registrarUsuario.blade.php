@extends('master')
@section('encabezado')
<h2>Registrar usuarios</h2>
@stop
@section('contenido')
				<form action="{{url('/guardarUsuario')}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-group">
						<label for="">Nombre:</label>
						<input type="text" class="form-control" name="nombre">
					</div>
					<div class="form-group">
						<label for="">Edad:</label>
						<input type="text" class="form-control" name="edad">
					</div>
					<div class="form-group">
						<label for="">Correo:</label>
						<input type="text" class="form-control" name="correo">
					</div>
					<!--Cuando se mandan datos a una base de datos desde larabel se tienen que crear los siguientes campos
					en la tabla donde se guardan los datos del form: created_at	timestamp(tipo), updated_at	timestamp(tipo)-->
					<input type="submit" class="btn btn-primary">
					<a href="{{url('/usuarios')}}" class="btn btn-danger">Cancelar</a>
				</form>
@stop