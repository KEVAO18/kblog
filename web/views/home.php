<?php

	function home($a, $s){
		include_once 'parts/entradas.php';
		?>
		<div class="container py-5-r">
			<?=entradas($a, $s)?>
		</div>
		<?php
	}

?>