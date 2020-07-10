<?php
use Illuminate\Support\Collection;
/** @var \App\Models\Producto $producto */
/** @var array $marcas */
/** @var array $categorias */
/** @var Collection $errors */
?>
@extends('layouts.main')

@section('title')
Login
@stop

@section('content')
    <h1>Login</h1>
    @if($errors->any())
        <ul class="alert alert-danger">
        @foreach($errors->all() as $campo => $mensaje)
            <li class="text-danger">{{ $mensaje }}</li>
        @endforeach
        </ul>
    @endif

    <?= Form::model($usuario, [
        'route' => [
            'usuarios.login', // El nombre de la ruta.
            $usuario->id_usuario // El parámetro que le quiero pasar.
        ],
        'method' => 'put'
    ]);?>

            @include('usuarios._form')
        <?= Form::submit('Editar', ['class' => 'btn btn-primary']); ?>

        <?= link_to_route('usuarios.index', 'Volver al listado', [], ['class' => 'btn btn-warning']); ?>
    <?= Form::close();?>
@stop
