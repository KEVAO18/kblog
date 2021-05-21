<?php

	function entradas($s){
//http://localhost/proyectos/php/consultas_k/
		?>
			<div id="contenedor" class="pt-2-r"></div>
			<script>
				$.ajax({
				  type: "get",
				  url: "https://kblog-api.herokuapp.com/All",
				  dataType: "json"
				}).done(
				  function (info) {
				    let data = info.entradas;

				    for (const d in data) {
				    	const contenedor = document.getElementById('contenedor');
				    	contenedor.innerHTML += `
				    		<div class="row"></div>
				    		<div class="row">
				    			<div class="col-sm-12 col-md-6 col-lg-3">
				    				<div class="card">
				    					<div class="card-header">`+data[d]['titulo']+`</div>
				    					<div class="card-body">
				    						`+data[d]['sub_T']+`
				    					</div>
				    					<div class="card-footer">
				    					    `+data[d]['autor']+`
				    					</div>
				    				</div>
				    			</div>
				    		</div>
				    	`;
				    }
				  }
				);
			</script>
		<?php
	}

?>