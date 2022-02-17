<div>
	<?php foreach ($test_data as $i => $pregunta) { ?>
	<div>
		<p><?=$pregunta['pregunta']?></p>
		<?php foreach ($pregunta['respuestas'] as $rpta) { ?>
		<p><input type="radio" name="pregunta-<?=$i?>"> <?=$rpta?></p>
		<?php } ?>
	</div>
	<?php } ?>
</div>
