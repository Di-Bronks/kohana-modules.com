
<!-- BEGIN YForm_Submit Element -->
<div class="yform-item yform-submit<?php echo empty($messages['errors']) ? '' : ' has-errors'; ?>" id="search-container">
	<button type="submit"><?php echo (empty($label))?'':$label;?></button>

	<?php foreach ($messages as $type => $array): ?>
		<?php if ($type !== 'errors'): // We want errors last ?>
			<?php foreach ($array as $message): ?>

		<div class="message <?php echo $type; ?>"><?php echo $message; ?></div>

			<?php endforeach; ?>
		<?php endif; ?>
	<?php endforeach; ?>

	<?php foreach (Arr::get($messages, 'errors', array()) as $error): ?>
		<div class="message error"><?php echo $error; ?></div>
	<?php endforeach; ?>
</div>
<!-- END YForm_Submit Element -->