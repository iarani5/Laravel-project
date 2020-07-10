<?php ?>
@extends('layouts.app')

@section('content')


<div class="container">
	<h1>Listado de Confesiones</h1>
	<div class="hiperconfesiones">
		<?= link_to_route('confesiones.nuevoForm', 'Confesar', [], ['class' => 'btn btn-primary']);?>
		<?= link_to_route('confesiones.mias', 'Mis confesiones', [], ['class' => 'btn btn-primary']);?> 
	</div>

	 <table class="table table-bordered table-striped">
        <tr>
            <th>NUM</th>
            <th>TITULO</th>
            <th>CONFESION</th>
            <th>FECHA</th>
            <th>USUARIO</th>
            <th>GENERO</th>
        </tr>
		
		 @foreach($confesiones as $unaConfesion)
            <tr class="trconfesion">
                <td>{{ $unaConfesion->id_confesiones }}</td>
                <td>{{ $unaConfesion->TITULO }}</td>
                <td>{{ $unaConfesion->CONFESION }}</td>
                <td>{{ $unaConfesion->FECHA_CREACION }}</td>
                <td>{{ $unaConfesion->USUARIO->name }}</td>
                <td>{{ $unaConfesion->GENERO->genero }}</td>
			</tr>
        @endforeach
	</table>
	
</div>
<?php ?>
@stop