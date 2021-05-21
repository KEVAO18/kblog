<?php 

function CM($serve){
	?>
        <div class="container mt-6-r text-center">
<!--           <div class="text-center color-3 mx-auto">
            <h1>Contact Me</h1>
            <hr class="w-80-p mx-auto">
			<div class="w-80-p mx-auto">
				<form action="<?=$serve?>web/controllers/send.php" method="post" accept-charset="utf-8">
					<div class="md-form">
				  		<input type="email" id="email" name="email" required class="form-control">
				  		<label for="email">Your E-mail</label>
					</div>
					<div class="md-form">
				  		<input type="number" id="phone" name="phone" class="form-control">
				  		<label for="phone">Your phone</label>
					</div>
					<div class="md-form">
				  		<input type="text" id="affair" name="affair" required class="form-control">
				  		<label for="affair">The affair</label>
					</div>
					<div class="form-group">
					  <textarea class="form-control rounded-0" id="content" name="content" rows="5"></textarea>
					</div>
            		<input type="submit" class="btn btn-outline-primary mx-auto my-4" value="Ok" name="Enviar">
				</form>
			</div>
          </div> -->
          <h1>Contact Me</h1>
          <hr class="w-80-p mx-auto">
          <div class="mt-3-r mb-1-r row">
          	<div class="col-6">
          		<a href="https://wa.link/mle7t1" target="_blank" class="btn btn-block btn-outline-dark">Whatsapp</a>
          	</div>
          	<div class="col-6">
          		<a href="https://www.linkedin.com/in/kevaotech/" target="_blank" class="btn btn-block btn-outline-dark">LinkedIn</a>
          	</div>
          </div>
          <div class="mt-3-r mb-1-r row">
          	<div class="col-6">
          		<a href="https://www.facebook.com/KEVAODv/" target="_blank" class="btn btn-block btn-outline-dark">Facebook</a>
          	</div>
          	<div class="col-6">
          		<a href="https://github.com/KEVAO18" target="_blank" class="btn btn-block btn-outline-dark"><i class='fab fa-github-alt'></i> GitHub</a>
          	</div>
          </div>
          <div class="mt-3-r mb-1-r row">
          	<div class="col-6">
          		<a href="<?=$serve?>/assets/docs/CV1.pdf" target="_blank" class="btn btn-block btn-outline-dark">curriculum Spanish</a>
          	</div>
          	<div class="col-6">
          		<a href="<?=$serve?>/assets/docs/CV2.pdf" target="_blank" class="btn btn-block btn-outline-dark">curriculum English</a>
          	</div>
          </div>
        </div>
	<?php
}

?>