
<!-- BEGIN YForm_Select Element -->
<div class="yform-item yform-password<?php echo empty($errors) ? '' : ' errors'; ?>">

	<?php if ( ! empty($label)): ?>
		<label for="<?php echo Arr::get($attributes, 'id'); ?>" >
			<?php echo $label; ?>
			<?php if ($object->get('required') !== FALSE): ?>

				<span class="required"><?php echo ($object->required === TRUE)?'*':$object->required; ?></span>

			<?php endif; ?>
		</label>
	<?php endif; ?>

	<select <?php echo HTML::attributes($attributes); ?>>
	<?php foreach ($object->options() as $value => $name): ?>
	<option value="<?php echo HTML::chars($value); ?>" <?php echo ((string)$value === (string)Arr::get($attributes, 'value'))? 'selected="selected"' : NULL; ?>><?php echo HTML::chars($name); ?></option>
	<?php endforeach; ?>
	</select>

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
<!-- END YForm_Select Element -->

