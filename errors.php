<?php if (count($errors) > 0): ?>
	<div class="row">
		<div class="input-field col s8"></div>
		<div class="input-field col s4">
		<?php foreach ($errors as $error): ?>
			<p><?php echo $error; ?></p>
		<?php endforeach ?>
		</div>
	</div>
<?php endif ?>