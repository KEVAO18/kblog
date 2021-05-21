<?php 

function CM($serve){
	?>
        <div class="container mt-6-r">
          <div class="text-center color-3 mx-auto">
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
          </div>
        </div>
	<?php
}

?>