<?php 

function E9(){
	?>
	<div class="container">	
	    <div class="container py-4">
			<div class="row py-5">
				<div class="col-12 card py-2-r">
					<div class="text-center py-3">
						<h4 class="ti-text" id="par"></h4>
					</div>
					<div class="progress" style="">
	  					<div class="progress-bar progress-bar-striped progress-bar-animated" id="barra" role="progressbar" style="width: 5%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<script type="text/javascript">
		document.getElementById('par').innerHTML = "only on pc";
	</script>
	<?php
}

?>