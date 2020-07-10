<?php ?>
@extends('layouts.app')

@section('content')


<div class="container">

    <h1>Panel</h1>
    <h2>Mis Confesiones</h2>
	<table class='table table-bordered table-striped'>
	<?php $id=Auth::user()->id;
		  $ban=0;
	?>
        @foreach($confesiones as $unaConfesion)
		<?php $id_us=$unaConfesion->USUARIO->id;
			if($id_us==$id){
				if($ban==0){
					echo "<tr>
						<th>NUM</th>
						<th>TITULO</th>
						<th>CONFESION</th>
						<th>FECHA</th>
						<th>GENERO</th>
						<th>Editar</th>
						<th>Eliminar</th>";
						$ban=1;
				}
		?>
				<tr class="trconfesion">
						<td>{{$unaConfesion->id_confesiones }}</td>
						<td>{{$unaConfesion->TITULO }}</td>
						<td>{{$unaConfesion->CONFESION }}</td>
						<td>{{$unaConfesion->FECHA_CREACION }}</td>
						<td>{{ $unaConfesion->GENERO->genero }}</td>
						<td><?=link_to_route('confesiones.editar', 'Editar', [$unaConfesion->id_confesiones], ['class' => 'btn btn-warning'])?></td>
						<td>{{ Form::open(['route' => ['confesiones.eliminar', $unaConfesion->id_confesiones], 'method' => 'delete', 'class' => 'deleteconf']) }}<button class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></button>
							{{Form::close()}}</td>
						
					</tr>
			
			<?php } ?>

		@endforeach

	</table>
	 <?= link_to_route('confesiones.index', 'Volver al listado', [], ['class' => 'btn btn-warning']); ?>
    
</div>
<?php ?>
@stop