<?php
use Illuminate\Support\Collection;
?>

<div class="form-group">
    <?= Form::label('email', 'Mail:', ['class' => 'control-label']);?>
    <?= Form::email('email', null, ['class' => 'form-control', 'readonly']);?>
</div>
<div class="form-group <?php 
if($errors->has('name')) {
    echo "has-error";
}
?>">
    <?= Form::label('name', 'Usuario:', ['class' => 'control-label']);?>
    <?= Form::text('name', null, ['class' => 'form-control']);?>
</div>


<div class="form-group">
<?php $id_admin = (object) array( '0' => 'usuario', '1' => 'admin'); ?>
<div class="form-group">
    <?= Form::label('is_admin', 'Nivel:', ['class' => 'control-label col-md-4 control-label']);?>
		<div class="col-md-6">
			<?= Form::select('is_admin', $id_admin, null, ['class' => 'form-control col-md-4 control-label']);?>
		</div>
	</div>
</div>