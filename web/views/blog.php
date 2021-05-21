<?php

function blog($s){
	include_once 'parts/entradas.php';

	?>
	<div class="container mt-2-r">
    	<h1 class="fs-4 text-center mt-5-r">Entradas</h1>
		<hr class="bg-main w-70-v mb-50-px" >
		<div class="pb-2-r">
			<?=entradas($s)?>
		</div>
	</div>
	<?php

}

?>