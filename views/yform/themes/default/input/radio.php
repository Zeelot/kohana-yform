
<!-- BEGIN YForm_Radio Element -->
<div class="yform-item yform-radio<?php echo empty($errors) ? '' : ' has-errors'; ?>" id="<?php echo Arr::get($attributes, 'id'); ?>-container">	
	<input <?php echo HTML::attributes($attributes); ?>/>
	<?php if ( ! empty($label)): ?>
		<label for="<?php echo Arr::get($attributes, 'id'); ?>" ><?php echo $label; ?></label>
	<?php endif; ?>

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
<!-- END YForm_Radio Element -->
