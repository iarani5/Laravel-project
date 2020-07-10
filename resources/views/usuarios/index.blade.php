<?php  ?>
@extends('layouts.app')

@section('title')
Listado de Usuarios
@stop

<?php ?>
@section('content')
<div class="container">

    <h1>Listado de Usuarios</h1>

    <table class="table table-bordered table-striped">
        <tr>
            <th>NUM</th>
            <th>MAIL</th>
            <th>USUARIO</th>
            <th>NIVEL</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
		
        @foreach($usuarios as $unUsuario)
            <tr>
                <td>{{ $unUsuario->id }}</td>
                <td>{{ $unUsuario->email }}</td>
                <td>{{ $unUsuario->name }}</td>
                <td><?php
					if($unUsuario->is_admin){
						echo "admin";
					}
					else{
						echo "usuario";
					}
				?></td>
                <td><?= link_to_route('usuarios.editarForm', 'Editar', [$unUsuario->id], ['class' => 'btn btn-warning']);?></td>
                <td>{{ Form::open(['route' => ['usuarios.eliminar', $unUsuario->id], 'method' => 'delete', 'class' => 'deleteconf']) }}
                    <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
                {{ Form::close() }}</td>
            </tr>
        @endforeach
    </table>
	</div>
	<?php ?>
@stop