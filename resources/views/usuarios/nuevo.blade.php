<?php
use Illuminate\Support\Collection;

?>
@extends('layouts.main')

@section('title')
Crear nuevo Usuario
@stop

@section('content')
    <h1>Registro</h1>

    @if($errors->any())
        <ul class="alert alert-danger">
        @foreach($errors->all() as $campo => $mensaje)
            <li class="text-danger">{{ $mensaje }}</li>
        @endforeach
        </ul>
    @endif

    <?= Form::open(['route' => 'usuarios.nuevo', 'method' => 'post', 'files' => true]);?>
        @include('usuarios._form')

        <?= Form::submit('Crear', ['class' => 'btn btn-primary']); ?>

        <?= link_to_route('usuarios.index', 'Volver al listado', [], ['class' => 'btn btn-warning']); ?>
    <?= Form::close();?>
@stop
