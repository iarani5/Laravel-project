<?php
use Illuminate\Support\Collection;
use Carbon\Carbon;
?>

<div class="container">
	<div class="form-group">
		<?= Form::label('TITULO', 'Titulo:', ['class' => 'control-label col-md-4 control-label']);?>
		<div class="col-md-6">
			<?= Form::text('TITULO', null, ['class' => 'form-control']);?>
		</div>
	</div>
	<div class="form-group <?php
	if($errors->has('CONFESION')) {
		echo "has-error";
	}
	?>">
		<?= Form::label('CONFESION', 'Confesion:', ['class' => 'control-label col-md-4 control-label']);?>
		<div class="col-md-6">
			<?= Form::textarea('CONFESION', null, ['class' => 'form-control']);?>
		</div>
	</div>
	<div class="form-group">
    <?= Form::label('id_genero', 'Genero:', ['class' => 'control-label col-md-4 control-label']);?>
		<div class="col-md-6">
			<?= Form::select('id_genero', $generos, null, ['class' => 'form-control col-md-4 control-label']);?>
		</div>
	</div>
	<div>
		 <input type="hidden" name="FECHA_CREACION" value="<?= Carbon::now(); ?>">
	</div>
</div>