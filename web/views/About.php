<?php 

function About($ag, $ex, $s){
	?>
    <div class="mt-6-r">
        <center><h1 class="display-4" style="">KEVAO DEV.</h1></center>
    </div>
    <div class="container">
			<center><img class="icon" src="<?=$s?>/assets/media/favicon.png"></center>
			<br>
			<h1 class=" text-center py-1-r">
				About Me
			</h1>
			<div class="row py-2-r">
				<div class="col-sm-12 col-md-6">
					<ul class="list-unstyled text-center py-2-r card bg-primary text-light fs-1">
						<li><strong>Name:</strong> Kevin Andres Orrego Martínez</li>
						<li><strong>Age: </strong><?=$ag?></li>
						<li><strong>Position: </strong>Web and Desktop Developer</li>
						<li><strong>Experience: </strong><?=$ex?> años</li>
					</ul>
				</div>
				<div class="col-sm-12 col-md-6">
					<ul class="list-unstyled text-center py-2-r card bg-primary text-light fs-1">
						<li><strong>Graduation Degree:</strong> Bachiller tecnico Informatico</li>
						<li><strong>High School:</strong> INEM "Jose Felix de Restrepo"</li>
						<li><strong>Graduation Year:</strong> 2019</li>
						<li><strong>Hobbies:</strong> Programming, Read, Drawing and Gaming</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="container py-2-r px-2-r text-center">
						<p>As a programmer my technical, labor and human training have helped me to reinforce my resourcefulness, creativity, teamwork and discipline, I have gained experience with various technologies in the field of software development.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container bg-ligth my-4-r">
			<hr class="w-100 d-md-none bg-dark">
			<h2 class="text-center fs-4">Skills</h2>
			<div class="text-center fs-2 my-4-r">Programming Languages</div>
			<div class="row py-2-r">
				<div class="col-xs-12 col-lg-4">
				    <center>
						<a class="color-3" href="https://www.sololearn.com/Certificate/1059-5459778/jpg" target="_blank">
							<img class="pro-icon" src="http://pngimg.com/uploads/php/php_PNG26.png"/>
							<br>PHP
						</a>
				    </center>
				</div>
				<div class="col-xs-12 col-lg-4">
					<center>
						<a class="color-3" href="https://www.sololearn.com/Certificate/1014-5459778/jpg" target="_blank">
							<img class="pro-icon" src="https://upload.wikimedia.org/wikipedia/commons/c/c5/Html5_dise%C3%B1o_web.png"/>
							<br>HTML5
						</a>
					</center>
				</div>
				<div class="col-xs-12 col-lg-4">
				    <center>
						<a class="color-3" href="https://www.sololearn.com/Certificate/1023-5459778/jpg" target="_blank">
							<img class="pro-icon" src="https://cdn.pixabay.com/photo/2017/08/05/11/16/logo-2582747_960_720.png"/>
							<br>CSS3
						</a>
				    </center>
				</div>
			</div>
			<div class="row py-2-r">
				<div class="col-xs-12 col-lg-6">
				    <center>
						<a class="color-3" href="https://www.sololearn.com/Certificate/1023-5459778/jpg" target="_blank">
							<img class="pro-icon" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/480px-Unofficial_JavaScript_logo_2.svg.png"/>
							<br>JS
						</a>
				    </center>
				</div>
				<div class="col-xs-12 col-lg-6">
				    <center>
						<a class="color-3" href="https://godotengine.org/" target="_blank">
							<img class="pro-icon" src="https://iconape.com/wp-content/png_logo_vector/godot-logo.png"/>
							<br>GDSCRIPT
						</a>
				    </center>
				</div>
			</div>
			<hr class="w-100 d-md-none bg-dark">
			<div class="text-center fs-2 my-4-r">Frameworks and Libraries</div>
			<div class="row py-2-r">
				<div class="col-xs-12 col-lg-3">
				    <center>
						<a class="color-3" href="https://getbootstrap.com/" target="_blank">
							<img class="pro-icon" src="https://www.drupal.org/files/project-images/bootstrap-stack.png"/>
							<br>BOOTSTRAP
						</a>
				    </center>
				</div>
				<div class="col-xs-12 col-lg-3">
				    <center>
						<a class="color-3" href="https://materializecss.com/" target="_blank">
							<img class="pro-icon" src="https://i.pinimg.com/originals/d1/78/7c/d1787c2575b620e409acdf1fb23a23f7.png"/>
							<br>MATERIALIZECSS
						</a>
				    </center>
				</div>
				<div class="col-xs-12 col-lg-3">
				    <center>
						<a class="color-3" href="https://laravel.com/" target="_blank">
							<img class="pro-icon" src="https://www.mavenlogix.org/wp-content/uploads/2019/01/laravel-512-400x400.png"/>
							<br>LARAVEL
						</a>
				    </center>
				</div>
				<div class="col-xs-12 col-lg-3">
				    <center>
						<a class="color-3" href="https://www.sololearn.com/Certificate/1082-5459778/jpg" target="_blank">
							<img class="pro-icon" src="https://www.programmingscripts.com/wp-content/uploads/2016/01/jquery-icon.png"/>
							<br>JQUERY
						</a>
				    </center>
				</div>
			</div>
			<hr class="w-100 d-md-none bg-dark">
			<div class="text-center fs-2 my-4-r">Databases</div>
			<div class="row py-2-r">
				<div class="col-xs-12 col-lg-12">
				    <center>
						<a class="color-3" href="https://www.sololearn.com/certificates/course/en/5459778/1060/landscape/png" target="_blank" >
							<img class="pro-icon" src="http://perudev.pe/wp-content/uploads/2019/05/mysql_PNG35.png"/>
							<br>SQL
						</a>
				    </center>
				</div>
			</div>
		</div>
	<?php
}


?>