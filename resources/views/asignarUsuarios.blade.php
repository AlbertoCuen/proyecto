@extends('master')
@section('encabezado')
<h2>Registrar usuarios</h2>
@stop
@section('contenido')
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
@stop
