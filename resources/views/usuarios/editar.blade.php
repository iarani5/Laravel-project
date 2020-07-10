<?php
use Illuminate\Support\Collection;
?>
@extends('layouts.app')

@section('title')
Panel
@stop

@section('content')
<div class="container">
	<div class="row">
        <div class="col-md-8 col-md-offset-2">
				<h1>Panel</h1>
				<div class="panel panel-default confesar">
				<div class="panel-heading"><h2>Editar Usuario</h2></div>
                <div class="panel-body">
				
				@if($errors->any())
					<ul class="alert alert-danger">
					@foreach($errors->all() as $campo => $mensaje)
						<li class="text-danger">{{ $mensaje }}</li>
					@endforeach
					</ul>
				@endif

				<?= Form::model($usuario, [
					'route' => [
						'usuarios.editar', 
						$usuario->id
					],
					'method' => 'put'
				]);?>

				@include('usuarios._form')
				<?= Form::submit('Editar', ['class' => 'btn btn-primary']); ?>

				<?= link_to_route('usuarios.index', 'Volver al listado', [], ['class' => 'btn btn-warning']); ?>
				<?= Form::close();?>
				</div>
		</div>
	</div>
	</div>
</div>
@stop
