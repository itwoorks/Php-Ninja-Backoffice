<form class='form-horizontal' id="form21" name="form21" action="form/update" method="POST" enctype="multipart/form-data">
    <fieldset>
        <legend class="lead"><?= $table_label?> <small><? if ($rid != -1) echo 'Editar'; else echo 'Añadir nuevo'; ?></small>
		
		</legend>

			
		<?= $form ?>


	<input type="hidden" name="table" value="<?= $table ?>">
	<input type="hidden" name="op" value='<?=$op?>'>
	<input type="hidden" name="rid" value="<?= $rid ?>">
	<div class='control-group'><label>&nbsp;</label><div class='controls'>
	    <a href='show/table/<?= $table ?>' class='btn'><i class='icon-arrow-left'></i> <?= GOBACK?></a>
    	&nbsp;&nbsp;
	<input class='btn btn-success' onclick="check_form_values(this.form);" type="button" value="<?= SAVEANDBACK?>">
	</div>
	</fieldset>
</form>